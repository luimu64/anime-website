<?php
$currentpage = "downloads";
if(isLuimu()) require "public/partials/adminheader.php";
else if(isLoggedIn()) require "public/partials/loggedheader.php";
else require "public/partials/header.php";
?>

<script>
  function nhentai() {
    var vastaus = prompt("Anna koodi:");
    var linkki = "https://nhentai.net/g/" + vastaus;
    if (vastaus == null || vastaus == false) {
        location.reload(true);
    } else {
        window.open(linkki, "_blank");
    }
  }
  function download(dlink) {
    window.open(dlink, "_self");
  }

  function unhide() {
    if (document.getElementById("hidden-form").style.visibility == "hidden") alert("hidden");
    else (document.getElementById("hidden-form").style.visibility == "visible") alert("visible");
  }
</script>

<div class="bg-particles" id="particles-js"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-xl-3 col-md-2"></div>
        <div class="col-sm-12 col-lg-6 col-xl-6 col-md-8 text-center">
          <h1 class="mt-3 header1">Downloads</h1>
          <div class="btn-group-vertical btn-block">
          <?php
          foreach ($allinfo as $values) {
          ?>
            <button type="button" onclick=download("<?=$values['link']?>") class="btn btn-secondary btn-primary"><?=$values['title']?></button>
          <?php
          }
          ?>
          </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-2"></div>
      </div>
    </div>
<?php
require "public/partials/loggedfooter.php";
?>