<?php

require_once "database/models/smal.php";

function smalController() {
    $pdo = connectDB();
    $allinfo = getAllSmalInfo($pdo);
    require "views/smal.view.php";
}

?>