<?php
function getAllDownloadsInfo($pdo) {
    $sql = "SELECT * FROM downloads";
    $stm = $pdo->query($sql);
    $all = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $all;
}

function adddownload($pdo, $title, $link, $category) {
    $cleantitle =  cleanUpInput($title);
    $cleanlink = cleanUpInput($link);
    $cleancategory = cleanUpInput($category);
    $data = [$cleantitle, $cleanlink, $cleancategory];
    $sql = "INSERT INTO downloads (title, link, category) VALUES(?,?,?)";
    $stm=$pdo->prepare($sql);
    return ($stm->execute($data));
}
?>
