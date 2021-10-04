<?php use \App\Http\Controllers\Monitoring;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylep.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js">
    <script type="text/javascript" src= "{{asset('assets/js/Chart.js')}}"></script>


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
        <script>
                 function chart(id,tersedia,verif,total) {
                     var ctx = document.getElementById(id).getContext('2d');
                                          var myChart = new Chart(ctx, {
                                              type: 'bar',
                                              data: {
                                                  labels: ['Tersedia', 'Verifikasi', 'Tidak Tersedia'],
                                                  datasets: [
                                                      {
                                                          label: 'Laporan',
                                                          data: [tersedia, verif, total],
                                                          backgroundColor: ['rgb(253, 215, 3)', 'rgb(27, 128, 1)', 'rgb(139, 5, 0)'],
                                                          borderWidth:2,
                                                          borderColor: ['rgb(253, 215, 3)',  'rgb(27, 128, 1)',  'rgb(139, 5, 0)'],
                                                      },
                                                  ],                       
                                              },
                                              options:{
                                                  scales: {
                                                      yAxes: [
                                                          {  
                                                              ticks: {
                                                                  beginAtZero: true,
                                                              },
                                                          },
                                                      ],
                                                  },
                                              },
                                          });
                 }
             </script>
           <!--Sidebar-->
      <!--Box periode-->
      <div class="mx-1" style="margin-left: 20rem !important; margin-top: 13rem;">
          <div class="container mt-4">
            <div class=" ps-5 mb-4">
              <span class="w-50 h5 m-4" style="font-family: 'Poppins', sans-serif; font-weight: 400; color: #325135; margin-top: 1rem; margin-left: 1rem;">Monitoring</span>
              <button class="border-0 bg-transparent mt-4 float-start" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" style="margin-left: -6rem !important"><i class="bi-list" style="font-size: 1.5rem; color: #325135;"></i></button>
            </div>
            @foreach ($valids as $valid)
                
                <div class="card">
                    <div class="card-body">
                        <div class="w-100 align-start">
                            <div class="mx-auto">
                                <div class="mb-3 w-100 row mx-auto">
                                    <div class="card-subtitle text-left">
                                        <h5 style="color: #325135; margin-top: 1rem; margin-bottom: 1rem; font-weight: 700;">{{strtoupper($valid->area)}}</h5>
                                        <div style="width: 700px;height: 400px">
                                          <canvas id="{{$valid->area}}"></canvas>
                                      </div>
                                      @php
                                          $tersedia = Monitoring::getDetail($valid->area);
                                          $total = Monitoring::getTotal($valid->area);
                                          $verif = Monitoring::getVerif($valid->area);
                                      @endphp
                                      <script>
                                          chart('{{$valid->area}}',{{$tersedia}},{{$verif}},{{$total}})
                                      </script>
                                        <div class="mb-3 text-start">
                                          <a href="{{route('monitoring/view',['area'=>$valid->area])}}" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 0.3rem         ;">
                                            Lihat Detil </a>
                                          <button type="button" class="btn btn-secondary" style="width: 15rem; margin-top: 1rem; width: max-content; margin-left: 2rem         ;">
                                            Download Laporan <i class="bi bi-download" style="margin: 5px;"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
             
      <!--Akhir Box Periode-->
      </main>
      <!--Akhir dari isi-->
  </body>
</html>

