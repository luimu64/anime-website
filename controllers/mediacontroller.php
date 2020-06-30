<?php

require_once "database/models/media.php";


function mediaController() {
    $pdo = connectDB();
    $allinfo = getAllMediaInfo($pdo);
    require "views/media.view.php";
}


function addMediaController() {
    if(isset($_POST['title'], $_POST['link'])){
        $title = $_POST['title'];
        $link = $_POST['link'];
        $pdo = connectDB();
        addmedia($pdo, $title, $link);
        header("Location: /media");
    } else {
        require "views/addmedia.view.php";
    }
}

?>