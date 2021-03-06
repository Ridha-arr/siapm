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
    <script type="text/javascript" src= "{{asset('assets/js/Chart.js')}}"></script>

    <title>Sistem Informasi Akreditasi Penjaminan Mutu</title>
  </head>
  <body>
    <!-- Buat Navbar Atas-->
    <!-- Gambar Logo dan Tulisan-->
    <div class="fixed-top">
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
    </div>
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
    <x-sidebar></x-sidebar>
    <main>
      <!--Sidebar-->
      <!--Box periode-->
      <div class="mx-1" style="margin-left: 20rem !important; margin-top: 13rem">
          <div class="container mt-4">
            <div class=" ps-5 mb-4">
                <span class="w-50 h5 m-4" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem; margin-left: 1rem;">Dashboard</span>
                <button class="border-0 bg-transparent mt-4 float-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="margin-left: -6rem !important"><i class="bi-list" style="font-size: 1.5rem; color: #325135;"></i></button>
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
                            <video controls="true" width="300" height="200">
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
                  
                      
                            <div class="card" style="width: 100%; height: 10rem; background-color: #325135; border: #325135; margin-top: 2rem;">
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
                   
                      
                            <div class="card" style="width: 100%; height: 10rem; background-color: #325135; border: #325135; margin-top: 2rem;">
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

