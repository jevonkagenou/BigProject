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
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/P55dtZjM/Logo-A-1.png" />
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    {{-- Toaster --}}\
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
        </div>
    </div>
    <style>
        .hover-red:hover {
            color: #EE3232 !important;
            fill: red !important;
        }

        .red-icon path {
            fill: red;
        }

        .dlabnav .metismenu a {
            color: #9FA4A6;
        }

        [data-sidebar-style="full"] [data-layout=":vertical"] .dlabnav .metismenu {
            padding: 0 30px !important;
        }

        .brand-logo img {
            max-width: 80%;
            height: auto;
        }
    </style>

    <div id="main-wrapper">
        @include('layout.header')
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Jadwal Kerja
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" style="margin-left:-100%;">
                                    <li><a class="dropdown-item" href="/ProfilAdmin"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#969ba0" viewBox="0 0 448 512" style="margin-left: 10px; margin-bottom: 5px; padding-right:5px">
                                                <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                            </svg> Profil</a></li>
                                    <li><a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#969ba0" viewBox="0 0 512 512" style="margin-left: 10px; margin-bottom: 7px; padding-right:5px">
                                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                            </svg> Keluar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @include('layout.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <style>
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

            .hover-red:hover {
                color: #EE3232 !important;
                border-color: #EE3232 !important;
            }
        </Style>

        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">

                    <style>
                        .custom-btn {
                            border-radius: 1;
                            height: 40px;
                            padding: 12px 8px;
                            background: #fff;
                            border: 1px solid #464444;
                            text-align: center;
                        }

                        .hover-icon:hover {
                            color: #f72b50 !important;
                        }

                        .paging_simple_numbers.dataTables_paginate {
                            background: transparent !important;
                        }
                    </style>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Jadwal Kerja</h4>
                                <button type="button" class="btn btn-danger btn-xs text-end" data-bs-toggle="modal" data-bs-target="#lihat-kebijakan">Atur Kebijakan Cuti</button>
                                <div class="modal fade" id="lihat-kebijakan">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Cuti Tahunan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-0">
                                                    <label for="tanggal">Pilih Tanggal:</label>
                                                    <select id="tom-select-it">
                                                        <option value="1">1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!-- <button id="actionButton" style="display: none;">Tombol</button> -->
                                <div style="margin-right: 3%; ">
                                    <button type="button" class="btn btn-danger btn-xs" id="actionButton" style="display: none;" data-bs-toggle="modal" data-bs-target=".modal-6">
                                        <span class="text-center px-1">
                                            Ubah Jadwal
                                        </span>
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    {{-- <form action="{{ route('WorkSchedule') }}" method="post" style="margin-top: 10px" id="form"> --}}
                                    <table id="example7" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check custom-checkbox ms-2">
                                                        <input type="checkbox" id="select-all-checkbox" class="form-check-input" style="color: #f84062;"> <label class="form-check-label" for="selectall"></label>
                                                    </div>
                                                </th>
                                                <th>Nama</th>
                                                <th>Nama Jadwal</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $row)
                                            <tr>

                                                <td>
                                                    <div class="form-check custom-checkbox ms-2">
                                                        <input type="checkbox" name="myCheckbox[]" id="select-all-btn" value="{{ $row->id }}" class="other-checkbox form-check-input" style="color: #f84062;">
                                                        <label class="form-check-label" for="customCheckBox2"></label>
                                                    </div>
                                                </td>
                                                <td>{{ $row->nama }}</td>
                                                <td>{{ $row->nama_jadwal }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-danger shadow btn-xs sharp me-1" data-bs-toggle="modal" data-bs-target=".modal{{ $row->id }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>


                                                        {{-- <a href="/deleteWorkSchedule/{{ $row->id }}" class="btn btn-danger shadow btn-xs sharp">
                                                        <i class="fa fa-trash"></i>
                                                        </a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                            {{-- modal update jadwal kerja --}}
                                            <div class="modal modal{{ $row->id }} fade" id="updatejadwalkerja">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Jadwal Kerja</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="editForm" action="/updatejadwalkerja/{{ $row->id }}" method="POST">
                                                                @csrf
                                                                <div class="row g-0">
                                                                    <label for="nama_jadwal" class="form-label">Nama</label>
                                                                    <div class="col">
                                                                        <input type="text" id="nama" name="nama" class="form-control btn-xs" value="{{ $row->nama }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row g-0">
                                                                    <label for="nama_jadwal" class="form-label">Nama Jadwal</label>
                                                                    <div class="col">
                                                                        <select id="tom-select-it" name="nama_jadwal" value="{{ $row->nama_jadwal }}" class="default-select form-control wide w-100">
                                                                            <option value="shift pagi" {{ $row->nama_jadwal == 'shift pagi' ? 'selected' : '' }}>
                                                                                Shift Pagi</option>
                                                                            <option value="Shift Malam" {{ $row->nama_jadwal == 'Shift Malam' ? 'selected' : '' }}>
                                                                                Shift Malam</option>
                                                                            <option value="3" data-url="/AddWorkSchedule">Tambah
                                                                                Jadwal</option>
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <br>
                                                                <button class="btn btn-danger btn-xs" type="submit" style="width: 100%;">
                                                                    <span style="display: inline-block; vertical-align: middle;">Simpan</span>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- modal ubah jadwal --}}
        @foreach ($data as $row)
        <div class="modal modal-6 fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Jadwal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editFormSchedule" action="/updatejadwal" method="POST">
                            @csrf
                            <input type="hidden" id="id-schedule" name="id_schedule">
                            <div class="row g-0">
                                <h6 class="modal-title">Ubah Jadwal Karyawan dengan Jadwal Kerja sbib</h6><br>
                                <select id="tom-select-it" name="nama_jadwal" class="default-select form-control wide w-100">
                                    <option value="">Pilih Jadwal</option>
                                    <option value="Shift Pagi">Shift Pagi</option>
                                    <option value="Shift Malam">Shift Malam</option>
                                    <option value="3" data-url="/AddWorkSchedule">Tambah Jadwal</option>
                                </select>
                                <div class="invalid-feedback">
                                    Silakan pilih jadwal yang valid.
                                </div>
                            </div>

                            <br>

                            <br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-xs" data-bs-dismiss="modal">Batal</button>
                        <button type="button" id="btn-simpan" class="btn btn-danger btn-xs">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach





    </div>
    </div>
    </div>
    <div class="footer">

        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">Kalopsia</a>
                2022</p>
        </div>
    </div>
    <!-- Required vendors -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <script src="/js/tom-select.complete.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var settings = {};
        new TomSelect('#tom-select-it', settings);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var checkboxes = document.querySelectorAll("input[type=checkbox]");
            var button = document.getElementById("actionButton");



            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    var checkedCheckboxes = document.querySelectorAll(
                        "input[type='checkbox']:checked");
                    if (checkedCheckboxes.length > 0) {
                        button.style.display = "block";
                    } else {
                        button.style.display = "none";
                    }
                });
            });
        });
    </script>


    <script>
        let id = [];

        $('#btn-simpan').click(function() {
            $('#id-schedule').val(id);
            console.log(id);
            $('#editFormSchedule').submit();
        });

        // Ambil elemen-elemen yang diperlukan
        const checkboxes = document.querySelectorAll('.other-checkbox');
        const selectAllCheckbox = document.querySelector('#select-all-checkbox');
        const hiddenMenu = document.querySelector('.hidden-menu');
        const countDisplay = document.querySelector('#count-display');

        // Function to count the number of checked checkboxes
        function countCheckedCheckboxes() {
            const checkedCheckboxes = document.querySelectorAll('.other-checkbox:checked');
            return checkedCheckboxes.length;
        }

        // Function to update the count display
        function updateCountDisplay() {
            const totalCount = countCheckedCheckboxes();
            countDisplay.textContent = totalCount + ' Item Yang dipilih : ';
        }

        // Function to check if all checkboxes are checked
        function areAllCheckboxesChecked() {
            const uncheckedCheckboxes = document.querySelectorAll('.other-checkbox:not(:checked)');
            return uncheckedCheckboxes.length === 0;
        }

        // Add event listener to each checkbox
        checkboxes.forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    if (!id.includes(checkbox.value)) {
                        id.push(checkbox.value);
                    }
                    hiddenMenu.style.display = 'block'; // Show the hidden menu
                } else {
                    const index = id.indexOf(checkbox.value);
                    if (index > -1) {
                        id.splice(index, 1);
                    }
                    const checkedCount = countCheckedCheckboxes();
                    if (checkedCount === 0) {
                        hiddenMenu.style.display = 'none'; // Hide the hidden menu if no checkboxes are checked
                    }
                }

                if (areAllCheckboxesChecked()) {
                    selectAllCheckbox.checked = true; // Check the "Select All" checkbox if all checkboxes are checked
                } else {
                    selectAllCheckbox.checked = false; // Uncheck the "Select All" checkbox if not all checkboxes are checked
                }

                updateCountDisplay(); // Update the count display
            });
        });

        // Add event listener to the "Select All" checkbox
        selectAllCheckbox.addEventListener('change', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = selectAllCheckbox.checked;
                if (checkbox.checked) {
                    const checkboxValue = checkbox.value;
                    if (!id.includes(checkboxValue)) {
                        id.push(checkboxValue);
                    }
                } else {
                    const checkboxValue = checkbox.value;
                    const index = id.indexOf(checkboxValue);
                    if (index > -1) {
                        id.splice(index, 1);
                    }
                }
            });

            if (this.checked) {
                hiddenMenu.style.display = 'block'; // Show the hidden menu
            } else {
                hiddenMenu.style.display = 'none'; // Hide the hidden menu
            }

            updateCountDisplay(); // Update the count display
        });
    </script>


    <script>
        $(document).ready(function() {
            // Fungsi untuk menangani pengiriman form update jadwal
            $('#formUpdateJadwal').on('submit', function(e) {
                e.preventDefault();
                var form = $(this);
                var url = form.attr('action');
                var data = form.serialize();

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: data,
                    success: function(response) {
                        alert(response.message);
                        window.location.reload();
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan: ' + xhr.responseText);
                    }
                });
            });

            $('#btnDiterima').on('click', function() {
                var checkedIds = $('input[name="myCheckbox[]"]:checked').map(function() {
                    return $(this).val();
                }).get();

                if (checkedIds.length > 0) {
                    var url = '{{ route('
                    updatejadwal ', ['
                    id ' => ': id ']) }}'.replace(':id', checkedIds[0]);

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            myCheckbox: checkedIds
                        },
                        success: function(response) {
                            alert(response.message);
                            window.location.reload();
                        },
                        error: function(xhr) {
                            alert('Terjadi kesalahan: ' + xhr.responseText);
                        }
                    });
                } else {
                    alert('Tidak ada postingan yang dipilih');
                }
            });
        });
    </script>





    @if (Session::has('success'))
    <script>
        toastr.options = {
            "timeOut": 5000, // Set timeOut to 0 to make it sticky
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    </script>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</head>
<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->

</html>
