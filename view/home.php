<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Trang Chủ</li>
        </ol>
    </nav>
    <hr>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/style/img/background/repair.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/style/img/background/background_login.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/style/img/background/IT.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row">
        <?php
        include("./includes/title.php");
        ?>
    </div>

    <div class="mainmain row justify-content-md-center">
        <div class="maintcontent row">
            <div class="col">
                <div class="card h-100 text-center">
                    <a href="/view/product.php" style="text-decoration: none;color:#212529;">
                        <img src="/style/img/background/linhkien.png" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <h3 class="card-title">Tra cứu linh kiện</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <a href="/view/baohanh.php" style="text-decoration: none;color:#212529;">
                        <img src="/style/img/background/baohanh.png" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <h3 class="card-title">Tra cứu bảo hành</h3>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 text-center">
                    <a href="/view/hotro.php" style="text-decoration: none;color:#212529;">
                        <img src="/style/img/background/contachelp.png" class="card-img-top" alt="logo">
                        <div class="card-body">
                            <h3 class="card-title">Liên hệ hỗ trợ</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <?php
        include("./includes/dieukhoan.php");
        ?>
    </div>
</div>