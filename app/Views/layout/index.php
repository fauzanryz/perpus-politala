<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Perpustakaan Politala</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/landing-page/assets/img/logo-politala.png" rel="icon">
    <link href="<?= base_url(); ?>/landing-page/assets/img/logo-politala.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url(); ?>/landing-page/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/landing-page/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/landing-page/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/landing-page/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/landing-page/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url(); ?>/landing-page/assets/css/main.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-geo d-flex align-items-center"><span>Pelaihari, Tanah Laut</span></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>(0512) 2021065</span></i>
                </div>
                <div class="social-links d-none d-md-flex align-items-center">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="<?= base_url(); ?>" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img style="height: 150px; width: auto;" src="<?= base_url(); ?>/landing-page/assets/img/logo-politala.png" alt="logo">
                    <div>
                        <h1 class="sitename">Perpustakaan</h1>
                        <h7 class="sitename">Politeknik Negeri Tanah Laut</h7>
                    </div>
                    <span></span>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="<?= base_url('#hero'); ?>" class="active">Beranda</a></li>
                        <li><a href="<?= base_url('#about'); ?>">Tentang</a></li>
                        <li class="dropdown"><a href="<?= base_url('#services'); ?>"><span>Pustaka</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="<?= base_url('katalog'); ?>">Katalog</a></li>
                                <li><a href="<?= base_url('koleksi'); ?>">Koleksi Digital</a></li>
                                <li><a href="<?= base_url('artikel'); ?>">Artikel</a></li>
                                <li><a href="<?= base_url('statistik'); ?>">Statistik</a></li>
                                <li><a href="<?= base_url('e-book'); ?>">e-Book</a></li>
                                <li><a href="<?= base_url('jurnal'); ?>">Jurnal Digital</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url('#contact'); ?>">Kontak</a></li>
                        <li><a href="<?= base_url('login'); ?>">Masuk</a></li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>
    <main class="main pb-3">

        <?= $this->renderSection('content') ?>

    </main>
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="d-flex align-items-center">
                        <span class="sitename">Perpustakaan Politala</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Jl. A. Yani KM.06 Desa Panggung, Kec. Pelaihari, Tanah Laut, Kalimantan Selatan, 70815</p>
                        <p class="mt-3"><strong>Telepon:</strong> <span>(0512) 2021065</span></p>
                        <p><strong>Email:</strong> <span>perpustakaan@politala.ac.id</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Menu</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Beranda</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Tentang</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Pustaka</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Kontak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Pustaka</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Katalog</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Koleksi</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Artikel</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Statistik</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Sosial Media</h4>
                    <p>Jelajahi berbagai platform media sosial kami untuk mendapatkan informasi terbaru dan terhubung dengan komunitas kami</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Perpustakaan Politala</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>


    <script>
        var multipleItemCarousel = document.querySelector(
            "#carouselExampleControls"
        );
        if (window.matchMedia("(min-width: 375px)").matches) {
            var carouselWidth = $(".carousel-inner")[0].scrollWidth;
            var cardWidth = $(".carousel-item").width();

            var scrollPosition = 0;

            $(".carousel-control-next").on("click", function() {
                if (scrollPosition < (carouselWidth - (cardWidth * 4))) { //check if you can go any further
                    console.log('next');
                    scrollPosition = scrollPosition + cardWidth; //update scroll position
                    $(".carousel-inner").animate({
                        scrollLeft: scrollPosition
                    }, 600); //scroll left
                }
            });
            $(".carousel-control-prev").on("click", function() {
                if (scrollPosition > 0) {
                    console.log('prev');
                    scrollPosition = scrollPosition - cardWidth;
                    $(".carousel-inner").animate({
                            scrollLeft: scrollPosition
                        },
                        600
                    );
                }
            });
        } else {
            $(multipleItemCarousel).addClass("slide");
        }
    </script>

    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>/landing-page/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= base_url(); ?>/landing-page/assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</body>

</html>