<?php
require_once "database/models/users.php";

function loginController() {
    if(isset($_POST['username'], $_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pdo = connectDB();
        $result = login($pdo, $username, $password);
        if($result){
            $_SESSION['username'] = $result['username'];
            $_SESSION['id'] = $result['id'];
            $_SESSION['session_id'] = session_id();
            header("Location: /"); 
        } else {
            require "views/login.view.php";
        }
    } else {
        require "views/login.view.php";
    }
}

function registeringController() {
    if(isset($_POST['username'], $_POST['password'], $_POST['sckey'])){
        $pdo = connectDB();
        $username = $_POST['username'];
        $password = $_POST['password']; 
        $sckey = $_POST['sckey'];
        if (checkScKey($pdo, $sckey)) {
            addUser($pdo, $username, $password);
            require "views/login.view.php";
        } else {
            echo "Incorrect secrect key!";
            require "views/register.view.php";
        }
        
    } else {
        require "views/register.view.php";
    }
}

function adminFrontController() {
    if(isset($_POST['id'])){
        $pdo = connectDB();
        $id = $_POST['id'];
        deletePost($pdo, $id);
        $allinfo = getAllPostsInfo($pdo);
        $sorted = array_sort($allinfo, "likes");
        require "views/adminfrontpage.view.php";
    } else {
        $pdo = connectDB();
        $allinfo = getAllPostsInfo($pdo);
        $sorted = array_sort($allinfo, "likes");
        require "views/adminfrontpage.view.php";
    }
}

function logoutController(){
    session_unset();
    session_destroy();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
    header("Location: /");
    die();
}

?>