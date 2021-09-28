<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style_verifikasi01.css')}}"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">

    <title>Sistem Informasi Akreditasi Penjaminan Mutu</title>
</head>
<body>
    <!-- Buat Navbar Atas-->
    <!-- Gambar Logo dan Tulisan-->
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
            <a href="#" class="nav-link text-white">
            <i class="bi-file-arrow-up-fill" style="font-size: 1.5rem; color: #325135"></i>
            <h6 id="upload">Upload Data</h6>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link active" aria-current="page">
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
        <h1 class="w-100">Verifikasi Data</h1>
        </div>
        <div class="card">
        <div class="card-body">
            <h5 id="card-title" class="text-center">NOMOR PER ISI</h5>
            <div class="w-100 align-center">
            <div class="mx-auto">
                <div class="card" style="margin-left: 0rem">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Syarat per isi</label>
                        
                    <div class="isi">
                        <div class="row p-1">
                            <ul class="list-group">
                                <li class="list-group-item">Dokumen yang memenuhi syarat</li>
                                </ul>
                        <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                            View </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="card" style="margin-left: 0rem">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">syarat per isi</label>
                            
                        <div class="isi">
                            <div class="row p-1">
                                <ul class="list-group">
                                    <li class="list-group-item">Dokumen yang memenuhi syarat</li>
                                    </ul>
                            <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                View </button>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
            </div>
            </div>
        </div>
        </div><br>
        <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
            <i class="bi bi-arrow-left-square-fill" style="margin: 5px;"></i>
            Kembali </i></button>
    </div>      
</div>
    <!--Akhir Box Periode-->
    
    <!--batasan-->
    </main>
    <!--Akhir dari isi-->
</body>
</html>