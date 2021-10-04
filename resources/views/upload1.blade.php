<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleu2.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Sistem Informasi Akreditasi Penjaminan Mutu</title>
  </head>
  <body>
    <!-- Buat Navbar Atas-->
    <!-- Gambar Logo dan Tulisan-->
    <div class="fixed-top">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-gambar"> <img src="{{ asset('assets/img/warna.png') }}" alt="Logo" width="120" height="150" /> </a>
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
    <div class="fixed-top" style="margin-top: 13rem">
      <div data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling"
          aria-labelledby="offcanvasScrollingLabel"
          class="offcanvas show offcanvas-start d-flex flex-column flex-shrink-0 p-3 text-white bg-dark shadow p-3 mb-5 float-start position-absolute "
          style="width: 280px; z-index: 999;height:100vh; margin-top: -1.5rem">
          <div class="header-profil">
              <div class="row">
                  <div class="col-md-3">
                      <img src="{{ asset('assets/img/img.jpeg') }}" alt="" width="50" height="55"
                          class="rounded-circle me-2">
                  </div>
                  <div class="col-md-8">
                      <span class="h6" id="nama-fs-4">Misbah, S.T, M.Eng.</span>
                      <span id="kategori" class="ms-0">{{ auth()->user()->level }}</span>
                  </div>
              </div>
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
              <a href="{{ route('upload1') }}" class="nav-link text-white">
                  <i class="bi-file-arrow-up-fill" style="font-size: 1.5rem; color: #325135"></i>
                  <h6 id="upload">Upload Data</h6>
              </a>
              </li>
              <li>
                  <a href="{{route('verifikasi')}}" class="nav-link text-white">
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
                  <a href="{{ route('logout') }}" class="nav-link text-white">
                      <i class="bi-arrow-right-square-fill" style="font-size: 1.5rem; color: #325135"></i>
                      <h6 id="logout">Logout</h6>
                  </a>
              </li>
          </ul>
      </div>
  </div>

    <main>

         <!--Sidebar-->
      <!--Box periode-->
      <div class="mx-1" style="margin-left: 14rem !important; margin-top: 13rem">
        <div class="container mt-4">
          <div class=" ps-4">
            <h1 class="w-100">Upload Data</h1>
             <button class="border-0 bg-transparent mt-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi-list" style="font-size: 1.5rem; color: #325135;"></i></button>
          </div>
          <div class="card" style="width: 70rem; height: 30rem;">
            <div class="card-body">
              <h5 id="card-title">Periode Berkas</h5>
              <form action="{{route('upload2')}}" method="get">
              <div class="mb-3 row">
                <label for="inputMonth" class="col-sm-2 col-form-label">Bulan/Tahun</label>
                <div class="col-sm-5">
                  <input type="month" name="bulan" class="form-control" id="inputMonth" />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputSelection" class="col-sm-2 col-form-label">Area</label>
                <div class="col-sm-5">
                  <select class="form-select" name="area" aria-label=".form-select-example">
                    <option value="" disabled selected>Pilih Area</option>
                    <option value="ketua">KETUA</option>
                    <option value="wakil">WAKIL</option>
                    <option value="panitera">PANITERA</option>
                    <option value="sekretaris">SEKRETARIS</option>
                    <option value="hakim">HAKIM</option>
                    <option value="panmud hukum">PANMUD HUKUM</option>
                    <option value="panmud perdata">PANMUD PERDATA</option>
                    <option value="jurusita">JURUSITA</option>
                    <option value="panmud pidana">PANMUD PIDANA</option>
                    <option value="panitera pengganti">PANITERA PENGGANTI</option>
                    <option value="sub.bag kepegawaian & ortala">SUB.BAG KEPEGAWAIAN & ORTALA</option>
                    <option value="sub.bag umum & keuangan">SUB.BAG UMUM & KEUANGAN</option>
                    <option value="sub.bag ptip">SUB.BAG PTIP</option>
                    <option value="panmud tipikor">PANMUD TIPIKOR</option>
                    <option value="panmud phi">PANMUD PHI</option>
                  </select>
                </div>
              </div>
              <div class="mb-5 row">
                <button type="submit" class="btn btn-secondary">Buka</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--Akhir Box Periode-->
    </main>
    <!--Akhir dari isi-->
  </body>
</html>

