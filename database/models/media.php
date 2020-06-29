<?php

function getAllMediaInfo($pdo) {
    $sql = "SELECT * FROM media";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

?>