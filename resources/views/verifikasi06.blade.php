<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style_verifikasi01.css')}}" />
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
                <a class="navbar-gambar"> <img src= "{{asset('assets/img/warna.png')}}" alt="Logo" width="120" height="150" /> </a>
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
    <div class="mx-1" style="margin-left: 14rem !important; margin-top:13rem">
    <div class="container mt-4">
        <div class=" ps-5 mb-4">
            <span class="w-50 h5 m-4" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem; margin-left: 1rem;">Verifikasi Data</span>
            <button class="border-0 bg-transparent mt-4 float-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="margin-left: -6rem !important"><i class="bi-list" style="font-size: 1.5rem; color: #325135; margin-left: 2rem !important"></i></button>
          </div>
        <div class="card">
        <div class="card-body">
            <h5 id="card-title" class="text-center">{{$valids->name}}</h5>
            <div class="w-100 align-center">
            <div class="mx-auto">
                @foreach ($valids->keterangan as $keterangan)
                <div class="card" style="margin-left: 0rem">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">{{$keterangan->name}}</label>
                        
                    <div class="isi">
                        <div class="row p-1">
                            <ul class="list-group">
                                <li class="list-group-item">{{isset($keterangan->laporan->komentar)?$keterangan->laporan->komentar:''}}</li>
                                </ul>
                        </div><br>
                        @if (isset($keterangan->laporan->verif))
                        @if ($keterangan->laporan->verif)
                            <label for="formFile" class="form-label"><i class="bi bi-patch-check-fill"style="margin: 5px;"></i>Sudah Terkendali</label>
                        @else
                            <label for="formFile" class="form-label"><i class="bi bi-patch-exclamation-fill"style="margin: 5px;"></i>Belum Terkendali</label>
                        @endif
                            
                        @endif
                            
                                    
                    </div>
                    </div>
                </div>
                </div>
                @endforeach

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


