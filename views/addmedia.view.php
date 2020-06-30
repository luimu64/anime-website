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
      <h1 class="mt-3 header1">Login</h1>
      <form action="/add_media" method="post">
            <input class="post-input" type="text" maxlength="100" name="title" placeholder="Title"><br>
            <input class="post-input" type="text" maxlength="1000" name="link" placeholder="Link"><br>
            <select name="category" class="post-input">
              <option value="generic">Generic</option>
              <option value="games">Games</option>
            </select>
            <input class="post-input" type="submit" value="Add new">
          </form>
    </div>
  <div class="col-sm-3 filler"></div>
</div>

<?php
require "public/partials/footer.php";
?>