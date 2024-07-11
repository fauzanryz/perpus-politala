<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>

<!-- artikel Section -->
<section id="artikel" class="artikel section">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="zoom-out">
    <nav class="navbar">
     <div class="search-container col-lg-12 m-0 p-0">

      <nav aria-label="breadcrumb" class="breadcrumb-container">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Beranda</a></li>
        <li class="breadcrumb-item"><a href="">Pustaka</a></li>
        <li class="breadcrumb-item"><a href="">Artikel</a></li>
        <li class="breadcrumb-item active" aria-current="page">Pencarian</li>
       </ol>
      </nav>

      <form class="row g-3" method="get" action="<?= base_url('artikel/search') ?>">
       <div class="col-md-11">
        <input type="text" value="<?= $_GET['key']; ?>" class="form-control" placeholder="Masukkan kata kunci" aria-label="Kata Kunci" name="key">
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
</section><!-- /artikel Section -->

<?php if (empty($search)) : ?>
 <div class="container mt-5 d-flex align-items-center justify-content-center">
  <p>Data tidak ditemukan.</p>
 </div>
<?php else : ?>
 <?php foreach ($search as $srch) : ?>
  <div class="container mt-5 d-flex align-items-start justify-content-center">
   <img class="img-thumbnail" style="height: 170px;" src="<?= base_url(); ?>uploaded_files/sampul_artikel/original/Monograf/<?= $srch['CoverURL'] ?>" class="d-block w-100" alt="...">
   <table class="table table-striped">
    <tr>
     <td colspan="2"><a href="<?= base_url("artikel/detail/" . $srch['ID']); ?>" style="color:#2b45a2;"><?= $srch['Title'] ?></a></td>
    </tr>
    <tr>
     <td style="width:150px;">Pengarang</td>
     <td><?= $srch['Author'] ?></td>
    </tr>
    <tr>
     <td>Penerbitan</td>
     <td><?= $srch['Publikasi'] ?></td>
    </tr>
    <tr>
     <td>Nomor Panggil</td>
     <td><?= $srch['CallNumber'] ?></td>
    </tr>
   </table>
  </div>
 <?php endforeach; ?>
<?php endif; ?>

<?= $this->endSection() ?>