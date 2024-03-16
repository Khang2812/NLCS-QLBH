<?php
    include("header.php");
    include("../model/connectdb.php");
    include("../model/hotro.php");
    if(isset($_POST["themmoi"]) && $_POST["themmoi"]){
        $tenkh = $_POST["ht_tenkh"];
        $email = $_POST["ht_email"];
        $sdt = $_POST["ht_sdt"];
        $diachi = $_POST["ht_diachi"];
        $seri = $_POST["ht_seri"];
        $tensp = $_POST["ht_ten"];
        $mota = $_POST["ht_mota"];
        
        themht($tenkh,$email,$sdt,$diachi,$tensp,$seri,$mota);
        header("location: hotro.php");
    }
?>

<div>
    <div style="text-align: center;padding-top:20px">
        <h2>Liên hệ bằng số điện thoại</h2>
        <p>Vui lòng cung cấp thông tin theo yêu cầu</p>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" novalidate style="padding-left:100px;padding-right:100px">
            <input type="text" class="form-control" name="ht_tenkh" placeholder="ten">
            <input type="email" class="form-control" name="ht_email" id="#" placeholder="mail">
            <input type="text" class="form-control" name="ht_sdt" id="#" placeholder="sdt">
            <input type="text" class="form-control" name="ht_diachi" id="#" placeholder="dia chi">
            <input type="text" class="form-control" name="ht_seri" id="#" placeholder="seri">
            <input type="text" class="form-control" name="ht_ten" id="#" placeholder="ten sp">
            <textarea maxlength="" name="ht_mota" placeholder=" Mô tả vấn đề" aria-label="Mô tả" type="text"
                class="textarea-field bigger" style="width:100%;height:150px"></textarea>
            <input  type="submit" class="btn btn-primary btn-lg" name="themmoi" onclick="alert('đã gửi thông tin')">
    </form>

</div>
<?php 
    include('footer.php');
?>


<!-- <div class="col-12 position-relative">
            <label for="#" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" id="#" name="ht_tenkh" placeholder="">
        </div>

        <div class="col-md-6">
            <label for="#" class="form-label">Email</label>
            <input type="email" class="form-control" name="ht_email" id="#">
        </div>

        <div class="col-md-6">
            <label for="#" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" name="ht_sdt" id="#" placeholder="">
        </div>

        <div class="col-md-12">
            <label for="#" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" name="ht_diachi" id="#" placeholder="">
        </div>

        <div class="col-12">
            <label for="#" class="form-label">Số seri</label>
            <input type="text" class="form-control" name="ht_seri" id="#" placeholder="">
        </div>

        <div class="col-12">
            <label for="#" class="form-label">Tên Sản phẩm</label>
            <input type="text" class="form-control" name="ht_ten" id="#" placeholder="">
        </div>

        <div class="col-12">
            <textarea maxlength="" name="ht_mota" placeholder=" Mô tả vấn đề" aria-label="Mô tả" type="text"
                class="textarea-field bigger" style="width:100%;height:150px"></textarea>
        </div> -->