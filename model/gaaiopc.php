<?php
function getall_aiopc(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM aiopc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>