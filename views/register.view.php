<?php
$currentpage = "register";
require "public/partials/header.php";
?>
<div class="bg-particles" id="particles-js"></div>
<div class="row">
  <div class="col-sm-3 filler"></div>
    <div class="col-sm-6">
        <form action="/register" method="post">
            <input class="post-input" type="text" maxlength="20" name="username" placeholder="Username"><br>
            <input class="post-input" type="password" maxlength="60" name="password" placeholder="Password"><br>
            <input class="post-input" type="text" maxlength="60" name="sckey" placeholder="Secret Key"><br>
            <input class="post-input" type="submit" value="Register">
            <a href="/login">Login</a>
        </form>
    </div>
  <div class="col-sm-3 filler"></div>
</div>

<?php
require "public/partials/footer.php";
?>