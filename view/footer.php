<!-- Footer -->
<?php
    
    if(!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap']=0;
    else $_SESSION['luottruycap']+=1;

?>
<footer>

    <!-- Section: Links  -->
    <section>
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3 ">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">Về chúng tôi</h6>
                    <p>
                        <strong>FPI service</strong> chuyên sửa chữa, bảo hành, vệ sinh linh liện máy tính, laptop của
                        các hãng:
                        Asus, Acer, Lenovo, MSI, Gigabyte, Dell, Hp, Microsoft.
                    </p>
                    <p>Số lượt truy cập: 
                        <?php 
                            if(isset($_SESSION['luottruycap'])) echo $_SESSION['luottruycap'];
                        ?>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Dịch vụ </h6>
                    <p>
                        <a href="#!" class="text-reset">Báo giá sửa chữa</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Tra cứu bảo hành</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Điều khoản bảo hành</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Gửi thắc mắc</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Liên hệ</h6>
                    <p><i class="fas fa-home me-3"></i> Ninh Kiều, Cần Thơ</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        fptservice@gmail.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i>+84 9711111111</p>
                    <hr>
                    <div>
                        <div class="media-icons">
                            <a href="https://www.facebook.com/" class="me-3 text-reset"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" class="me-3 text-reset"> <i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/" class="me-3 text-reset"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.youtube.com/" class="me-3 text-reset"><i
                                    class="fab fa-youtube"></i></a>
                            <a href="https://www.linkedin.com/" class="me-3 text-reset"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">Copyright © 2023 <strong>FPI
            Service</strong> All rights reserved.</div>
    <!-- Copyright -->
</footer>
</body>

</html>