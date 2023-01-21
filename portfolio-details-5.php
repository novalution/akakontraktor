<!DOCTYPE html>
<html lang="en">

<!-- ======= Header ======= -->
<?php include "navbar.php" ?>

<body>


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper" id="hasil">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 02) KOST 3 LANTAI BP RUDY/DESAIN/M01.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 02) KOST 3 LANTAI BP RUDY/DESAIN/M02.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 02) KOST 3 LANTAI BP RUDY/DESAIN/M03.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 02) KOST 3 LANTAI BP RUDY/DESAIN/S01.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 02) KOST 3 LANTAI BP RUDY/DESAIN/S02.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 02) KOST 3 LANTAI BP RUDY/DESAIN/S03.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 02) KOST 3 LANTAI BP RUDY/DESAIN/S04.png" alt="">
                            </div>



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Kost 3 Lantai</h3>
                        <ul>
                            <li><strong>Nama Project</strong>: BR Kost</li>
                            <li><strong>Client</strong>:Bapak Rudy</li>
                            <li><strong>Luas Bangunan</strong>: 320 m2</li>
                            <li><strong>Luas Tanah</strong>: 350 m2</li>
                            <li><strong>Lokasi</strong>: Mojosongo, Surakarta</li>
                            <li><strong>Status</strong>: Work In Progress</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Portfolio detail</h2>
                        <p>
                            Desain Kost 3 Lantai dengan Luas
                            Bangunan 320 m ² dan Luas Tanah 350 m ².
                            Penataan kamar didesain sedemikian rupa
                            sehingga membuat penghuni kost
                            nyaman, desain kost ini menerapkan gaya
                            arsitektur scandinavian.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        function showDesain() {
            document.getElementById("hasil").style.display = 'none';
            document.getElementById("desain").style.display = "block";
            console.log("iki desain")
        }

        function showHasil() {
            document.getElementById("hasil").style.display = 'block';
            document.getElementById("desain").style.display = "none";
            console.log("iki hasil")
        }
    </script>

</body>

</html>