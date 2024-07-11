<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>

<!-- Katalog Section -->
<section id="katalog" class="katalog section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="zoom-out">
                <nav class="navbar">
                    <div class="search-container col-lg-12 m-0 p-0">

                        <nav aria-label="breadcrumb" class="breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Beranda</a></li>
                                <li class="breadcrumb-item"><a href="">Pustaka</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Katalog</li>
                            </ol>
                        </nav>

                        <form class="row g-3" method="get" action="<?= base_url('katalog/search') ?>">
                            <div class="col-md-11">
                                <input type="text" class="form-control" placeholder="Masukkan kata kunci" aria-label="Kata Kunci" name="key">
                            </div>
                            <div class="col-md-1 d-grid">
                                <button class="btn btn-success" type="submit" id="button-addon2">Cari</button>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section><!-- /Katalog Section -->

<div class="container mt-5">
    <!-- Koleksi Sering Di Pinjam -->
    <h2>Koleksi Sering Dipinjam</h2>
    <div id="carouselExampleControls" class="carousel">
        <div class="carousel-inner">
            <?php foreach ($collections_top as $collection) : ?>
                <div class="carousel-item active">
                    <div class="card">
                        <img src="<?= base_url(); ?>uploaded_files/sampul_koleksi/original/Monograf/<?= $collection['coverurl'] ?>" class="d-block w-100" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url("katalog/detail/" . $collection['id']); ?>" class="card-title"><?= limit_characters($collection['title'], 70) ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container mt-5">
    <!-- Koleksi Terbaru -->
    <h2 class="mt-5">Koleksi Terbaru</h2>
    <div id="carouselExampleControls" class="carousel">
        <div class="carousel-inner">
            <?php foreach ($collections_new as $collection) : ?>
                <div class="carousel-item active">
                    <div class="card">
                        <img src="<?= base_url(); ?>uploaded_files/sampul_koleksi/original/Monograf/<?= $collection['coverurl'] ?>" class="d-block w-100" alt="...">
                        <div class="card-body">
                            <a href="<?= base_url("katalog/detail/" . $collection['id']); ?>" class="card-title"><?= limit_characters($collection['title'], 70) ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?= $this->endSection() ?>