<?php
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    $dsdm = getall_dm();
    $dssp = getall_sp();
    
?>
<div class="dmphai col-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($dssp as $sp) {
                        echo '
                        <tr>
                            <th scope="row">'.$sp['sp_ten'].'</th>
                            <td>'.$sp['sp_ten'].'</td>
                            <td>'.$format_number_1 = number_format($sp['sp_gia']).'</td>
                        </tr>';
                    }
                ?>

                
            </tbody>
        </table>
    </div>