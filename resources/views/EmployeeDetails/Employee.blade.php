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
</style>

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="row">

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
                                    <h4><a href="post-details.html" class="text-black">Arya Kurniawan</a></h4>
                                    <p class="mb-0">IT Manager</p>
                                </div>
                                <br>
                                <div class="container">
                                    <div class="row justify-content-center"
                                        aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio1a" id="btnradio1a"
                                            checked>
                                        <a href="/PayrolEmployee" type="button"
                                            class="btn btn-outline-danger hoverbtn mb-2">Personal</a>

                                        <input type="radio" class="btn-check" name="btnradio1a" id="btnradio2a">
                                        <a href="/PayrolEmployee" type="button"
                                            class="btn btn-outline-danger hoverbtn">Payroll</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body tab-pane fade active show col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                            <div class="row">
                                <div class="col-lg-12 order-lg-1">
                                    <h4 class="mb-1 text-md-start text-center">Profil Karyawan</h4>
                                    <form class="needs-validation" novalidate="">

                                        <hr class="mb-2 ">
                                        <div class="form-check custom-checkbox mb-1">
                                            <label class="form-check-label text-black text-strong"
                                                for="same-address">Informasi Pribadi</label>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Nama Lengkap</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">Ananda
                                                        Harfiana</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Tempat Lahir</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">Perancis</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Tanggal
                                                        Lahir</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">08 Mei 2005</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Status
                                                        Perkawinan</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">Belum
                                                        Menikah</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Golongan
                                                        Darah</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">B</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Agama</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">Islam</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="form-check custom-checkbox mb-1">
                                            <label class="form-check-label  text-black text-strong"
                                                for="save-info">Informasi Kontak</label>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Email</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label"
                                                        for="save-info">anandaharfiana@gmail.com</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">No. Hp</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label"
                                                        for="save-info">085794335045</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Alamat</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">Jl. Kemiri
                                                        City/Tokyo</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="form-check custom-checkbox mb-1">
                                            <label class="form-check-label  text-black text-strong"
                                                for="save-info">Pendidikan Terakhir</label>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Jenjang Pendidikan
                                                        Terakhir</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">S.Kom.,
                                                        S.Psi.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Program
                                                        Studi</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">Rekayasa Perangkat
                                                        Lunak</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="mb-2">
                                        <div class="row mb-1">
                                            <div class="col-3">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">Nama Institusi
                                                        Pendidikan</label>
                                                </div>
                                            </div>
                                            <div class="col-1">
                                                <div class="form-check custom-checkbox ">
                                                    <label class="form-check-label" for="save-info">:</label>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="form-check custom-checkbox ml-8 ">
                                                    <label class="form-check-label" for="save-info">SMKN 1
                                                        Purwosari</label>
                                                </div>
                                            </div>
                                        </div>


                                    </form>
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
