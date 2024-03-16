<?php
function getall_loa(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM loa");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>