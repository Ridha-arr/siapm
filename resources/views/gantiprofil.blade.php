<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="stylegp.css" />
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
          <a class="navbar-gambar"> <img src="///d:/APM/FRONT END/Upload/Upload2/warna.png" alt="Logo" width="120" height="150" /> </a>
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
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark shadow p-3 mb-5 float-start position-absolute" style="width: 280px; z-index: 999; margin-top:11rem">
        <div class="header-profil">
          <a href="#" class="d-flex align-items-center text-decoration-none" id="dropdownUser1" aria-expanded="false">
            <img src="///d:/APM/FRONT END/Upload/Upload2/img.jpeg" alt="" width="50" height="55" class="rounded-circle me-2">
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
            <a href="#" class="nav-link active" aria-current="page" >  
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
                <div class="card">
                    <div class="card-body">
                            <div class="mb-3 w-50 row mx-auto">
                                <div class="card-title text-center" style="font-weight: 600; color: #325135; font-size: large; font-family: 'Poppins', sans-serif; margin-bottom: 3rem;">
                                 Edit Profil
                                </div>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputText">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Kategori</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Pimpinan/Koordinator Dokumen Kontrol
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Petugas/Operator
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Verifikator
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Auditor Internal
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Koordinator Auditor Internal
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputSelection" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Area</label>
                                        <div class="col-sm-15">
                                            <select class="form-select" aria-label=".form-select-example">
                                                <option selected  >Pilih Area</option>
                                                <option value="1" >KETUA</option>
                                                <option value="2" >WAKIL</option>
                                                <option value="3" >PANITERA</option>
                                                <option value="4" >SEKRETARIS</option>
                                                <option value="5" >HAKIM</option>
                                                <option value="6" >PANMUD HUKUM</option>
                                                <option value="7" >PANMUD PERDATA</option>
                                                <option value="8" >JURUSITA</option>
                                                <option value="9" >PANMUD PIDANA</option>
                                                <option value="10">PANITERA PENGGANTI</option>
                                                <option value="11">SUB.BAG KEPEGAWAIAN & ORTALA</option>
                                                <option value="12">SUB.BAG UMUM & KEUANGAN</option>
                                                <option value="13">SUB.BAG PTIP</option>
                                                <option value="14">PANMUD TIPIKOR</option>
                                                <option value="15">PANMUD PHI</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Email</label>
                                        <input type="email" class="form-control" id="exampleInputText">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Status</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-family: 'Poppins', sans-serif;">
                                              Aktif
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1" style="font-family: 'Poppins', sans-serif;">
                                              Tidak Aktif
                                            </label>
                                        </div>
                                    </div>
                                </form>
                                    <div class="mb-3 text-end">
                                        <button type="button" class="btn btn-secondary">
                                            <i class="bi-save-fill" style="font-size: 1rem; color: #ffff"></i>
                                             Simpan
                                        </button>
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

