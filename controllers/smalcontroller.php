<?php

require_once "database/models/smal.php";

function smalController() {
    $pdo = connectDB();
    $allinfo = getAllSmalInfo($pdo);
    require "views/smal.view.php";
}


function addSmalController() {

    if(isset($_POST['name'], $_POST['score'], $_POST['status'])){
        $name = $_POST['name'];
        $score = $_POST['score'];
        $status = $_POST['status'];
        $pdo = connectDB();
        addsmal($pdo, $name, $score, $status);
        header("Location: /smal");
    } else {
        require "views/addsmal.view.php";
    }
}

?>