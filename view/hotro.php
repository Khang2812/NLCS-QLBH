<?php
    include"header.php";
?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Trang chủ</a></li>
        <li class="breadcrumb-item active" aria-current="page">Liên hệ hỗ trợ</li>
    </ol>
</nav>
<hr>

<div style="text-align: center;padding:20px">
    <h2>Liên hệ Bộ phận Hỗ trợ</h2>
    <p>Bạn muốn chọn hình thức liên hệ nào</p>
</div>
<div class="row justify-content-center">
    <div class="col col-lg-auto">
        <div class="col " style="width:400px">
            <div class="text-center" style="border:1px solid">
                <a href="/view/hotline.php" style="text-decoration: none;color:#212529;">
                    <img src="/style/img/background/Thêm tiêu đề.png" class="card-img-top" alt="logo"
                        style="width:100%;height:200px;padding: 10px">
                    <div class="card-body">
                        <h3 class="card-title">Gọi điện</h3>
                    </div>
                    <button type="submit" class="btn btn-primary d-grid gap-2 col btn-lg mx-auto"
                        style="margin: 10px">Bắt đầu</button>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-auto">

    </div>
    <div class="col col-lg-auto">
        <div class="col" style="width:400px">
            <div class="text-center" style="border:1px solid">
                <a href="/view/mail.php" style="text-decoration: none;color:#212529;">
                    <img src="/style/img/background/mail.jpg" class="card-img-top" alt="logo"
                        style="width:100%;height:200px;padding: 10px">
                    <div class="card-body">
                        <h3 class="card-title">Gửi Email</h3>
                    </div>
                    <button type="submit" class="btn btn-primary d-grid gap-2 col btn-lg mx-auto"
                        style="margin: 10px">Bắt đầu</button>

                </a>
            </div>
        </div>
    </div>
</div>
</div>

<?php
    include"footer.php";
?>