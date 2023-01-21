<!DOCTYPE html>
<html lang="en">

<!-- ======= Header ======= -->
<?php include "navbar.php" ?>

<body>

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <button type="button" class="btn btn-pilih mb-3" onClick="showHasil();">Hasil</button>
            <button type="button" class="btn btn-pilih mb-3" onClick="showDesain();">Desain</button>
            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper" id="hasil">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Hasil/IMG_2989.JPG" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Hasil/IMG_2991.JPG" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="portfolio-details-slider swiper" style="display: none;" id="desain">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Desain/01aADF.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Desain/02ADSF.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Desain/03ADF.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Desain/04ADF.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Desain/04ADF.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Desain/05ADF.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 04) RUMAH TINGGAL PAK MUSTAKIM/Desain/06ADF.png" alt="">
                            </div>



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Rumah Tinggal 1 Lantai</h3>
                        <ul>
                            <li><strong>Nama Project</strong>: BM House</li>
                            <li><strong>Client</strong>: Ibu Annisa</li>
                            <li><strong>Luas Bangunan</strong>: 100 m2</li>
                            <li><strong>Luas Tanah</strong>: 162 m2</li>
                            <li><strong>Lokasi</strong>: Karangpandan, Karanganyar</li>
                            <li><strong>Status</strong>: In Progress</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Portfolio detail</h2>
                        <p>
                            Desain Rumah 1 Lantai dengan Luas
                            Bangunan 100m ² dan Luas Tanah
                            162m ². Rumah didesain menggunakan
                            gaya minimalis moderen dengan gaya
                            arsitektur elegan. Hunian semakin
                            terasa nyaman dengan material
                            pilihan dari desainer serta memenuhi
                            kebutuhan fungsional dari klien.
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