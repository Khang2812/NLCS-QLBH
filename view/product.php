<?php
    include ("header.php");
    include "../model/connectdb.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    $dsdm = getall_dm();
    $dssp = getall_sp();
?>
<div style="text-align: center;padding:20px">
    <h2>Giá thay thế sửa chữa</h2>
</div>
<div class="maindm row">
    <div class="dmtrai col-3">
        <!-- <h4>Danh mục</h4> -->
        <ul>
            <?php 
                // foreach ($dsdm as $dm) {
                //     echo '<li><a href="index.php?product&id='.$dm['id'].'">'.$dm['cat_ten'].'</a></li>';
                // }
            ?>
        </ul>
    </div>
    <div class="dmphai col-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    
                        $i=1;
                        foreach ($dssp as $sp){
                            echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$sp['sp_ten'].'</td>
                                    <td><img src="../uploads/'.$sp['sp_anh'].'" width="100"></td>
                                    <td>'.$format_number_1 = number_format($sp['sp_gia']).'đ</td>
                                </tr>';
                                $i++;
                            }
                        
                    
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    include ("footer.php")
?>