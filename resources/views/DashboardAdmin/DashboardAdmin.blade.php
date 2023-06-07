@include('PartialAdmin.SidebarNavbar')

<Style>
    .border {
        display: inline-block;
        width: 5rem;
        height: 5rem;
        margin: 0.25rem;
        background-color: transparent;
        margin: -5%;
        margin-top: 8%;
        width: 433px;
        height: 147px;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .border {
            width: 100%;
            height: auto;
            margin: 0.5rem 0;
            margin-left: 0;
            margin-top: 0;
        }
    }

    @import url(https://fonts.googleapis.com/css?family=Roboto);

    body {
        font-family: Roboto, sans-serif;
    }

    #chart {
        max-width: 650px;
        margin: 35px auto;
    }


    .border-secondary {
        color: #969ba0 !important;
        width: 100%;
    }

    .text {
        margin-top: 12px !important;
    }

    .profile-tab .nav-item .nav-link.active {
        border: 0;
        background: transparent;
        background: transparent;
        border-bottom: 0.0125rem solid #F72B50 !important;
        color: #F72B50 !important;
    }
</Style>

<div class="content-body">
    <!-- row -->
    <div class="container-fluid" style="padding:-5;">
        <div class="row">
            <div class="col-xl-9 col-xxl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div
                                class="col-xl-6 md-6 col-12 d-flex justify-content-center align-items-center text-center">
                                <div class="card-bx bg-white">
                                    <img class="" style="height : 240px; width : 246px;"
                                        src="images/dashboardadmin.svg" alt="">
                                    <div class="">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-xl-6 md-6 col-12 d-flex justify-content-center align-items-center text-center">
                                <div>
                                    <div class="col-md-12">
                                        <h4 class="card-title">Selamat Datang Admin!</h4>
                                        <span>Bekerja lebih mudah dan cepat bersama
                                            kami. Jangan lupa ikuti trainingnya.....</span>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div>
                            <h4 class="card-title mb-2">Kehadiran Karyawan</h4>
                            <div class="card-tabs mt-3 mt-sm-0">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#"
                                            role="tab">Terlambat</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#" role="tab">Izin &
                                            Cuti</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Waktu Terlambat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>#</th>
                                        <td>Shido</td>
                                        <td>5 menit</td>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <td>Shun</td>
                                        <td>10 menit</td>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <td>Kamijou Touma</td>
                                        <td>15 menit</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <h4 class="card-title mb-2">Kehadiran Karyawan</h4>
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#terlambat" data-bs-toggle="tab"
                                            class="nav-link active show">Terlambat</a>
                                    </li>
                                    <li class="nav-item"><a href="#izin" data-bs-toggle="tab" class="nav-link">Izin &
                                            Cuti</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="terlambat" class="tab-pane fade active show">
                                        <div class="my-post-content pt-3">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th class="text-center">Waktu Terlambat</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>#</th>
                                                                <td>Shido</td>
                                                                <td class="text-center">5 menit</td>
                                                            </tr>
                                                            <tr>
                                                                <th>#</th>
                                                                <td>Shun</td>
                                                                <td class="text-center">10 menit</td>
                                                            </tr>
                                                            <tr>
                                                                <th>#</th>
                                                                <td>Kamijou Touma</td>
                                                                <td class="text-center">15 menit</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="izin" class="tab-pane fade">
                                        <div class="my-post-content pt-3">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Nama</th>
                                                                <th>Jenis Izin</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>#</th>
                                                                <td>Shido</td>
                                                                <td class="text-center">Cuti</td>
                                                            </tr>
                                                            <tr>
                                                                <th>#</th>
                                                                <td>Shun</td>
                                                                <td class="text-center">Izin</td>
                                                            </tr>
                                                            <tr>
                                                                <th>#</th>
                                                                <td>Kamijou Touma</td>
                                                                <td class="text-center">Cuti</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <h4 class="card-title mb-2">Total Gaji Karyawan</h4>
                            <div class="tab-content">
                                <div class="text-center">
                                    <span class="border border-secondary">
                                        <h4 class="text text-black" style="color:#969ba0 !important;">Total Gaji
                                            Karyawan
                                        </h4>
                                        <h4 class="text text-black" style="color:#969ba0 !important;"><strong>Rp
                                                6.500.000</strong>
                                        </h4>
                                        <h5 class="text text-danger"><strong><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor"
                                                    style="margin-right:1px !important;" class="bi bi-caret-up-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                                </svg>-11%</strong></h5>
                                        <h5 class="text text-danger">Dari Bulan Sebelumnya</h5>
                                    </span>
                                </div>
                                <div class="text-center">
                                    <span class="border border-secondary">
                                        <h4 class="text text-black" style="color:#969ba0 !important;">Rata - Rata Gaji
                                            Bulan
                                            Ini
                                        </h4>
                                        <h4 class="text text-black" style="color:#969ba0 !important;"><strong>Rp
                                                6.500.000</strong>
                                        </h4>
                                        <h5 class="text text-danger"><strong><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="16" height="16" fill="currentColor"
                                                    style="margin-right:1px !important;" class="bi bi-caret-up-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
                                                </svg>-47%</strong></h5>
                                        <h5 class="text text-danger">Dari Bulan Sebelumnya</h5>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Jumlah Karyawan Per Jabatan</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Perbandingan Gaji Per Jabatan</h4>
                                </div>
                                <div class="card-body">
                                    <div id="chart_pie"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('vendor/wnumb/wNumb.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/dlabnav-init.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/styleSwitcher.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
    var options = {
          series: [{
          data: [21, 22, 10, 28, 16, 21, 13, 30]
        }],
          chart: {
          height: 350,
          type: 'bar',
          events: {
            click: function(chart, w, e) {
            }
          }
        },
        colors: ['#B70404', '#DB005B', '#F79327', '#FFE569'],
        plotOptions: {
          bar: {
            columnWidth: '45%',
            distributed: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        legend: {
          show: false
        },
        xaxis: {
          categories: [
            'John',
            'Joe',
            'Jake',
            'Amber',
            'Peter',
            'Mary',
            'David',
            'Lily'
          ],
          labels: {
            style: {
                // Dalam Code ini Length: 8 berfungsi untuk mengulangi warna sebanyak jumlah data dalam Categories //
                colors: Array.from({ length: 8 }, (_, index) => ['#B70404', '#DB005B', '#F79327', '#FFE569'][index % 4]),
              fontSize: '12px'
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>

<script>
    var options = {
          series: [44, 55, 13, 43, 22],
          chart: {
          width: 380,
          type: 'pie',
        },
        labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart_pie"), options);
        chart.render();
</script>
