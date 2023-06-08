<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Dompet : Payment Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>


<style>
    .btn-check:checked+.btn-outline-danger {
        color: white !important;
    }

    .hoverbtn {
        color: #f72b50 !important;
    }

    .hoverbtn:hover {
        color: white !important;
    }

    .btn-check:hover {
        color: white !important;
    }
    @media (max-width: 320px) {
        .card-title {
            font-size: 16px;
        }
        .btn {
            font-size: 12px;
        }
    }
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="row">

                        {{-- Button --}}
                        <div class="card-body col-xl-3 col-lg-4 col-md-4 col-sm-4 ml-8">
                            <div style="">
                                <div class="profile-photo d-flex justify-content-center">
                                    <img src="images/profile/profile.png" class="img-fluid rounded-circle "
                                        alt="">
                                </div>
                                <br>
                                <div class="d-flex justify-content-center">
                                    <div class="input-group" style="width: 240px;">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div style="text-align: center;">
                                    <h4 class="text-black">Arya Kurniawan</h4>
                                    <p class="mb-0">IT Manager</p>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row justify-content-center"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio1a" id="btnradio1a">
                                        <a href="/" type="button"
                                            class="btn btn-outline-danger hoverbtn mb-2">Personal</a>

                                        <input type="radio" class="btn-check" name="btnradio1a" id="btnradio2a"
                                            checked>
                                        <a href="/PayrolEmployee" type="button"
                                            class="btn btn-outline-danger hoverbtn">Payroll</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End --}}

                        {{-- Deskription --}}
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="card-body">
                                <h5 class="strong text-center" data-bs-toggle="tab">
                                    Gaji Bulanan
                                </h5>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-9 col-8">
                                        <p>Gaji Pokok</p>
                                    </div>
                                    <div class="col-xl-3 col-4">
                                        <p>Rp. 4.500.000</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-3 col-3">
                                        <p>Uang Lembur</p>
                                    </div>
                                    <div class="col-xl-3 col-3">
                                        <p>0</p>
                                    </div>
                                    <div class="col-xl-3 col-3">
                                        <p>Jam x 26.001</p>
                                    </div>
                                    <div class="col-xl-3 col-3">
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-9 col-8">
                                        <p>Tunjangan Pulsa</p>
                                    </div>
                                    <div class="col-xl-3 col-4">
                                        <p>Rp. 500.000</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-9 col-8">
                                        <p>Tunjangan Pulsa</p>
                                    </div>
                                    <div class="col-xl-3 col-4">
                                        <p>Rp. 500.000</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-lg-9 col-8">
                                        <b>
                                            <p class="strong text-danger">Koperasi</p>
                                        </b>
                                    </div>
                                    <div class="col-lg-3 col-4">
                                        <b>
                                            <p class="text-danger">Rp. 500.000</p>
                                        </b>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-lg-9 col-8">
                                        <b>
                                            <p class="strong">Total</p>
                                        </b>
                                    </div>
                                    <div class="col-lg-3 col-4">
                                        <b>
                                            <p>Rp. 6.000.000</p>
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End --}}

                        {{-- Table --}}
                        <div class="col-xl-12">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4 class="card-title">Riwayat</h4>

                                    <a type="button" class="btn btn-rounded btn-danger text-white" href="/SalaryAdjustment"><span
                                        class="btn-icon-start text-danger xxl-auto"><i class="fa fa-plus color-danger"></i>
                                    </span>Penyesuaian</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive-sm">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal Efektif</th>
                                                    <th>Slip Gaji</th>
                                                    <th>THP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>01/07/2023</td>
                                                    <td>Gaji Bulanan</td>
                                                    <td>Rp. 6.000.000</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>01/08/2023</td>
                                                    <td>Gaji Bulanan</td>
                                                    <td>Rp. 6.000.000</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>01/09/2023</td>
                                                    <td>Gaji Bulanan</td>
                                                    <td>Rp. 6.000.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Apex Chart -->
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('js/plugins-init/chartjs-init.js') }}"></script>
