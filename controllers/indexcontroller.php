<?php

require_once "database/models/downloads.php";

function indexController() {
    $pdo = connectDB();
    $allinfo = getAllDownloadsInfo($pdo);
    var_dump($_SESSION);
    require "views/frontpage.view.php";
}

function adminIndexController() {
    $pdo = connectDB();
    $allinfo = getAllDownloadsInfo($pdo);
    var_dump($_SESSION);
    require "views/adminfrontpage.view.php";
}

function addDownloadController() {
    if(isset($_POST['title'], $_POST['link'], $_POST['category'])){
        $title = $_POST['title'];
        $link = $_POST['link'];
        $category = $_POST['category'];
        $pdo = connectDB();
        adddownload($pdo, $title, $link, $category);
        header("Location: /");
    } else {
        require "views/adddownload.view.php";
    }
}
?>