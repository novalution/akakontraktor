<!DOCTYPE html>
<html lang="en">

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
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Hasil/IMG_1283.JPG" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA//Hasil/IMG_1286.JPG" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA//Hasil/IMG_1288.JPG" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA//Hasil/IMG_1289.JPG" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA//Hasil/IMG_1290.JPG" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA//Hasil/IMG_1291.JPG" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA//Hasil/IMG_1292.JPG" alt="">
                            </div>


                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="portfolio-details-slider swiper" style="display: none;" id="desain">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/02B.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/02C.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/06.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/07.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/MEDIA CENTER 1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/MEDIA CENTER.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/MEETING ROOM 0101.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/portfolio/(INTERIOR 01) INTERIOR KANTOR BADAN PERTNAHAN KOTA SURAKARTA/Desain/MEETING ROOM 0202.png" alt="">
                            </div>



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Interior Kantor Badan Pertanahan Kota Surakarta</h3>
                        <ul>
                            <li><strong>Nama Project</strong>: Interior Kantor</li>
                            <li><strong>Client</strong>: Kantor ATR/ Badan Pertanahan Nasional Kota Surakarta</li>
                            <li><strong>Luas Bangunan</strong>: -</li>
                            <li><strong>Luas Tanah</strong>: -</li>
                            <li><strong>Lokasi</strong>: Jebres, Surakarta</li>
                            <li><strong>Status</strong>: Complete</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi
                            labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque
                            itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur
                            dignissimos. Sequi nulla at esse enim cum deserunt eius.
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