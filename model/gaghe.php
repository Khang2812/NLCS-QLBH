<?php
function getall_ghe(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM ghe");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>