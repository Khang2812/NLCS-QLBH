<!-- http://localhost:3000/ -->

<?php 
    include "model/connectdb.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    $dsdm = getall_dm();
    $dssp = getall_sp();
    include "view/header.php";
 
    if(isset($_GET['act'])){
        switch ($_GET['act']){
            case'product':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                }
                include 'view/product.php';
                break;
            case'tracuu':
                include 'view/tracuu.php';
                break;
            case'login':
                include 'view/login.php';
                break;


            default:
                include 'view/home.php';
                break;
        }
        }else{
            require_once 'view/home.php';
        }

        include "view/footer.php";
    
?>