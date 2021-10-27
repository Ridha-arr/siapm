<?php use App\Http\Controllers\Notifikasi;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style_notif.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

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
        <div class="mx-1" style="margin-left: 20rem !important; margin-top: 13rem">
            <div class="container mt-4">
                <div class="ps-5 mb-4">
                    <span class="w-50 h5 m-4"
                        style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem; margin-left: 1rem">Notifikasi</span>
                    <button class="border-0 bg-transparent mt-4 float-start" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                        style="margin-left: -6rem !important">
                        <i class="bi-list" style="font-size: 1.5rem; color: #325135"></i>
                    </button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="card-subtitle text-left">
                                    @foreach ($valids as $valid)
                                        @php
                                            $tersedia = Notifikasi::getDetail($valid->area);
                                            $total = Notifikasi::getTotal($valid->area);
                                            $verif = Notifikasi::getVerif($valid->area);
                                        @endphp
                                        <div class="card mt-2">

                                            <div class="card-body rounded-2"
                                                style="color: #325135; font-family: 'Poppins', sans-serif; font-weight: 400">
                                                <span>{{ $valid->area }}</span>
                                                <form action="{{ route('upload2') }}" method="get">

                                                    <a href="{{ route('verifikasi/area/detail', ['detail' => $valid->area]) }}"
                                                        class="btn btn-secondary position-relative float-end mt-2">
                                                        Verifikasi
                                                        <span
                                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ $total - $verif }}
                                                            <span class="visually-hidden">unread messages</span>
                                                        </span>
                                                    </a>

                                                    <input type="hidden" value="{{ $valid->area }}" name="area">
                                                    <input type="hidden" value="{{ Date('Y-m') }}" name="bulan">
                                                    <button type="submit"
                                                        class="btn btn-secondary position-relative float-end mt-2 mx-2">
                                                        Upload
                                                        <span
                                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                            {{ $total - $tersedia }}
                                                            <span class="visually-hidden">unread messages</span>
                                                        </span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>

                                    @endforeach
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