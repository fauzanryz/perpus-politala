<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>

<!-- statistik Section -->
<section id="statistik" class="statistik section">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="zoom-out">
    <nav class="navbar">
     <div class="search-container col-lg-12 m-0 p-0">

      <nav aria-label="breadcrumb" class="breadcrumb-container">
       <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="">Beranda</a></li>
        <li class="breadcrumb-item"><a href="">Pustaka</a></li>
        <li class="breadcrumb-item active" aria-current="page">Statistik</li>
       </ol>
      </nav>
     </div>
    </nav>
   </div>
  </div>
 </div>
</section><!-- /statistik Section -->

<div class="container mt-2">
 <h2 class="mb-3">Statistik</h2>
 <canvas id="pengunjungChart" width="800" height="400"></canvas>
</div>

<script>
 // Data pengunjung bulanan
 const dataPengunjung = {
  labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
  datasets: [{
   label: 'Jumlah Pengunjung',
   type: 'line',
   backgroundColor: 'rgba(54, 162, 235, 0.2)',
   borderColor: 'rgba(54, 162, 235, 1)',
   borderWidth: 1,
   data: [1200, 1400, 1600, 1800, 2000, 2200, 2400, 2600, 2800, 3000, 3200, 3400],
   yAxisID: 'y',
  }, {
   label: 'Laki-laki',
   type: 'bar',
   backgroundColor: 'rgba(255, 99, 132, 0.2)',
   borderColor: 'rgba(255, 99, 132, 1)',
   borderWidth: 1,
   data: [600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700],
   yAxisID: 'y2',
  }, {
   label: 'Perempuan',
   type: 'bar',
   backgroundColor: 'rgba(255, 205, 86, 0.2)',
   borderColor: 'rgba(255, 205, 86, 1)',
   borderWidth: 1,
   data: [600, 700, 800, 900, 1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700],
   yAxisID: 'y2',
  }]
 };

 // Konfigurasi chart
 const config = {
  type: 'bar',
  data: dataPengunjung,
  options: {
   scales: {
    y: {
     type: 'linear',
     display: true,
     position: 'left',
     beginAtZero: true,
     title: {
      display: true,
      text: 'Jumlah Pengunjung'
     },
    },
    y2: {
     type: 'linear',
     display: true,
     position: 'right',
     beginAtZero: true,
     title: {
      display: true,
      text: 'Laki-laki & Perempuan'
     },
     grid: {
      drawOnChartArea: false, // only want the grid lines for one axis to show up
     },
    },
   }
  },
 };

 // Membuat chart baru
 var myChart = new Chart(
  document.getElementById('pengunjungChart'),
  config
 );
</script>

<?= $this->endSection() ?>