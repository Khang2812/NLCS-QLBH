<?php
function getall_laptop(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM laptop");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>