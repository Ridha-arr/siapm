<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleu1.css') }}" />
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
    <x-sidebar></x-sidebar>
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

