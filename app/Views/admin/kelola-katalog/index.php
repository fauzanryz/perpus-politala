<?= $this->extend('layout/dashboard') ?>
<?= $this->section('content') ?>

<main id="main" class="main">

 <div class="pagetitle">
  <h1>Kelola Katalog</h1>
  <nav>
   <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
    <li class="breadcrumb-item active">Kelola Katalog</li>
   </ol>
  </nav>
 </div><!-- End Page Title -->

 <section class="section">
  <div class="row">
   <div class="col-lg-12">

    <div class="card">
     <div class="card-body">
      <div class="d-flex align-items-center justify-content-between">
       <h5 class="card-title mb-0">Data Katalog</h5>
       <!-- Large Modal -->
       <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#largeModal">
        Tambah
       </button>

       <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
         <div class="modal-content">
          <div class="modal-header">
           <h5 class="modal-title">Tambah Data Katalog</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
           <div class="card">
            <div class="card-body">
             <!-- Multi Columns Form -->
             <form class="row g-3">
              <div class="col-md-12 mt-5">
               <label for="inputName5" class="form-label">Judul</label>
               <input type="text" class="form-control" id="inputName5">
              </div>
              <div class="col-md-6">
               <label for="inputEmail5" class="form-label">Penulis</label>
               <input type="email" class="form-control" id="inputEmail5">
              </div>
              <div class="col-md-6">
               <label for="inputPassword5" class="form-label">Penerbit</label>
               <input type="password" class="form-control" id="inputPassword5">
              </div>
              <div class="col-12">
               <label for="inputAddress5" class="form-label">Alamat Penerbit</label>
               <input type="text" class="form-control" id="inputAddres5s">
              </div>
              <div class="col-12">
               <label for="inputAddress2" class="form-label">Tanggal Terbit</label>
               <input type="text" class="form-control" id="inputAddress2">
              </div>
              <div class="col-md-6">
               <label for="inputCity" class="form-label">Cover</label>
               <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="col-md-4">
               <label for="inputState" class="form-label">File</label>
               <select id="inputState" class="form-select">
                <option selected>Pilih...</option>
                <option>...</option>
               </select>
              </div>
              <div class="col-md-2">
               <label for="inputZip" class="form-label">Pdf</label>
               <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="col-12">
               <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                 Check me out
                </label>
               </div>
              </div>
             </form><!-- End Multi Columns Form -->

            </div>
           </div>
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
           <button type="button" class="btn btn-primary">Simpan</button>
          </div>
         </div>
        </div>
       </div><!-- End Large Modal-->
      </div>

      <!-- Table with stripped rows -->
      <table class="table datatable">
       <thead class="text-center">
        <tr>
         <th><b>No.</b></th>
         <th>Cover</th>
         <th>Judul</th>
         <th data-type="date" data-format="YYYY/DD/MM">Tahun Terbit</th>
         <th>Aksi</th>
        </tr>
       </thead>
       <tbody>
        <tr>
         <td>1</td>
         <td>A</td>
         <td>Curicó</td>
         <td>2005/02/11</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>2</td>
         <td>B</td>
         <td>El Quisco</td>
         <td>2010/08/15</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>3</td>
         <td>C</td>
         <td>Puerto Montt</td>
         <td>2018/03/22</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>4</td>
         <td>D</td>
         <td>Valdivia</td>
         <td>2021/06/30</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>5</td>
         <td>E</td>
         <td>Ancud</td>
         <td>1999/11/05</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>6</td>
         <td>F</td>
         <td>La Serena</td>
         <td>2012/04/20</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>7</td>
         <td>G</td>
         <td>Chillán</td>
         <td>2008/09/17</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>8</td>
         <td>H</td>
         <td>Concepción</td>
         <td>2015/11/22</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>9</td>
         <td>I</td>
         <td>Antofagasta</td>
         <td>2001/05/13</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
        <tr>
         <td>10</td>
         <td>J</td>
         <td>Talca</td>
         <td>2020/07/29</td>
         <td>
          <button class="btn btn-success btn-sm">Detail</button>
          <button class="btn btn-warning btn-sm text-white">Edit</button>
          <button class="btn btn-danger btn-sm">Delete</button>
         </td>
        </tr>
       </tbody>
      </table>

      <!-- End Table with stripped rows -->

     </div>
    </div>

   </div>
  </div>
 </section>



</main><!-- End #main -->

<?= $this->endSection() ?>