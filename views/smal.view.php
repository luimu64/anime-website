<?php
$currentpage = "smal";
if(isLuimu()) require "public/partials/adminheader.php";
else if(isLoggedIn()) require "public/partials/loggedheader.php";
else require "public/partials/header.php";
?>

<div class="bg-particles" id="particles-js"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-xl-3 col-md-2"></div>
        <div class="col-sm-12 col-lg-6 col-xl-6 col-md-8 text-center">
          <h1 class="mt-3 header1">Suckless My Anime List</h1>
          <div class="btn-group-vertical btn-block">
          <div class="row">
          <?php
          foreach ($allinfo as $values) {
          ?>
            <div class="col-sm-6 col-lg-6 col-xl-6 col-md-6 text-center">
                <p class="smal-title"><?=$values["name"]?></p>
            </div>
            <div class="col-sm-4 col-lg-4 col-xl-4 col-md-4 text-center">
                <p class="smal-title"><?=$values["status"]?></p>
            </div>
            <div class="col-sm-2 col-lg-2 col-xl-2 col-md-2 text-center">
                <p class="smal-title"><?=$values["score"]?>/10</p>
            </div>
          <?php
          }
          ?>
          </div>
        </div>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-2"></div>
    </div>
</div>


<?php
require "public/partials/footer.php";
?>