<?php


function login($pdo, $username, $password){
    $cleanusername = cleanUpInput($username);
    $sql = "SELECT * FROM users WHERE username=?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$cleanusername]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    $hashedpassword = $user["password"];

    if($hashedpassword && password_verify($password, $hashedpassword))
        return $user;
    else 
        return false;
}


function addUser($pdo, $username, $password){
    $cleanusername =  cleanUpInput($username);
    $hashedpassword = hashPassword($password);
    $data = [$cleanusername, $hashedpassword];
    $sql = "INSERT INTO users (username, password) VALUES(?,?)";
    $stm=$pdo->prepare($sql);
    return ($stm->execute($data));
}


function checkScKey($pdo, $sckey) {
    $sql = "SELECT sckey FROM registering_keys";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    if (in_array_r($sckey, $all)) {
        $sql = "DELETE FROM registering_keys WHERE sckey = ?";
        $stm= $pdo->prepare($sql);
        $stm->execute([$sckey]);
        return TRUE;
    } else return FALSE;
}

function deletePost($pdo, $id) {
    $cleanid = cleanUpInput($id);
    $sql = "DELETE FROM posts WHERE id = ?";
    $stm= $pdo->prepare($sql);
    $stm->execute([$cleanid]);
}
?>