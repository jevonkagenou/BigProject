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
    <title>Kalopsia</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/TwBt9Z0Q/K.png" />
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

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #f72b50;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
    .red-hover:hover{
            color:#EE3232 !important;
        }
        .btn-outline-danger:checked{
            color:white !important;
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

                        {{-- Add Payrol --}}
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="card-body">
                                <h5 class="strong text-center" data-bs-toggle="tab">
                                    Tambah Payroll
                                </h5>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-9 col-8">
                                        <p>Tanggal Efektif</p>
                                    </div>
                                    <div class="col-xl-3 col-3">
                                        <input type="date" class="form-control" placeholder=""
                                            style="border: 0.035rem solid rgb(195, 195, 195)" />
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-9 col-8">
                                        <p>Gaji Bulanan</p>
                                    </div>
                                    <div class="col-xl-3 col-4">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-9 col-8">
                                        <p>Gaji Mingguan</p>
                                    </div>
                                    <div class="col-xl-3 col-4">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-9 col-8">
                                        <p>Gaji Harian</p>
                                    </div>
                                    <div class="col-xl-3 col-4">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <hr />
                            </div>
                        </div>
                        {{-- End --}}

                        {{-- Month Salary --}}
                        <div class="col-xl-12">
                            <div class="card-body">
                                <div class="card-header">
                                    <h4 class="card-title">Gaji Bulanan</h4>
                                </div>
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                        {{-- End --}}

                        {{-- Monthly Salary --}}
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                            <div class="card-body">
                                <h5 class="strong text-center" data-bs-toggle="tab">
                                    Pendapatan
                                </h5>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-6 col-6">
                                        <p>Gaji Pokok</p>
                                    </div>
                                    <div class="col-xl-4 col-4">
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
                                    <div class="col-xl-6 col-6">
                                        <p>Tunjangan Pulsa</p>
                                    </div>
                                    <div class="col-xl-4 col-4">
                                        <p>Rp. 500.000</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-6 col-6">
                                        <p>Tunjangan Lainnya</p>
                                    </div>
                                    <div class="col-xl-4 col-4">
                                        <p>Dimasukkan ketika melakukan pembayaran</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <p>Total</p>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <p>Rp. 6.000.000</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 2nd Tables --}}
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                            <div class="card-body">
                                <h5 class="strong text-center" data-bs-toggle="tab">
                                    Potongan
                                </h5>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-6 col-6">
                                        <p>Gaji Pokok</p>
                                    </div>
                                    <div class="col-xl-4 col-4">
                                        <p>Rp. 4.500.000</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-3 col-3">
                                        <p>Denda Keterlambatan</p>
                                    </div>
                                    <div class="col-xl-3 col-3">
                                        <p>0</p>
                                    </div>
                                    <div class="col-xl-3 col-3">
                                        <p>Hari x 26.001</p>
                                    </div>
                                    <div class="col-xl-3 col-3">
                                        <p>0</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-xl-6 col-6">
                                        <p>Potongan Lainnya</p>
                                    </div>
                                    <div class="col-xl-4 col-4">
                                        <p>Dimasukkan ketika melakukan pembayaran</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="row">
                                    <div class="col-lg-6 col-6">
                                        <p>Total</p>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <p>Rp. 6.000.000</p>
                                    </div>
                                    <hr />
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-6 col-6">
                                        <b>
                                            <p class="strong">Total Home Pay</p>
                                        </b>
                                    </div>
                                    <div class="col-lg-4 col-4">
                                        <b>
                                            <p class="strong">Rp. 6.000.000</p>
                                        </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End --}}
                    <div class="row justify-content-end">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="card-body">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8 col-12 text-end">
                                        <a href="/PayrolEmployee" class="NoRepeat "><button type="button" class="btn btn-rounded btn-danger">Simpan Perubahan</button></a>
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
