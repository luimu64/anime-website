<?php

function getAllSmalInfo($pdo) {
    $sql = "SELECT * FROM SMAL";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

function addsmal($pdo, $name, $score, $status) {
    $cleanname =  cleanUpInput($name);
    $cleanscore = cleanUpInput($score);
    $cleanstatus = cleanUpInput($status);
    $data = [$cleanname, $cleanscore, $cleanstatus];
    $sql = "INSERT INTO SMAL (name, score, status) VALUES(?,?,?)";
    $stm=$pdo->prepare($sql);
    return ($stm->execute($data));
}
?>