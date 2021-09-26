<!DOCTYPE html>
<html lang="en" style="width:100vw;overflow-x:hidden">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style1.css') }}" />

    <title>Sistem Informasi Akreditasi Penjaminan Mutu</title>
</head>

<body>
    <!-- Buat Navbar Atas-->
    <!-- Gambar Logo dan Tulisan-->
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
    <!-- Akhir Gambar Logo dan Tulisan-->
    <!-- Akhir Navbar-->

    <!-- Buat isi login-->
    <div class="isi w-100 h-100">
        <img src="{{ asset('assets/img/background.jpeg') }}" class="position-absolute" style="width:100vw" alt="">
        <div class="row p-5">
            <div class="col">
                <!--Border 1-->
                <div class="card h-100">
                    <div class="card-body1 py-4 rounded-3 h-100">
                        <h5 id="card-title1">Informasi : </h5>
                        <p id="card-text1">Saran tentang SIAPM bisa ditujukan ke alamat email berikut : </p>
                        <p id="card-text2">it.pnbandaaceh@gmail.com </p>
                        </p>
                        <!--Buat slide gambar-->
                        <div id="carouselExampleInterval" class="carousel slide col-lg-10 offset-lg-1"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('assets/img/satu.jpeg') }}" class="d-block w-100 rounded-3"
                                        alt="Slide1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/dua.jpeg') }}" class="d-block w-100 rounded-3"
                                        alt="Slide2">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('assets/img/tiga.jpeg') }}" class="d-block w-100 rounded-3"
                                        alt="Slide3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!--Akhir slide gambar-->
                    </div>
                    <!--Akhir border 1-->
                </div>
            </div>
            <div class="col">
                <!--Border 2-->
                <div class="card h-100">
                    <div class="card-body rounded-3 w-100">
                        <h5 id="card-title2">Selamat Datang</h5>
                        <p id="card-text3">Sistem Informasi Akreditasi Penjaminan Mutu</p>
                        <form method="POST" action="{{route('login')}}" >
                          @csrf
                            <div class="mb-3 offset-lg-1 ">
                                <label for="exampleInputEmail1" class="form-label1">Alamat Email</label>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1">
                                @if (session()->has('message'))
                                    <div class="w-100 text-center">
                                      {{$message}}
                                    </div>
                                @endif
                                <label for="exampleInputPassword1" class="form-label2">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                <button type="submit" class="btn btn-success w-100 mt-4">Login</button>
                                <div class="text-center">
                                    <p id="lupa-password">Lupa Password?</p>
                                    <a href="">Request Reset Password</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Akhir border 2-->
            </div>
        </div>

        <!-- Akhir isi login-->
</body>

</html>
