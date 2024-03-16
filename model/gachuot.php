<?php
function getall_chuot(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM chuot");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>