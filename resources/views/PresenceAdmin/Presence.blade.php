@include('PartialAdmin.SidebarNavbar')


<div class="content-body">
  <div class="container-fluid">
    <!-- row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                       Presensi
                    </h4>
                </div>
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 mt-2">
                            <div class="button-container">
                                <a href="ui-tab.html" class="btn btn-outline-primary btn-xs">Atur Kebijakan Presensi</a>
                            </div>
                            
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mt-2">
                            <div class="button-group">
                                <button type="button" class="btn btn-outline-light custom-btn btn-xs">
                                    05/05/2023<span style="margin-left: 10px;"><i class="bi bi-calendar-check"></i></span>
                                </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4 col-md-6 col-sm-12 mt-2">
                          <div class="input-group responsive-button search-area">
                            <input type="text" class="form-control" placeholder="Cari Disini...">
                            <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                          </div>
                        </div>
                      </div>
                      
                    <div class="table-responsive mt-3" >
                        <table id="example7" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Shift</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Masuk</th>
                                    <th class="text-center">Keluar</th>
                                    <th class="text-center">Masuk Lembur</th>
                                    <th class="text-center">Keluar Lembur</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-center">Tina</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle btn-xs" data-bs-toggle="dropdown">Jam Kantor</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void()">Shift Pagi</a>
                                            <a class="dropdown-item" href="javascript:void()">Jam Kantor</a>
                                        </div>
                                    </div></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-warning dropdown-toggle btn-xs text-start" data-bs-toggle="dropdown">Belum ada status</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void()">Belum ada status</a>
                                            <a class="dropdown-item" href="javascript:void()">Sudah Presensi</a>
                                        </div>
                                    </div></td>
                                    <td class="text-center">00.00 <span class="px-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                        </span>
                                    </td>
                                    <td class="text-center">00.00
                                        <span class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg>
                                            </span>
                                    </td>
                                    <td class="text-center">00.00
                                        <span class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg>
                                            </span>
                                    </td>
                                    <td class="text-center">00.00
                                        <span class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg>
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-center">Jihan</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-bs-toggle="dropdown">Shift Pagi</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void()">Shift Pagi</a>
                                            <a class="dropdown-item" href="javascript:void()">Jam Kantor</a>
                                        </div>
                                    </div></td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-bs-toggle="dropdown">Sudah Presensi</button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
                                            <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
                                        </div>
                                    </div></td>
                                    <td class="text-center">00.00
                                        <span class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg>
                                            </span>
                                    </td>
                                    <td class="text-center">00.00
                                        <span class="px-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg>
                                            </span>
                                    </td>
                                    <td class="text-center">00.00
                                        <span class="px-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                        </span>
                                    </td>
                                    <td class="text-center">00.00
                                        <span class="px-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                            <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                          </svg>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

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
