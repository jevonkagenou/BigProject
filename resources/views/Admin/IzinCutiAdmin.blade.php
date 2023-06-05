@include('PartialAdmin.SidebarNavbar')


<div class="content-body">
    <div class="row page-titles">
        <ol class="breadcrumb" style="font-size: 15px;">
            <li class="px-1">
                <a href="javascript:void(0)">Laporan</a>
            </li>
            <li class="px-1"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="red"
                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path
                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                </svg>
            </li>
            <li class="">Ringkasan Gaji
            </li>
        </ol>
    </div>
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <!-- Cuti Khusus -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Izin & Cuti</h4>
                    </div>
                    <div class="card-body">
                        <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12 mb-3">
                                <div class="btn-group responsive-button">
                                    <button type="button" class="btn btn-outline-danger btn-xs">Cuti Khusus</button>
                                    <button type="button" class="btn btn-outline-light btn-xs">Sakit</button>
                                    <button type="button" class="btn btn-outline-light btn-xs">Izin</button>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-12">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Cari Disini...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Jumlah Hari</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bayu</td>
                                        <td>02 Januari 2023</td>
                                        <td>2</td>
                                        <td>Cuti Khusus</td>
                                        <td>5 Januari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nino</td>
                                        <td>03 Januari 2023</td>
                                        <td>1</td>
                                        <td>Cuti Khusus</td>
                                        <td>10 Januari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Anggi</td>
                                        <td>20 Februari 2023</td>
                                        <td>3</td>
                                        <td>Cuti Khusus</td>
                                        <td>22 Februari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sakit -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Izin & Cuti</h4>
                    </div>
                    <div class="card-body">
                        <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12 mb-3">
                                <div class="btn-group responsive-button">
                                    <button type="button" class="btn btn-outline-light btn-xs">Cuti Khusus</button>
                                    <button type="button" class="btn btn-outline-danger btn-xs">Sakit</button>
                                    <button type="button" class="btn btn-outline-light btn-xs">Izin</button>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-12">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Cari Disini...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example6" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Jumlah Hari</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bayu</td>
                                        <td>02 Januari 2023</td>
                                        <td>2</td>
                                        <td>Sakit</td>
                                        <td>5 Januari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nino</td>
                                        <td>03 Januari 2023</td>
                                        <td>1</td>
                                        <td>Sakit</td>
                                        <td>10 Januari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Anggi</td>
                                        <td>20 Februari 2023</td>
                                        <td>3</td>
                                        <td>Sakit</td>
                                        <td>22 Februari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Izin -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Izin & Cuti</h4>
                    </div>
                    <div class="card-body">
                        <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12 mb-3">
                                <div class="btn-group responsive-button">
                                    <button type="button" class="btn btn-outline-light btn-xs">Cuti Khusus</button>
                                    <button type="button" class="btn btn-outline-light btn-xs">Sakit</button>
                                    <button type="button" class="btn btn-outline-danger btn-xs">Izin</button>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-12">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Cari Disini...">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                                class="flaticon-381-search-2"></i></a></span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example7" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Jumlah Hari</th>
                                        <th>Jenis Cuti</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Bayu</td>
                                        <td>02 Januari 2023</td>
                                        <td>2</td>
                                        <td>Izin</td>
                                        <td>5 Januari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nino</td>
                                        <td>03 Januari 2023</td>
                                        <td>1</td>
                                        <td>Izin</td>
                                        <td>10 Januari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Anggi</td>
                                        <td>20 Februari 2023</td>
                                        <td>3</td>
                                        <td>Izin</td>
                                        <td>22 Februari 2023</td>
                                        <td>
                                            <span class="badge badge-success">Diterima
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
                    Content body end
                ***********************************-->

        <!--**********************************
                    Footer start
                ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>
                    Copyright © Designed &amp; Developed by
                    <a href="https://dexignlab.com/" target="_blank">DexignLab</a>
                    2022
                </p>
            </div>
        </div>
        <!--**********************************
                    Footer end
                ***********************************-->

        <!--**********************************
                   Support ticket button start
                ***********************************-->

        <!--**********************************
                   Support ticket button end
                ***********************************-->
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    @extends('PartialAdmin.footer')
    <!--**********************************
            Footer end
        ***********************************-->




</div>
<!--**********************************
        Main wrapper end
    ***********************************-->

<!--**********************************
        Scripts
    ***********************************-->
<!-- Required vendors -->
<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/moment/moment.min.js') }}"></script>

<script src="{{ asset('vendor/fullcalendar/js/main.min.js') }}"></script>
<script src="{{ asset('js/plugins-init/fullcalendar-init.js') }}"></script>
<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/dlabnav-init.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/styleSwitcher.js') }}"></script>
<script src="https://kit.fontawesome.com/399218ad26.js" crossorigin="anonymous"></script>


</body>


</html>
