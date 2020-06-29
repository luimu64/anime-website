<?php

require_once "database/models/media.php";


function mediaController() {
    $pdo = connectDB();
    $allinfo = getAllMediaInfo($pdo);
    require "views/media.view.php";
}

?>