<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
    <script type="text/javascript" src="chartjs/Chart.js"></script>


    <title>Sistem Informasi Akreditasi Penjaminan Mutu</title>
  </head>
  <body>
    <!-- Buat Navbar Atas-->
    <!-- Gambar Logo dan Tulisan-->
  
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-gambar"> <img src="///d:/APM/FRONT END/Upload/Upload2/warna.png" alt="Logo" width="120" height="150" /> </a>
          <div class="text-start ms-4">
            <h3>SISTEM INFORMASI AKREDITASI PENJAMINAN MUTU</h3>
            <br /> 
            <h5>PENGADILAN NEGERI/PHI/TIPIKOR BANDA ACEH KELAS IA</h5>
          </div>
        </div>
      </nav>
   
    <!-- Akhir Gambar Logo dan Tulisan-->
    <!-- Akhir Navbar-->

    <!-- Simbol
    <i class="bi-grid-fill" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-person-fill" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-display-fill" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-table" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-file-arrow-up-fill" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-patch-check-fill" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-file-check-fill" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-bell-fill" style="font-size: 2rem; color: #325135"></i>
    <i class="bi-arrow-right-square-fill" style="font-size: 2rem; color: #325135"></i>
    -->
    <!--Sidebar-->
    <main>
        <div class="row">
            <div class="col-5">
                
            </div>
        </div>
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark shadow p-3 mb-5 float-start position-absolute" style="width: 280px; z-index: 999;">
        <div class="header-profil">
          <a href="#" class="d-flex align-items-center text-decoration-none" id="dropdownUser1" aria-expanded="false">
            <img src="///d:/APM/FRONT END/Monitoring/img.jpeg" alt="" width="50" height="55" class="rounded-circle me-2">
            <h6 id="nama-fs-4" >Misbah, S.T, M.T.</h6>
            <i class="bi-list" style="font-size: 1.5rem; color: #325135"></i>
            <p id="kategori">Admin</p>
          </a>
        </div>
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        </a>
        <hr id="garis1">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link text-white">
              <i class="bi-grid-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="dashboard">Dashboard</h6>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">  
              <i class="bi-person-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="profil">Profil</h6>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link active" aria-current="page" >
              <i class="bi-display-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="monitoring">Monitoring</h6>
            </a>
          </li>
          <!---
          <li>
            <a href="#" class="nav-link text-white">
              <i class="bi-table" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="data-LKE">Data LKE</h6>
            </a>
          </li>
          <li>
          <!-->
            <a href="#" class="nav-link text-white">
              <i class="bi-file-arrow-up-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="upload">Upload Data</h6>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <i class="bi-patch-check-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="verifikasi">Verifikasi Data</h6>
            </a>
          </li>
          <!---
          <li>
            <a href="#" class="nav-link text-white">
              <i class="bi-file-check-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="audit">Audit</h6>
            </a>
          </li>
          <!-->
          <hr id="garis2">
          </ul>
          <!---
          <li>
            <a href="#" class="nav-link text-white">
              <i class="bi-bell-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="notifikasi">Notifikasi</h6>
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <i class="bi-gear-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="cms">CMS</h6>
            </a>
          </li>
          <!-->
          <li>
            <a href="#" class="nav-link text-white">
              <i class="bi-arrow-right-square-fill" style="font-size: 1.5rem; color: #325135"></i>
              <h6 id="logout">Logout</h6>
            </a>
          </li>
        </ul>
      </div>
      <!--Sidebar-->
      <!--Box periode-->
      <div class="mx-1" style="margin-left: 20rem !important; margin-top: 2rem;">
          <div class="container mt-4">
            <div class=" ps-5">
              <h5 class="w-50" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem; margin-left: 1rem;">Monitoring</h5>
            </div>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">KETUA</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">WAKIL</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart1"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart1').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">PANITERA</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart2"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart2').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">SEKRETARIS</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart3"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart3').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">HAKIM</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart4"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart4').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">PANMUD HUKUM</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart5"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart5').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">PANMUD PERDATA</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart6"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart6').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">JURUSITA</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart7"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart7').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">PANMUD PIDANA</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart8"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart8').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">PANITERA PENGGANTI</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart9"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart9').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">SUB.BAG KEPEGAWAIAN & ORTALA</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart10"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart10').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">SUB.BAG UMUM & KEUANGAN</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart11"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart11').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">SUB.BAG PTIP</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart12"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart12').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">PANMUD TIPIKOR</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart13"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart13').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">PANMUD PHI</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="myChart14"></canvas>
                                      </div>
                                      <script>
                                          var ctx = document.getElementById('myChart14').getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [12, 19, 3],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                                      </script>
                                        <div class="mb-3 text-start">
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </button>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      <!--Akhir Box Periode-->
      </main>
      <!--Akhir dari isi-->
  </body>
</html>

