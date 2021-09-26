<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style2.css')}}" />
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
        <a class="navbar-gambar"> <img src="{{asset('assets/img/warna.png')}}"alt="Logo" width="120" height="150" /> </a>
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
            <img src="{{asset('assets/img/img.jpeg')}}" alt="" width="50" height="55" class="rounded-circle me-2">
            <h6 id="nama-fs-4" >Misbah, S.T, M.Eng.</h6>
            <i class="bi-list" style="font-size: 1.5rem; color: #325135"></i>
            <p id="kategori">Admin</p>
          </a>
        </div>
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        </a>
        <hr id="garis1">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">
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
            <a href="#" class="nav-link text-white">
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
      <div class="mx-1" style="margin-left: 20rem !important;">
          <div class="container mt-4">
            <div class=" ps-5">
                <h5 class="w-100" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem;">Dashboard</h5>
                <br>
                <h3 class="w-100" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135; ">Rekapitulasi 3 Bulan Terakhir</h3>
                <div style="width: 700px;height: 400px">
                    <canvas id="myChart"></canvas>
                </div>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Juli', 'Agustus', 'September'],
                            datasets: [
                                {
                                    label: 'Laporan',
                                    data: [12, 19, 3],
                                    backgroundColor: ['rgb(253, 215, 3)', 'rgb(253, 215, 3)', 'rgb(253, 215, 3)'],
                                    borderWidth:2,
                                    borderColor: ['rgb(253, 215, 3)', 'rgb(253, 215, 3)', 'rgb(253, 215, 3)'],
                                },{
                                    label: 'Upload',
                                    data: [4, 10, 10],
                                    backgroundColor: ['rgb(27, 128, 1)', 'rgb(27, 128, 1)', 'rgb(27, 128, 1)'],
                                    borderWidth:2,
                                    borderColor: ['rgb(27, 128, 1)', 'rgb(27, 128, 1)', 'rgb(27, 128, 1)'],
                                },{
                                    label: 'Belum Upload',
                                    data: [11, 5, 7],
                                    backgroundColor: ['rgb(139, 5, 0)', 'rgb(139, 5, 0)', 'rgb(139, 5, 0)'],
                                    borderWidth:2,
                                    borderColor: ['rgb(139, 5, 0)', 'rgb(139, 5, 0)', 'rgb(139, 5, 0)'],
                                }
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
                <div class="isi">
                    <div class="row p-2">
                        <div class="col-3">
                            <div class="card shadow p-3 mb-5" style="width: 13rem; height: 8rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">Jumlah Laporan</h5>
                                    <h6 class="card-subtitle mb-2 text-muted" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #0000; margin-top: 1rem;">34 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow p-3 mb-5" style="width: 13rem; height: 8rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">Jumlah Upload</h5>
                                    <h6 class="card-subtitle mb-2 text-muted" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #0000; margin-top: 1rem;">24 </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card shadow p-3 mb-5 " style="width: 13rem; height: 8rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">Jumlah Belum Upload</h5>
                                    <h6 class="card-subtitle mb-2 text-muted" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #0000; margin-top: 1rem ;">23 </h6>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="isi">
                    <div class="row p-2">
                        <div class="col-5">
                            <img src="{{asset('assets/img/gambar.png')}}" alt="" width="300" height="200">
                        </div>
                        <div class="col">
                            <h4 class="w-100" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #325135; margin-top: 1.5rem;">TENTANG SIAPM</h4>
                            <hr>
                            <p class="catatan" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135;">
                               SIAPM adalah aplikasi berbasis website dan mobile app yang dipergunakan untuk memudahkan proses akreditasi penjaminan mutu di Pengadilan Negeri/PHI/Tipikor Banda Aceh Kelas IA sesuai dengan aturan dari Direktorat Jenderal Badan Peradilan Umum (Badilum) 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="isi">
                    <div class="row p-2">
                        <div class="col-5">
                            <video controls="true" autoplay="true" width="300" height="200">
                                <source src="{{asset('assets/media/MA.mp4')}}"/>
                            </video>
                        </div>
                        <div class="col">
                            <h4 class="w-100" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #325135; margin-top: 1.5rem;">VIDEO PETUNJUK</h4>
                            <hr>
                            <p class="catatan" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135;">
                                Video Petunjuk ini menampilkan cara untuk menggunakan sistem informasi akreditasi penjaminan mutu pada Pengadilan Negeri/PHI/Tipikor Banda Aceh Kelas IA
                            </p>
                        </div>
                    </div>
                </div>
                <div class="isi">
                    <div class="row p-2">
                        <div class="col-5">
                            <div class="card" style="width: 60rem; height: 10rem; background-color: #325135; border: #325135; margin-top: 2rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #ffff; margin-top: 1rem; margin-inline-start: 2rem;">BUKU PETUNJUK</h5>
                                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #ffff; margin-top: 1rem ; margin-inline-start: 2rem;">Petunjuk Teknis Sistem Informasi Akreditasi Penjaminan Mutu
                                    <br>
                                    Pengadilan Negeri/PHI/Tipikor Banda Aceh Kelas IA
                                    </p>
                                    <div class="mb-2 text-end">
                                        <button type="button" class="btn btn-secondary" style="background-color: black; border: #ffff; margin-top: -8rem; margin-right: 2rem;">
                                          <i class="bi-download" style="font-size: 1rem; color: #ffff"></i>
                                          Download
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="isi">
                    <div class="row p-2">
                        <h4 class="w-100" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #325135; margin-top: 1.5rem;">LAYANAN</h4>
                        <hr>
                        <p class="catatan" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135;">
                            Pengguna yang sudah terdaftar dapat melakukan login dengan menekan tombol login untuk masuk melalui pilihan kategori. Pengguna yang sudah masuk kategori dapat mengakses aplikasi yang terdiri dari beberapa layanan, diantaranya :  Cek Data, Upload Data, Download Data, dan Lihat serta Cetak Laporan
                        </p>
                    </div>
                </div>
                <div class="isi">
                    <div class="row p-2">
                        <div class="col-6">
                            <div class="card shadow p-3 mb-5" style="width: 25rem; height: 25rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">Cek Data</h5>
                                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; color:#325135; margin-top: 1rem; ">Cek Data dapat dilakukan oleh pengguna yang sudah terdaftar dan login ke aplikasi. Pengguna dapat melakukan pengecekan terhadap laporan yang sudah atau belum diupload</p>
                                    <img src="{{asset('assets/img/undraw_Done_re_oak4.svg')}}" alt="" width="200" height="200" style="margin-top: 0rem;">    
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card shadow p-3 mb-5" style="width: 25rem; height: 25rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">Upload Data</h5>
                                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; color:#325135; margin-top: 1rem; ">Pengguna yang sudah terdaftar dan login ke aplikasi dapat mengupload data berupa laporan sesuai kategori/ bidangnya masing-masing dalam bentuk pdf</p>
                                    <img src="{{asset('assets/img/undraw_add_document_re_mbjx.svg')}}" alt="" width="200" height="200" style="margin-top: 1rem;">   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="isi">
                    <div class="row p-2">
                        <div class="col-6">
                            <div class="card shadow p-3 mb-5" style="width: 25rem; height: 25rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">Download Data</h5>
                                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; color:#325135; margin-top: 1rem; ">Download data yang dapat dilakukan oleh pengguna berupa download data laporan yang telah diupload dan LKE (Lembar Kerja Evaluasi) dalam bentuk pdf.</p>
                                    <img src="{{asset('assets/img/undraw_export_files_re_99ar.svg')}}" alt="" width="200" height="200" style="margin-top: 1rem;">    
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card shadow p-3 mb-5" style="width: 25rem; height: 25rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">Cetak Laporan</h5>
                                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-weight: 400; font-size: 15px; color:#325135; margin-top: 1rem; ">Pengguna yang sudah terdaftar dan login ke aplikasi dapat mencetak data berupa hasil LKE  yang sudah di download </p>
                                    <img src="{{asset('assets/img/undraw_Receipt_re_fre3.svg')}}" alt="" width="200" height="200" style="margin-top: 2rem;">   
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="isi">
                    <div class="row p-2">
                        <div class="col-5">
                            <div class="card" style="width: 60rem; height: 10rem; background-color: #325135; border: #325135; margin-top: 2rem;">
                                <div class="card-body">
                                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #ffff; margin-top: 1rem; margin-inline-start: 2rem;">DASAR HUKUM</h5>
                                    <p class="card-text" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #ffff; margin-top: 1rem ; margin-inline-start: 2rem;">Sistem Informasi APM telah diluncurkan berdasarkan Surat Keptusan (SK) No.  
                                    </p>
                                    <div class="mb-2 text-end">
                                        <button type="button" class="btn btn-secondary" style="background-color: black; border: #ffff; margin-top: -5rem; margin-right: 2rem;">
                                        <i class="bi-download" style="font-size: 1rem; color: #ffff"></i>
                                        Download
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="isi">
                    <div class="row p-2">
                        <h4 class="w-100" style="font-family: 'Poppins', sans-serif; font-weight: 600; color: #325135; margin-top: 1.5rem;">HUBUNGI</h4>
                        <hr>
                        <p class="catatan" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135;">
                            Pertanyaan dan Saran dapat dikirimkan ke Bagian Teknologi Informasi Pada Pengadilan Negeri/PHI/Tipikor Banda Aceh Kelas IA
                        </p>
                    </div>
                </div>
                <div class="isi">
                    <div class="row ps-5" style="margin-inline-start: 2rem;">
                        <div class="col-4">
                            <i class="bi-geo-alt-fill" style="font-size: 2rem; color: #000"></i>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 17px; color: #325135; margin-top: 1rem; ">ALAMAT KANTOR</h5>
                            <p class="catatan" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #000; font-size: 14px; text-align: left;">
                                Jalan Cut Meutia No. 23 
                                <br>
                                Kec. Baiturrahman,
                                <br> 
                                Kota Banda Aceh
                                <br>
                                Aceh - 23242
                            </p>
                        </div>
                        <div class="col-4">
                            <i class="bi-telephone-fill" style="font-size: 2rem; color: #000;"></i>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 17px; color: #325135; margin-top: 1rem;">TELEPON KANTOR</h5>
                            <p class="catatan" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #000; font-size: 14px; text-align: left;">
                                Tlp   (0651) 22141
                                <br>
                                HP    08116784433
                                <br>
                                WA  08116784433
                            </p>
                        </div>
                        <div class="col-4">
                            <i class="bi-envelope-fill" style="font-size: 2rem; color: #000"></i>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 17px; color: #325135; margin-top: 1rem;">EMAIL</h5>
                            <p class="catatan" style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #000; font-size: 14px; text-align: left;">
                                it.pnbandaaceh@gmail.com
                            </p>
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

