<?php
$currentpage = "media";
if(isLuimu()) require "public/partials/adminheader.php";
else if(isLoggedIn()) require "public/partials/loggedheader.php";
else require "public/partials/header.php";
?>

<div class="bg-particles" id="particles-js"></div>
<div class="container">
      <div class="row">
        <div class="col-lg-3 col-xl-3 col-md-2"></div>
        <div class="col-sm-12 col-lg-6 col-xl-6 col-md-8 text-center">
            <h1 class="mt-3 header1">Media</h1>
        </div>
        <div class="col-lg-3 col-xl-3 col-md-2"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        foreach ($allinfo as $values) {
        ?>
        <div class="col-sm-12 col-lg-4 col-xl-3 col-md-6 text-center movie-container">
            <iframe frameborder="0" src="<?=$values["link"]?>" allowfullscreen ></iframe>
        </div>
        <?php
        }
        ?>
    </div>
</div>


<?php
require "public/partials/loggedfooter.php";
?>