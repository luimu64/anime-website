<?php


function login($pdo, $username, $password){
    $cleanusername = cleanUpInput($username);
    $sql = "SELECT * FROM admin WHERE username=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$cleanusername]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    $hashedpassword = $user["password"];

    if($hashedpassword && password_verify($password, $hashedpassword))
        return $user;
    else 
        return false;
}

function checkKey($pdo, $sckey) {
    $sql = "SELECT * FROM SMAL";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return in_array($sckey, $all);
}

function deletePost($pdo, $id) {
    $cleanid = cleanUpInput($id);
    $sql = "DELETE FROM posts WHERE id = ?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$cleanid]);
}
?>