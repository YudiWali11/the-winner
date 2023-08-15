@include('layout.header')

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a class="logo d-flex align-items-center">
            <h1>Indonesian The Winner<span>.</span></h1>
        </a>
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="#hero" class="active">Beranda</a></li>
                <li><a href="#about">Tentang Kami</a></li>
                <li><a href="#alt-services">Jadwal</a></li>
                <li><a href="#contact">Lokasi</a></li>
                <li><a href="/pendaftaran">Daftar Sekarang</a></li>
            </ul>
        </nav>
        <!-- .navbar -->
    </div>
</header>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">
    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down"><img src="img/logo the winner.png"
                            alt="logo Indonesian The Winner" style="width: 60%" /></h2>
                    <p data-aos="fade-up">
                        <i class="bi bi-quote quote-icon-left"></i>
                        Jadilah Pemenang Dalam Setiap Rintangan
                        <i class="bi bi-quote quote-icon-right"></i><br />
                        Persiapkan diri anda dalam menghadapi seleksi TNI/POLRI dan sekolah kedianasan Bergabunglah
                        bersama kami dan jadilah seorang pemenang
                    </p>
                    <a data-aos="fade-up" data-aos-delay="200" href="/pendaftaran" class="btn-get-started">Daftar
                        Sekarang!</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item active" style="background-image: url(img/hero-carousel/hero1.jpg)">
        </div>
        <div class="carousel-item" style="background-image: url(img/hero-carousel/hero2.jpg)"></div>
        <div class="carousel-item" style="background-image: url(img/hero-carousel/hero3.jpg)"></div>
        <div class="carousel-item" style="background-image: url(img/hero-carousel/hero4.jpg)"></div>
        <div class="carousel-item" style="background-image: url(img/hero-carousel/hero5.jpg)"></div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</section>
<!-- End Hero Section -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row position-relative">
                <div class="col-lg-7 about-img" style="background-image: url(img/about.jpg)"></div>

                <div class="col-lg-7">
                    <div class="our-story">
                        <h3>Indonesian The Winner</h3>
                        <p>Merupakan bimbingan pelatihan jasmani spesialis persiapan seleksi TNI - POLRI dan kedinasan
                            yang akan membantu siswa untuk lulus dalam Tes AKPOL - AKMIL, BINTARA - TAMTAMA TNI-POLRI,
                            SEKOLAH KEDINASAN, IPDN</p>
                        <h4>Program Latihan</h4>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Lari Ketahanan</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Interval Training</span></li>
                            <li>
                                <i class="bi bi-check-circle"></i> <span>Pull Up untuk Pria dan Wanita<br />Chinning
                                    untuk Wanita</span>
                            </li>
                            <li><i class="bi bi-check-circle"></i> <span>Sit Up</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Push Up</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Shuttle Run</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Renang</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Lunges</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Sirkuit</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Harvard Step</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 img-bg" style="background-image: url(img/jadwal.jpg)"
                    data-aos="zoom-in" data-aos-delay="100"></div>

                <div class="col-lg-5 d-flex flex-column justify-content-center">
                    <h3>Jadwal Latihan The Winner</h3>
                    <p>Berikut adalah hari, tempat, dan jam latihan <i>The Winner</i> :</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4>Senin</h4>
                            <h6>Tempat latihan Stadion Siliwangi</h6>
                            <h6>Jam 15.45 WIB s/d Selesai</h6>
                        </div>
                    </div>
                    <!-- End Icon Box -->
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4>Selasa</h4>
                            <h6>Tempat latihan GOR Saparua</h6>
                            <h6>Jam 15.45 WIB s/d Selesai</h6>
                        </div>
                    </div>
                    <!-- End Icon Box -->
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4>Rabu</h4>
                            <h6>Tempat latihan Stadion Siliwangi</h6>
                            <h6>Jam 15.45 WIB s/d Selesai</h6>
                        </div>
                    </div>
                    <!-- End Icon Box -->
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4>Kamis</h4>
                            <h6>Tempat latihan GOR Saparua</h6>
                            <h6>Jam 15.45 WIB s/d Selesai</h6>
                        </div>
                    </div>
                    <!-- End Icon Box -->
                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4>Sabtu</h4>
                            <h6>Tempat latihan Stadion Siliwangi</h6>
                            <h6>Jam 05.30 WIB s/d Selesai</h6>
                        </div>
                    </div>
                    <!-- End Icon Box -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Alt Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 mt-1">
                <div class="col-lg-6">
                    <h5>Lokasi The Winner Pusat "Stadion Siliwangi"</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.834680344416!2d107.61637027478339!3d-6.910361893089108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e63a678eb8eb%3A0xac64120b1085cd2e!2sStadion%20Siliwangi!5e0!3m2!1sid!2sid!4v1691671852572!5m2!1sid!2sid"
                        style="border: 0; width: 100%; height: 384px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- End Google Maps -->

                <div class="col-lg-6">
                    <h5>Lokasi The Winner Palangkaraya</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.846798170311!2d113.92033177734262!3d-2.211451992016496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcb25946f00039%3A0xd08ae3fce998bf2f!2sJl.%20Dr.%20Wahidin%20S.%2C%20Langkai%2C%20Kec.%20Pahandut%2C%20Kota%20Palangka%20Raya%2C%20Kalimantan%20Tengah%2074874!5e0!3m2!1sid!2sid!4v1691672197958!5m2!1sid!2sid"
                        style="border: 0; width: 100%; height: 384px" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- End Google Maps -->

                <div class="col-lg-3">
                    <a href="https://wa.me/6281310100373">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Kontak The Winner Pusat</h3>
                            <p style="color: #000000"><b>+62 813 1010 0373</b></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="https://instagram.com/indonesian_the.winner?igshid=MzRlODBiNWFlZA==">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-instagram"></i>
                            <h3 class="text-center">Instagram <br> The Winner Pusat</h3>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="https://wa.me/6282358222353">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-telephone"></i>
                            <h3>Kontak The Winner Palangkaraya</h3>
                            <p style="color: #000000"><b>+62 823 5822 2353</b></p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="https://instagram.com/the_winner_palangkaraya?igshid=MzRlODBiNWFlZA==">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center">
                            <i class="bi bi-instagram"></i>
                            <h3 class="text-center">Instagram <br> The Winner Palangkaraya</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-content position-relative">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>Indonesian The Winner</h3>
                        <p>
                            Stadion Siliwangi
                            Jl. Lombok No.10, Merdeka, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40113 <br>
                            <strong>Phone:</strong> +62 811 2199 129<br />
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="https://instagram.com/indonesian_the.winner?igshid=MzRlODBiNWFlZA==" class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- End footer info column-->

                <div class="col-lg-2 col-md-3 footer-links">
                    <ul>
                        <li><a href="#hero">Home</a></li>
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#alt-services">Jadwal</a></li>
                        <li><a href="#contact">Lokasi</a></li>
                        <li><a href="/pendaftaran">Daftar Sekarang</a></li>
                    </ul>
                </div>
                <!-- End footer links column-->
            </div>
        </div>
    </div>

    {{-- <div class="footer-legal text-center position-relative">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>UpConstruction</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div> --}}
</footer>
<!-- End Footer -->

@include('layout.footer')
