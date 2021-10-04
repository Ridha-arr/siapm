<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stylep.css') }}"/>
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
        <div class="row mt-5">
            <div class="col-5">
                
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-5">
                
            </div>
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
                                <form action="{{route('profil/update')}}" method="post">
                                  @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputText" name="name" value="{{$user->name}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Kategori</label>
                                        <div class="form-check">
                                            <input value="pimpinan" {{$user->level=='pimpinan'?'checked':''}} class="form-check-input" type="radio" name="level" id="level1">
                                            <label class="form-check-label" for="level1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Pimpinan/Koordinator Dokumen Kontrol
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input value="petugas" {{$user->level=='petugas'?'checked':''}} class="form-check-input" type="radio" name="level" id="level1">
                                            <label class="form-check-label" for="level1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Petugas/Operator
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input value="verifikator" {{$user->level=='verifikator'?'checked':''}} class="form-check-input" type="radio" name="level" id="level1">
                                            <label class="form-check-label" for="level1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Verifikator
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input value="auditor" {{$user->level=='audit'?'checked':''}} class="form-check-input" type="radio" name="level" id="level1">
                                            <label class="form-check-label" for="level1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Auditor Internal
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input value="koordinator" {{$user->level=='koordinator'?'checked':''}} class="form-check-input" type="radio" name="level" id="level1">
                                            <label class="form-check-label" for="level1" style="font-weight: 400; font-family: 'Poppins', sans-serif;">
                                              Koordinator Auditor Internal
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputSelection" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Area</label>
                                        <div class="col-sm-15">
                                            <select name="area" class="form-select" aria-label=".form-select-example">
                                                <option selected value="" >Pilih Area</option>
                                                <option {{$user->area== "ketua"?'selected':''}} value="ketua" >KETUA</option>
                                                <option {{$user->area== "wakil"?'selected':''}} value="wakil" >WAKIL</option>
                                                <option {{$user->area== "panitera"?'selected':''}} value="panitera" >PANITERA</option>
                                                <option {{$user->area== "sekretaris"?'selected':''}} value="sekretaris" >SEKRETARIS</option>
                                                <option {{$user->area== "hakim"?'selected':''}} value="hakim" >HAKIM</option>
                                                <option {{$user->area== "panmud hukum"?'selected':''}} value="panmud hukum" >PANMUD HUKUM</option>
                                                <option {{$user->area== "panmud perdata"?'selected':''}} value="panmud perdata" >PANMUD PERDATA</option>
                                                <option {{$user->area== "jurusita"?'selected':''}} value="jurusita" >JURUSITA</option>
                                                <option {{$user->area== "panmud pidana"?'selected':''}} value="panmud pidana" >PANMUD PIDANA</option>
                                                <option {{$user->area== "panitera pengganti"?'selected':''}} value="panitera pengganti">PANITERA PENGGANTI</option>
                                                <option {{$user->area== "kepegawaian"?'selected':''}} value="kepegawaian">SUB.BAG KEPEGAWAIAN & ORTALA</option>
                                                <option {{$user->area== "keuangan"?'selected':''}} value="keuangan">SUB.BAG UMUM & KEUANGAN</option>
                                                <option {{$user->area== "ptip"?'selected':''}} value="ptip">SUB.BAG PTIP</option>
                                                <option {{$user->area== "tipikor"?'selected':''}} value="tipikor">PANMUD TIPIKOR</option>
                                                <option {{$user->area== "phi"?'selected':''}} value="phi">PANMUD PHI</option>
                                              </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Email</label>
                                        <input name="email" value="{{$user->email}}" type="email" class="form-control" id="exampleInputText">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputText" class="form-label" style="font-weight: 600; font-family: 'Poppins', sans-serif;">Status</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="1" {{$user->status?'checked':''}} name="status" id="level1">
                                            <label class="form-check-label" for="level1" style="font-family: 'Poppins', sans-serif;">
                                              Aktif
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="0" {{$user->status == 0?'checked':''}} name="status" id="level1">
                                            <label class="form-check-label" for="level1" style="font-family: 'Poppins', sans-serif;">
                                              Tidak Aktif
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="submit" class="btn btn-secondary">
                                            <i class="bi-save-fill" style="font-size: 1rem; color: #ffff"></i>
                                             Simpan
                                        </button>
                                    </div>
                                </form>
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

