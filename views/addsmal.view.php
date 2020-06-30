<?php
$currentpage = "adddownload";
if(isLuimu()) require "public/partials/adminheader.php";
else if(isLoggedIn()) require "public/partials/loggedheader.php";
else require "public/partials/header.php";
?>
<div class="bg-particles" id="particles-js"></div>
<div class="row">
  <div class="col-sm-3 filler"></div>
    <div class="col-sm-6 text-center">
      <h1 class="mt-3 header1">Add smal</h1>
      <form action="/add_smal" method="post">
            <input class="post-input" type="text" maxlength="100" name="name" placeholder="Name"><br>
            <input class="post-input" type="text" maxlength="2" name="score" placeholder="Score"><br>
            <select name="status" class="post-input">
              <option value="planning">Planning</option>
              <option value="watching">Watching</option>
              <option value="dropped">Droppped</option>
              <option value="watched">Watched</option>
            </select>
            <input class="post-input" type="submit" value="Add new">
          </form>
    </div>
  <div class="col-sm-3 filler"></div>
</div>

<?php
require "public/partials/footer.php";
?>