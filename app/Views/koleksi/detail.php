<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>

<!-- koleksi Section -->
<section id="koleksi" class="koleksi section">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="zoom-out">
    <nav class="navbar">
     <div class="search-container col-lg-12 m-0 p-0">
      <nav aria-label="breadcrumb" class="breadcrumb-container">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Beranda</a></li>
        <li class="breadcrumb-item"><a href="">Pustaka</a></li>
        <li class="breadcrumb-item"><a href="">Koleksi</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail</li>
       </ol>
      </nav>
     </div>
    </nav>
   </div>
  </div>
 </div>
</section><!-- /koleksi Section -->

<div class="container mt-2 d-flex align-items-start justify-content-center">
    <?php if (!empty($collections_detail)): ?>
        <img class="img-thumbnail" style="height: 370px;" src="<?= base_url(); ?>uploaded_files/sampul_koleksi/original/Monograf/<?= $collections_detail[0]['CoverURL'] ?>" class="d-block w-100" alt="...">
        <table class="table table-striped">
            <tr>
                <td style="width:150px;">Judul</td>
                <td><?= $collections_detail[0]['JUDUL'] ?></td>
            </tr>
            <tr>
                <td>Pengarang</td>
                <td><?= $collections_detail[0]['PENGARANG'] ?></td>
            </tr>
            <tr>
                <td>Edisi</td>
                <td><?= $collections_detail[0]['EDISI'] ?></td>
            </tr>
            <tr>
                <td>Penerbitan</td>
                <td><?= $collections_detail[0]['PENERBITAN'] ?></td>
            </tr>
            <tr>
                <td>Deskripsi Fisik</td>
                <td><?= $collections_detail[0]['DESKRIPSI_FISIK'] ?></td>
            </tr>
            <tr>
                <td>ISBN</td>
                <td><?= $collections_detail[0]['ISBN'] ?></td>
            </tr>
            <tr>
                <td>Bahasa</td>
                <td><?= $collections_detail[0]['BAHASA'] ?></td>
            </tr>
            <tr>
                <td>Bentuk Karya</td>
                <td><?= $collections_detail[0]['BENTUK_KARYA'] ?></td>
            </tr>
            <tr>
                <td>Target Pembaca</td>
                <td><?= $collections_detail[0]['TARGET_PEMBACA'] ?></td>
            </tr>
        </table>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Data detail koleksi tidak ditemukan.
        </div>
    <?php endif; ?>

    <?php if (!empty($collections_detail)): ?>
        <table class="table table-striped">
            <tr>
                <td>No. Barcode</td>
                <td><?= $collections_detail[0]['NomorBarcode'] ?></td>
            </tr>
            <tr>
                <td>No. Panggil</td>
                <td><?= $collections_detail[0]['CallNumber'] ?></td>
            </tr>
            <tr>
                <td>Akses</td>
                <td><?= $collections_detail[0]['akses'] ?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td><?= $collections_detail[0]['lokasi'] ?></td>
            </tr>
            <tr>
                <td>Ketersediaan</td>
                <td><?= $collections_detail[0]['ketersediaan'] ?></td>
            </tr>
        </table>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">
            Data detail tampilan koleksi tidak ditemukan.
        </div>
    <?php endif; ?>
</div>


<?= $this->endSection() ?>