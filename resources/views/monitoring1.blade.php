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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/stylep.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
    <script type="text/javascript" src="{{ asset('assets/js/Chart.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script> 

    <title>Sistem Informasi Akreditasi Penjaminan Mutu</title>
</head>

<body>
    <!-- Buat Navbar Atas-->
    <!-- Gambar Logo dan Tulisan-->
    <div class=" fixed-top">
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
        <div class="mx-1" style="margin-left: 20rem !important; margin-top: 13rem;">
            <div class="container mt-4">
                <div class=" ps-5 mb-4">
                    <span class="w-50 h5 m-4"
                        style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1.5rem; margin-left: 1rem;">Monitoring</span>
                    <button class="border-0 bg-transparent mt-4 float-start" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"
                        style="margin-left: -6rem !important"><i class="bi-list"
                            style="font-size: 1.5rem; color: #325135;"></i></button>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">

                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5
                                            style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">
                                            LAPORAN DATA APM</h5>
                                        <h5 style="color: #325135; margin-bottom: 1rem;">PENGADILAN NEGERI BANDA ACEH
                                        </h5>
                                        <div style="width: 700px;height: 400px">
                                            <canvas id="myChart"></canvas>
                                        </div>
                                        <script>
                                            var ctx = document.getElementById('myChart').getContext('2d');
                                            var myChart = new Chart(ctx, {
                                                type: 'bar',
                                                data: {
                                                    labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                    datasets: [{
                                                        label: 'Laporan',
                                                        data: [{{ $tersedia }}, {{ $verif }}, {{ $total }}],
                                                        backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                        borderWidth: 2,
                                                        borderColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                    }, ],
                                                },
                                                options: {
                                                    scales: {
                                                        yAxes: [{
                                                            ticks: {
                                                                beginAtZero: true,
                                                            },
                                                        }, ],
                                                    },
                                                },
                                            });
                                        </script>
                                        <div class="mb-3 text-start">
                                            <a href="{{ route('monitoring/detail') }}" class="btn btn-secondary"
                                                style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                                Lihat Detil </a>
                                            <button type="button" class="btn btn-secondary"
                                                style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                                Download Laporan <i class="bi bi-download"
                                                    style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <h5 class="w-100"
                                    style="font-family: 'Poppins', sans-serif; font-weight: 700; color: #325135; margin-top: 1rem ">
                                    REKAPITULASI 3 BULAN TERAKHIR</h5>
                                <div style="width: 700px;height: 400px">
                                    <canvas id="myChart1"></canvas>
                                </div>
                                <div>
                                    <button class="btn btn-secondary my-4 mb-5 ms-2" onclick="saveAsPDF()">Download Grafik</button>
                                </div>
                                <script>
                                    function saveAsPDF() {
                                        html2canvas(document.getElementById("myChart1"), {
                                            onrendered: function(canvas) {
                                                var img = canvas.toDataURL(); //image data of canvas
                                                var doc = new jsPDF();
                                                doc.addImage(img, 10, 10);
                                                doc.save('grafik.pdf');
                                            }
                                        });
                                    }
                                    var ctx = document.getElementById('myChart1').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: ['Juli', 'Agustus', 'September'],
                                            datasets: [{
                                                label: 'Laporan',
                                                data: [12, 19, 3],
                                                backgroundColor: ['rgb(253, 215, 3)', 'rgb(253, 215, 3)', 'rgb(253, 215, 3)'],
                                                borderWidth: 2,
                                                borderColor: ['rgb(253, 215, 3)', 'rgb(253, 215, 3)', 'rgb(253, 215, 3)'],
                                            }, {
                                                label: 'Upload',
                                                data: [4, 10, 10],
                                                backgroundColor: ['rgb(27, 128, 1)', 'rgb(27, 128, 1)', 'rgb(27, 128, 1)'],
                                                borderWidth: 2,
                                                borderColor: ['rgb(27, 128, 1)', 'rgb(27, 128, 1)', 'rgb(27, 128, 1)'],
                                            }, {
                                                label: 'Belum Upload',
                                                data: [11, 5, 7],
                                                backgroundColor: ['rgb(139, 5, 0)', 'rgb(139, 5, 0)', 'rgb(139, 5, 0)'],
                                                borderWidth: 2,
                                                borderColor: ['rgb(139, 5, 0)', 'rgb(139, 5, 0)', 'rgb(139, 5, 0)'],
                                            }],
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true,
                                                    },
                                                }, ],
                                            },
                                        },
                                    });
                                </script>
                                <div class="isi" style="margin-top:-2rem">
                                    <div class="row p-2">
                                        <div class="col-3">
                                            <div class="card shadow p-3 mb-5" style="width: max-content; height: 8rem;">
                                                <div class="card-body">
                                                    <h5 class="card-title"
                                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">
                                                        Jumlah Laporan</h5>
                                                    <br>
                                                    <br>
                                                    <h6 class="card-subtitle mb-2 text-muted"
                                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #0000; ">
                                                        34 </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card shadow p-3 mb-5" style="width: max-content; height: 8rem;">
                                                <div class="card-body">
                                                    <h5 class="card-title"
                                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">
                                                        Jumlah Upload</h5>
                                                    <br>
                                                    <br>
                                                    <h6 class="card-subtitle mb-2 text-muted"
                                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #0000; ">
                                                        24 </h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="card shadow p-3 mb-5 "
                                                style="width: max-content; height: 8rem;">
                                                <div class="card-body">
                                                    <h5 class="card-title"
                                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #325135;">
                                                        Jumlah Belum
                                                        <br> Upload
                                                    </h5>
                                                    <br>

                                                    <h6 class="card-subtitle mb-2 text-muted"
                                                        style="font-family: 'Poppins', sans-serif; font-weight: 500; color: #0000;">
                                                        23 </h6>
                                                </div>
                                            </div>
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
