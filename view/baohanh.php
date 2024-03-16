<?php
        include("../model/connectdb.php");
        include("../model/baohanh.php");
        include("header.php");
        
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tra cứu bảo hành</li>
    </ol>
</nav>
<hr>

<div class="bh">
    <div style="text-align: center;">
        <h2>Kiểm tra tình trạng bảo hành của sản phẩm</h2>
    </div>

    <div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="row mb-3 col-6 mx-auto">
                <div class="col">
                    <input type="text" name="seri" class="form-control" placeholder="Nhập số seri sản phẩm">
                </div>
            </div>
            <input type="submit" name="timkiem" class="btn btn-primary d-grid gap-2 col btn-lg mx-auto"
                value="tra cứu"></input>
        </form>
        <?php 
            if (isset($_POST["timkiem"]) && $_POST["timkiem"]) {
                $seri = $_POST["seri"];
                $kqtim = timkiem($seri);

                if (empty($kqtim)) {
                    echo "Không thể tìm thấy số seri. Vui lòng nhập lại số seri!";
                }
            }
        ?>

        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Seri</th>
                    <th>Tên danh mục</th>
                    <th>Tên sản phẩm</th>
                    <th>Mô tả</th>
                    <th>Ngày bảo hành</th>
                    <th>BH/Sửa chữa</th>
                    <th>Tình trạng</th>
                    <th>Phương án sữa chữa</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>

                <?php 
                    if(isset($kqtim)&&(count($kqtim)>0)){
                        
                        foreach ($kqtim as $bh){
                            $tendm = laytendm($bh['iddmbh']);
                            $tensp = laytensp($bh['idsp']);
                            echo '<tr>
                                    <td>'.$bh['seri'].'</td>
                                    <td>'.$tendm[0]['cat_ten'].'</td>
                                    <td>'.$tensp[0]['sp_ten'].'</td>
                                    <td>'.$bh['mota'].'</td>
                                    <td>'.$bh['ngaybh'].'</td>
                                    <td>'.$bh['bh_sua'].'</td>
                                    <td>'.$bh['tt'].'</td>
                                    <td>'.$bh['pa'].'</td>
                                    <td>'.$format_number_1 = number_format($bh['gia']).'đ</td>                    
                                </tr>';
                            }
                    }else{
                        if(isset($txt_erro)&&($txt_erro!="")){
                            echo "<font color='red'>".$txt_erro. "</font>";
                        }
                    }
                ?>

                

            </tbody>
        </table>

        <div class="hotro">
            <h2>Liên hệ hỗ trợ</h2>
            <p>Vui lòng liên hệ với chúng tôi nếu thông tin trên không thể giải quyết vấn đề của bạn</p>
            <a href="/view/hotro.php"><input type="button" class="btn btn-primary  btn-lg" value="Liên hệ hỗ trợ"></a>
        </div>

    </div>
</div>
<?php
        include("footer.php");
?>