@include('PartialAdmin.SidebarNavbar')
<style>
.paging_simple_numbers.dataTables_paginate{
    background: transparent !important;
}
</style>

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
                                <div class="mb-2 row g-0 d-flex">
                                    <div class="col-sm-2 col-md-4 col-lg-10 justify-content-start">
                                        <a href='/AddEmployee' class="btn btn-danger btn-xs " ><i class="bi bi-plus-square"></i> Tambahkan Karyawan</a>

                                    </div>
                                    <div class="col-sm-1 col-md-2 col-lg-1 text-end"  style="white-space: nowrap;">
                                        <div class="basic-dropdown">
                                            <button class="btn btn-outline-light btn-xs" data-bs-toggle="dropdown"><i class="bi bi-download"></i> Export</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">CSV</a>
                                                <a class="dropdown-item" href="#">XLSX</a>

                                            </div>

                                    </div>

                                    </div>
                                    <div class="col-sm-1 col-md-2 col-lg-1 text-end">
                                        <button class="btn btn-outline-light btn-xs ms-1" style="white-space: nowrap;"><i class="bi bi-upload"></i> Import</button>

                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 mt-2">
                                    <div class="input-group responsive-button search-area rounded-4 border border-light" style="border-radius: 12px;">
                                      <input type="text" class="form-control" placeholder="Cari Disini...">
                                      <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                    </div>
                                  </div>
                            <div class="table-responsive text-center mt-3">
                                <table id="example7" class="display" style="min-width: 845px">
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
                            <br>
                            <nav>
                                <ul class="pagination pagination-xs" style="float: right">
                                  <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                      <i
                                        class="fa fa-angle-double-left"
                                        aria-hidden="true"
                                      ></i
                                    ></a>
                                  </li>
                                  <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">1</a>
                                  </li>
                                  <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2</a>
                                  </li>
              
                                  <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                      <i
                                        class="fa fa-angle-double-right"
                                        aria-hidden="true"
                                      ></i
                                    ></a>
                                  </li>
                                </ul>
                              </nav>
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

    <script src="{{asset ('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Apex Chart -->
    <script src="{{asset ('vendor/apexchart/apexchart.js') }}"></script>

    <!-- Datatable -->
    <script src="{{asset ('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset ('js/plugins-init/datatables.init.js') }}"></script>
</body>


</html>
