<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>

<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                <h1>Selamat datang di <span>Perpustakaan Politala</span></h1>
                <p>Jelajahi kekayaan pengetahuan dengan koleksi lengkap buku, jurnal, dan sumber daya digital terkini yang siap mendukung kebutuhan informasi dan riset Anda!</p>
                <div class="d-flex">
                    <a href="#about" class="btn-get-started">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p><span class="description-title">Tentang Kami</span></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-3">

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <img src="<?= base_url(); ?>/landing-page/assets/img/about.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <div class="about-content ps-0 ps-lg-3">
                    <p class="fst-italic">
                        Perpustakaan Politeknik Negeri Tanah Laut merupakan pusat informasi dan sumber belajar yang didedikasikan untuk mendukung kegiatan akademik dan penelitian seluruh civitas akademika. Dengan koleksi buku, jurnal, e-book, dan sumber daya digital yang terus berkembang, perpustakaan kami berkomitmen untuk menyediakan akses informasi yang mudah dan cepat. Fasilitas modern dan layanan yang ramah menjadikan perpustakaan ini sebagai tempat yang ideal untuk belajar, berdiskusi, dan mengembangkan pengetahuan. Kami juga menyediakan berbagai program literasi informasi dan pelatihan untuk mendukung keterampilan riset mahasiswa dan dosen.
                    </p>
                    <p class="fst-italic">
                        Perpustakaan kami menyelenggarakan berbagai program dan kegiatan, seperti workshop literasi informasi, seminar penulisan akademik, dan pelatihan penggunaan basis data digital, guna meningkatkan keterampilan riset dan literasi informasi di kalangan mahasiswa dan dosen. Selain itu, kami menyediakan ruang diskusi, ruang baca yang nyaman, serta layanan peminjaman dan pengembalian buku yang efisien, untuk memastikan pengalaman pengguna yang optimal. Kami selalu terbuka terhadap masukan dan saran demi peningkatan layanan dan koleksi perpustakaan. Komitmen kami adalah mendukung kesuksesan akademik dan pengembangan intelektual seluruh pengguna perpustakaan, serta menjadi mitra andal dalam setiap langkah perjalanan belajar.
                    </p>
                </div>

            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

            <div class="col-lg-6">
                <h3>Visi</h3>
                <p>
                    Menjadi pusat informasi terdepan yang mendukung inovasi dan pembelajaran berkelanjutan di Politeknik Negeri Tanah Laut, serta berkontribusi dalam mencerdaskan bangsa melalui penyediaan akses ke berbagai sumber pengetahuan berkualitas.
                </p>
            </div>

            <div class="col-lg-6">
                <h3>Misi</h3>
                <ol style="padding-left: 20px;">
                    <li style="margin-left: -3px;">
                        Menyediakan koleksi bahan pustaka yang lengkap dan relevan serta memfasilitasi akses ke sumber daya digital untuk mendukung program studi di Politeknik Negeri Tanah Laut.
                    </li>
                    <li style="margin-left: -3px;">
                        Meningkatkan kualitas layanan perpustakaan melalui pelatihan staf, penerapan teknologi informasi terbaru, dan penyediaan fasilitas yang nyaman bagi pengguna.
                    </li>
                    <li style="margin-left: -3px;">
                        Mendorong budaya membaca dan penelitian di kalangan mahasiswa, dosen, dan staf melalui berbagai kegiatan literasi informasi serta kolaborasi dengan perpustakaan lain dan komunitas.
                    </li>
                </ol>
            </div>

        </div>

    </div>

</section><!-- /Skills Section -->

<!-- Services Section -->
<section id="services" class="featured-services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p><span class="description-title">Pustaka</span></p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-journal"></i></div>
                    <h4><a href="<?= base_url(); ?>katalog" class="stretched-link">Katalog</a></h4>
                    <p>Tinjau berbagai katalog pustaka kami untuk penjelajahan yang lebih mendalam.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-collection"></i></div>
                    <h4><a href="<?= base_url(); ?>koleksi" class="stretched-link">Koleksi</a></h4>
                    <p>Lihatlah koleksi pustaka kami yang kaya dan beragam untuk memenuhi kebutuhan baca.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-newspaper"></i></div>
                    <h4><a href="<?= base_url(); ?>artikel" class="stretched-link">Artikel</a></h4>
                    <p>Baca artikel-artikel terbaru dan terkini untuk mendapatkan wawasan baru.</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-bar-chart-line"></i></div>
                    <h4><a href="<?= base_url(); ?>statistik" class="stretched-link">Statistik</a></h4>
                    <p>Analisis statistik mengenai penggunaan perpustakaan dan sumber daya yang tersedia.</p>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section><!-- /Services Section -->

<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

    <img src="<?= base_url(); ?>/landing-page/assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    }
                }
            </script>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?= base_url(); ?>/landing-page/assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                        <h3>Dewi Kusumawardhani</h3>
                        <h4>Mahasiswa</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Perpustakaan ini sangat membantu dalam menemukan referensi dan sumber belajar yang berkualitas untuk tugas-tugas kuliah saya.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?= base_url(); ?>/landing-page/assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                        <h3>Budi Setiawan</h3>
                        <h4>Dosen</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Perpustakaan ini menyediakan koleksi yang relevan dan mendukung proses pembelajaran di kampus kami. Sangat membantu dalam menyusun materi perkuliahan.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?= base_url(); ?>/landing-page/assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                        <h3>Fitriani</h3>
                        <h4>Mahasiswa</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Perpustakaan ini memberikan suasana belajar yang nyaman dan koleksi buku yang lengkap untuk menunjang studi saya.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?= base_url(); ?>/landing-page/assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                        <h3>Ahmad Fadillah</h3>
                        <h4>Dosen</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Perpustakaan ini menjadi tempat yang sangat membantu bagi saya untuk melakukan riset dan pengembangan pengetahuan di bidang keilmuan saya.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="<?= base_url(); ?>/landing-page/assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                        <h3>Siti Rahmah</h3>
                        <h4>Mahasiswa</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>Perpustakaan ini memberikan akses mudah dan cepat untuk menemukan referensi-referensi penting dalam penulisan tugas akademik saya.</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

            </div>

            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Testimonials Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <p><span class="description-title">Kontak</span></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-12">

                <div class="info-wrap ">
                    <div class="d-flex justify-content-center align-items-center gap-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Alamat</h3>
                                <p>Jl. A. Yani KM.06 Desa Panggung, Kec. Pelaihari, Tanah Laut, Kalimantan Selatan, 70815</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Telepon</h3>
                                <p>(0512) 2021065</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email</h3>
                                <p>perpustakaan@politala.ac.id</p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.04670358085!2d114.7668667!3d-3.7531028!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de6f3cbc3517eb1%3A0xd6e24bd1137d8d13!2sPoliteknik%20Negeri%20Tanah%20Laut!5e0!3m2!1sid!2sid!4v1718036764254!5m2!1sid!2sid" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- <div class="col-lg-7">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Nama</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="">
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subjek</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Pesan</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Memuat</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Pesan Anda telah terkirim. Terimakasih!</div>

                                    <button type="submit">Kirim</button>
                                </div>

                            </div>
                        </form>
                    </div>End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->

<?= $this->endSection() ?>