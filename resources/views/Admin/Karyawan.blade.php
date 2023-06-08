@include('PartialAdmin.SidebarNavbar')

        <div class="content-body">
            <div class="container-fluid">

                <div class="row page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="">Karyawan</a></li>

                    </ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Karyawan</h4>
                            </div>
                            <div class="card-body">
                                <div class="mb-2 row g-0 d-flex justify-content-end">
                                    <div class="col-sm-2 col-md-4 col-lg-3">
                                        <button class="btn btn-danger btn-sm " ><i class="bi bi-plus-square"></i> Tambahkan Karyawan</button>

                                    </div>
                                    <div class="col-sm-1 col-md-2 col-lg-2 me-1"  style="white-space: nowrap;">
                                        <div class="basic-dropdown">
                                            <button class="btn btn-outline-light btn-sm ms-1" data-bs-toggle="dropdown"><i class="bi bi-download"></i> Export</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">CSV</a>
                                                <a class="dropdown-item" href="#">XLSX</a>

                                            </div>

                                    </div>

                                    </div>
                                    <div class="col-sm-1 col-md-2 col-lg-1">
                                        <button class="btn btn-outline-light btn-sm ms-1" style="white-space: nowrap;"><i class="bi bi-upload"></i> Import</button>

                                    </div>

                                </div>

                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Status Perkawinan</th>
                                            <th>Agama</th>
                                            <th>Pendidikan Terakhir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bayu</td>
                                            <td>Laki-Laki</td>
                                            <td>Malang</td>
                                            <td>25 Agustus 2000</td>
                                            <td>Belum Menikah</td>
                                            <td>Islam</td>
                                            <td>S1</td>
                                        </tr>
                                        <tr>
                                            <td>Bayu</td>
                                            <td>Laki-Laki</td>
                                            <td>Malang</td>
                                            <td>25 Agustus 2000</td>
                                            <td>Belum Menikah</td>
                                            <td>Islam</td>
                                            <td>S1</td>
                                        </tr>
                                        <tr>
                                            <td>Bayu</td>
                                            <td>Laki-Laki</td>
                                            <td>Malang</td>
                                            <td>25 Agustus 2000</td>
                                            <td>Belum Menikah</td>
                                            <td>Islam</td>
                                            <td>S1</td>
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
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->

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
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
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
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->

</html>
