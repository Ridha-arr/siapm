<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styleu2.css') }}" />
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
                        style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem; margin-left: 1rem;">Upload
                        Data</span>
                    <button class="border-0 bg-transparent mt-4 float-start" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                        style="margin-left: -6rem !important"><i class="bi-list"
                            style="font-size: 1.5rem; color: #325135; margin-left: 2rem !important"></i></button>
                </div>
                <div class="card">
                    <div class="card-body">
                        @foreach ($laporans as $laporan)
                            <h5 id="card-title" class="text-left mt-2">{{ $laporan->name }}</h5>
                            <div class="w-100 align-center">
                                <div class="mx-auto">
                               
                                    @if (isset($laporan->keterangan))
                                        @foreach ($laporan->keterangan as $keterangan)
                                            <div class="card mb-4" style="margin-left: 0rem">
                                                <div class="card-body">
                                                    <div class="mb-3">
                                                        <div class="isi">
                                                            @if (isset($keterangan->laporan))
                                                                <form action="{{ route('update') }}" method="post"
                                                                    enctype="multipart/form-data">
                                                                @else
                                                                    <form action="{{ route('postUpload') }}"
                                                                        method="post" enctype="multipart/form-data">
                                                            @endif
                                                            @csrf
                                                            <input type="hidden" value="{{$keterangan->name}}" name="index">
                                                            <input type="hidden" value="{{ $laporan->id }}"
                                                                name="tipe">
                                                            <input type="hidden" value="{{ $keterangan->id }}"
                                                                name="keterangan">
                                                            <span> {{ $keterangan->name }}</span>
                                                            <br>
                                                            <br>
                                                            <input accept="application/pdf" class="form-control"
                                                                type="file" name="file" id="formFile"
                                                                style="width: min-content;">
                                                        </div>
                                                        @if (isset($keterangan->laporan))

                                                            <a href="{{ asset('storage/' . str_replace('public/', '', $keterangan->laporan->dokumen)) }}"
                                                                class="btn btn-secondary"
                                                                style="width: 15rem; margin-top: 1rem;  width: max-content; margin-inline-start: auto;">Pilih
                                                                Dokumen Lama</a>

                                                        @endif
                                                        @if (isset($keterangan->laporan))
                                                            <a href="{{ asset('storage/' . str_replace('public/', '', $keterangan->laporan->dokumen)) }}"
                                                                class="btn btn-secondary"
                                                                style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem;"
                                                                target="_blank">
                                                                Lihat Dokumen </a>
                                                        @endif
                                                        @if (isset($keterangan->laporan))
                                                            <input type="hidden" value="{{ $keterangan->laporan->id }}"
                                                                name="update">
                                                            <button type="submit" class="btn btn-secondary"
                                                                style="width: 15rem; margin-top: 1rem; width: min-content; margin-left: 0.3rem         ;">
                                                                Simpan </button>
                                                        @else
                                                            <button type="submit" class="btn btn-secondary"
                                                                style="width: 15rem; margin-top: 1rem; width: min-content; margin-left: 0.3rem         ;">
                                                                Upload </button>
                                                        @endif
                                                        </form>
                                                        <div class="w-100">
                                                            @if (session()->has($keterangan->name))
                                                                <div
                                                                    class="alert bg-success text-white float-end p-2">
                                                                    {{ session($keterangan->name) }}
                                                                </div>
                                                            @endif
                                                        </div>
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
