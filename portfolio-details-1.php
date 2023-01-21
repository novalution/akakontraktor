<!DOCTYPE html>
<html lang="en">
<?php include "navbar.php" ?>

<body>

    <!-- ======= Header ======= -->


    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <button type="button" class="btn btn-pilih mb-3" onClick="showHasil();">Hasil</button>
            <button type="button" class="btn btn-pilih mb-3" onClick="showDesain();">Desain</button>
            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="portfolio-details-slider swiper" id="hasil">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide hasil">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/63b449a5-cc85-494e-9eba-f5c634a078d1.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/00b1d1dc-2ba7-4116-ada0-c01439880010.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/7dae3322-3ae4-4962-9caa-5ee76a4290ac.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/7e4d43a8-2981-4c86-808c-9fa277b9b60b.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/88a1d510-e0a1-4685-8e66-d0ed287f4cfd.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/ad84d69f-f596-4ad1-bd87-74241e0c5b58.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/eaecae1c-3c1a-4c4a-84f9-c5f48c1fd6dc.jpg" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/HASIL/efaf2132-065d-4b14-aa5b-47d15acc7682.jpg" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="portfolio-details-slider swiper" style="display: none;" id="desain">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/DESAIN/01.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/DESAIN/02.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/DESAIN/03.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(RUMAH 01) RUMAH TINGGAL BU RINA/DESAIN/04.png" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Rumah Tinggal 1 Lantai</h3>
                        <ul>
                            <li><strong>Nama Project</strong>: RN House</li>
                            <li><strong>Client</strong>: Ibu Rina</li>
                            <li><strong>Luas Bangunan</strong>: 60 m2</li>
                            <li><strong>Luas Tanah</strong>: 720 m2</li>
                            <li><strong>Lokasi</strong>: Sidorejo, Salatiga</li>
                            <li><strong>Status</strong>: Complete</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Portfolio detail</h2>
                        <p>
                            Desain Rumah 1 Lantai dengan Luas
                            Bangunan 60m ² dan Luas Tanah 72m ².
                            Hunian didesain menggunakan gaya
                            minimalis scandinavian. Hunian semakin
                            terasa nyaman dengan material pilihan
                            dari desainer serta memenuhi kebutuhan
                            klien.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include "footer.php" ?>

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