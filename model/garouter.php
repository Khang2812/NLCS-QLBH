<?php
function getall_router(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM router");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>