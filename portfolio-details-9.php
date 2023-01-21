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
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/HASIL/2020-07-11 (1).jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/HASIL/2020-07-11 (2).jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/HASIL/2020-07-11.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/HASIL/2020-07-12.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/HASIL/2022-02-09.jpg" alt="">
                            </div>



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="portfolio-details-slider swiper" style="display: none;" id="desain">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/DESAIN/A01.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/DESAIN/A02.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/DESAIN/A03.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/DESAIN/A04.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(BANGUNAN USAHA 03) KOST BU ARIES/DESAIN/D02.png" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Kost 2 Lantai</h3>
                        <ul>
                            <li><strong>Nama Project</strong>: Kost Ibu Aries</li>
                            <li><strong>Client</strong>: Ibu Aries</li>
                            <li><strong>Luas Bangunan</strong>: 200 m2</li>
                            <li><strong>Luas Tanah</strong>: 120 m2</li>
                            <li><strong>Lokasi</strong>: Mojosongo, Surakarta</li>
                            <li><strong>Status</strong>: Complete</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Portfolio detail</h2>
                        <p>
                            Desain Kost 2 Lantai dengan Luas
                            Bangunan 200m ² dan Luas Tanah 120m ².
                            Penataan ruang gudang didesain
                            sedemikian rupa sehingga memenuhi
                            kebutuhan operasional gudang.
                            Sedangkan, pada fasad didesain dengan
                            apik sehingga memiliki gaya sendiri
                            dibandingkan dengan gudang umumnya.
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