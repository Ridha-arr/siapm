<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/styleu2.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">

    <title>Sistem Informasi Akreditasi Penjaminan Mutu</title>
  </head>
  <body>
    <!-- Buat Navbar Atas-->
    <!-- Gambar Logo dan Tulisan-->
    <div class="fixed-top">
      <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-gambar"> <img src="{{asset('assets/img/warna.png')}}" alt="Logo" width="120" height="150" /> </a>
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
    <main>
        <div class="row">
            <div class="col-5">
                
            </div>
        </div>
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark shadow p-3 mb-5 float-start position-absolute" style="width: 280px; z-index: 999;">
        <div class="header-profil">
          <a href="#" class="d-flex align-items-center text-decoration-none" id="dropdownUser1" aria-expanded="false">
            <img src="{{asset('assets/img/img.jpeg')}}" alt="" width="50" height="55" class="rounded-circle me-2">
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
            <a href="#" class="nav-link active" aria-current="page">
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
      <div class="mx-1" style="margin-left: 14rem !important;">
          <div class="container mt-4">
            <div class=" ps-4">
              <h1 class="w-100">Upload Data</h1>
            </div>
            <div class="card">
                <div class="card-body">
                @foreach ($laporans as $laporan)
                <h5 id="card-title" class="text-left mt-2">{{$laporan->name}}</h5>
                <div class="w-100 align-center">
                  <div class="mx-auto">
                    @if (isset($laporan->keterangan))
                    @foreach ($laporan->keterangan as $keterangan)
                    <div class="card mb-4" style="margin-left: 0rem">
                      <div class="card-body">
                        <div class="mb-3">
                          <div class="isi">
                            @if (isset($keterangan->laporan))
                            <form action="{{route('update')}}" method="post" enctype="multipart/form-data">
                              @else
                            <form action="{{route('postUpload')}}" method="post" enctype="multipart/form-data">
                              @endif
                              @csrf
                              <input type="hidden" value="{{$laporan->id}}" name="tipe">
                              <input type="hidden" value="{{$keterangan->id}}" name="keterangan">
                                <span > {{$keterangan->name}}</span>
                                <br>
                                <br>
                                <input accept="application/pdf" class="form-control" type="file" name="file" id="formFile" style="width: min-content;">
                              </div>
                              @if (isset($keterangan->laporan))
                              <div class="col">
                                <a href="{{asset('storage/'.str_replace("public/", "",$keterangan->laporan->dokumen))}}" class="btn btn-secondary" style="width: 15rem; margin-top: 2rem; width: max-content; margin-inline-start: auto;">Pilih Dokumen Lama</a>
                              </div>
                              @endif
                            @if (isset($keterangan->laporan))
                            <a href="{{asset('storage/'.str_replace("public/", "",$keterangan->laporan->dokumen))}}" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem;" target="_blank">
                              Lihat Dokumen </a>
                              @endif
                              @if (isset($keterangan->laporan))
                              <input type="hidden" value="{{$keterangan->laporan->id}}" name="update">
                            <button type="submit" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: min-content; margin-left: 0.3rem         ;">
                              Simpan </button>
                              @else
                              <button type="submit" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: min-content; margin-left: 0.3rem         ;">
                              Upload </button>
                              @endif
                              </form>
                          </div>
                        </div>
                      </div>
                    @endforeach
                    @endif
                  </div>
                @endforeach
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

