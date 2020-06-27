<?php

function getAllSmalInfo($pdo) {
    $sql = "SELECT * FROM SMAL";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}