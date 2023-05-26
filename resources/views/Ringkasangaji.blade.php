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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ringkasan Gaji</h4>
                    </div>
                    <div class="card-body">
                        <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-8 col-8 mb-2">
                                <div class="responsive-button">
                                    <button type="button" class="btn btn-outline-light btn-xs">
                                        05/2023 - 06/2023<span><i class="bi bi-calendar-check px-2"></i></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-4 me-auto">
                                <div class="responsive-button">
                                    <div class="basic-dropdown">
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-outline-light btn-xs dropdown-toggle"
                                                data-bs-toggle="dropdown"><span>
                                                    <i class="bi bi-arrow-bar-up px-1"></i>
                                                </span>
                                                Ekspor
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#"><span class="px-2"><i
                                                            class="bi bi-file-earmark-excel"></i></span>XCLS</a>
                                                <a class="dropdown-item" href="#"><span class="px-2"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-file-earmark-pdf" viewBox="0 0 16 16">
                                                            <path
                                                                d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                            <path
                                                                d="M4.603 14.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.697 19.697 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.188-.012.396-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.066.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.712 5.712 0 0 1-.911-.95 11.651 11.651 0 0 0-1.997.406 11.307 11.307 0 0 1-1.02 1.51c-.292.35-.609.656-.927.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.266.266 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.71 12.71 0 0 1 1.01-.193 11.744 11.744 0 0 1-.51-.858 20.801 20.801 0 0 1-.5 1.05zm2.446.45c.15.163.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.876 3.876 0 0 0-.612-.053zM8.078 7.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
                                                        </svg></span>PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example7" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Slip</th>
                                        <th>Gaji Pokok</th>
                                        <th>Total Tunjangan</th>
                                        <th>Total Potongan</th>
                                        <th>Take Home Pay</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mei 2023</td>
                                        <td>Gaji Bulanan</td>
                                        <td>24.736.474</td>
                                        <td>1.876.760</td>
                                        <td>2.434.678</td>
                                        <td>25.087.567</td>
                                    </tr>
                                    <tr>
                                        <td>Juni 2023</td>
                                        <td>Gaji Bulanan</td>
                                        <td>34.427.234</td>
                                        <td>500.000</td>
                                        <td>1.098.768</td>
                                        <td>34.767.988</td>
                                    </tr>
                                    <tr>
                                        <td>Juli</td>
                                        <td>Gaji Bulanan</td>
                                        <td>12.097.567</td>
                                        <td>1.876.435</td>
                                        <td>2.098.765</td>
                                        <td>24.764.198</td>
                                    </tr>
                                </tbody>
                            </table>
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
