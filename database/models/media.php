<?php

function getAllMediaInfo($pdo) {
    $sql = "SELECT * FROM media";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

function addmedia($pdo, $title, $link) {
    $cleantitle =  cleanUpInput($title);
    $cleanlink = cleanUpInput($link);
    $data = [$cleantitle, $cleanlink];
    $sql = "INSERT INTO media (title, link) VALUES(?,?)";
    $stm=$pdo->prepare($sql);
    return ($stm->execute($data));
}

?>