<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleu1.css') }}" />
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
                <a class="navbar-gambar"> <img src="{{ asset('assets/img/warna.png') }}" alt="Logo" width="120"
                        height="150" /> </a>
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
                <div class=" ps-5 mb-4">
                    <span class="w-50 h5 m-4"
                        style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem; margin-left: 1rem;">Cms</span>
                    <button class="border-0 bg-transparent mt-4 float-start" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                        style="margin-left: -6rem !important"><i class="bi-list"
                            style="font-size: 1.5rem; color: #325135; margin-left: 2rem !important"></i></button>
                </div>
                <div class="card" style="width: 70rem; height: 30rem;">
                    <div class="card-body">
                        <h5 id="card-title">Akun</h5>
                        <button class="btn btn-info float-end text-white" data-bs-toggle="modal"
                            data-bs-target="#userModal">Tambah Akun</button>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Area</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->nip }}</td>
                                        <td>{{ $user->area }}</td>
                                        <td>{{ $user->level }}</td>
                                        <td>{{ $user->status?'Aktif':'Non-Aktif' }}</td>
                                        <td><a class="btn btn-danger" href="{{route('delete-akun',['id'=>$user->id])}}">delete</a><a class="mx-2 btn btn-info text-white" href="{{route('edit-profile',['id'=>$user->id])}}">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Akhir Box Periode-->
        <div class="modal fade" id="userModal" tabindex="-1" role="">
            <div class="modal-dialog modal-login" role="document">
                <div class="modal-content">
                    <form action="{{ route('tambah-akun') }}" method="post">
                        @csrf
                        <div class="m-0 card card-signup card-plain">
                            <div class="modal-header">
                                <h4 class="card-title">Tambah Akun</h4>
                                <button type="button" class="bg-transparent border-0" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="name" class="col-form-label">Nama:</label>
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="nidn" class="col-form-label">NIP:</label>
                                            <input type="text" class="form-control" id="nip" name="nip">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="col-form-label">Email:</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Hak Akses:</label>
                                            <select name="level" id="level" class="form-control" name="level">
                                                <option value="" selected>--Pilih Kategori--</option>
                                                <option value="pimpinan">Pimpinan</option>
                                                <option value="verifikator">Verifikator</option>
                                                <option value="operator">Operator</option>
                                                <option value="kordinator auditor internal">Kordinator Auditor Internal
                                                </option>
                                                <option value="auditor internal">Auditor Internal</option>
                                            </select>
                               
                                        </div>
                                        <div class="form-group">
                                            <label for="level" class="col-form-label">Area:</label>
                                            <select class="form-select" name="area"
                                                aria-label=".form-select-example">
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
                                                <option value="sub.bag kepegawaian & ortala">SUB.BAG KEPEGAWAIAN &
                                                    ORTALA
                                                </option>
                                                <option value="sub.bag umum & keuangan">SUB.BAG UMUM & KEUANGAN</option>
                                                <option value="sub.bag ptip">SUB.BAG PTIP</option>
                                                <option value="panmud tipikor">PANMUD TIPIKOR</option>
                                                <option value="panmud phi">PANMUD PHI</option>
                                            </select>
                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-form-label">Password:</label>
                                            <input type="text" class="form-control" id="password" name="password">
                                   
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer justify-content-center">
                                <button class="btn btn-primary text-white btn-link btn-wd btn-lg" type="submit"
                                    data-dismiss="modal">Daftarkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--Akhir dari isi-->
</body>

</html>
