<?php
function getall_case(){
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM casepc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
?>