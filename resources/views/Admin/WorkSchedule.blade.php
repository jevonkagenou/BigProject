@include('PartialAdmin.SidebarNavbar')


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
            .hover-icon:hover{
                color: #f72b50 !important;
            }
            .paging_simple_numbers.dataTables_paginate{
                background: transparent !important;
            }
            </style>

        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Profile Datatable</h4>
            </div>
            <div class="card-body">
                <!-- <button id="actionButton" style="display: none;">Tombol</button> -->
                <div class="" style="margin-right: 3%; ">
                    <button type="button" class="btn btn-danger btn-xs" id="actionButton" style="display: none;" data-bs-toggle="modal" data-bs-target=".modal-6">
                        <span class="text-center px-1">
                        Ubah Jadwal
                        </span>
                    </button>
                </div>
            <div class="table-responsive">
                <table id="example5" class="display" style="min-width: 845px">
                <thead>
                    <tr>
                    <th>
                        <div class="form-check custom-checkbox ms-2 ">
                            <input type="checkbox" class="form-check-input" id="checkAll" required="">
                            <label class="form-check-label" for="checkAll"></label>
                        </div>
                    </th>
                    <th>Name</th>
                    <th>Jabatan</th>
                    <th>Jadwal</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="form-check custom-checkbox ms-2">
                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                <label class="form-check-label" for="customCheckBox2"></label>
                            </div>
                        </td>
                        <td>Tiger Nixon</td>
                        <td>Architect</td>
                        <td>Male</td>
                        <td>
                            <div class="d-flex">
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp me-1"
                                ><i class="fas fa-pencil-alt"></i
                            ></a>
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp"
                                ><i class="fa fa-trash"></i
                            ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check custom-checkbox ms-2">
                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                <label class="form-check-label" for="customCheckBox2"></label>
                            </div>
                        </td>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Female</td>
                        <td>
                            <div class="d-flex">
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp me-1"
                                ><i class="fas fa-pencil-alt"></i
                            ></a>
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp"
                                ><i class="fa fa-trash"></i
                            ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check custom-checkbox ms-2">
                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                <label class="form-check-label" for="customCheckBox2"></label>
                            </div>
                        </td>
                        <td>Ashton Cox</td>
                        <td>Junior Technical</td>
                        <td>Male</td>
                        <td>
                            <div class="d-flex">
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp me-1"
                                ><i class="fas fa-pencil-alt"></i
                            ></a>
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp"
                                ><i class="fa fa-trash"></i
                            ></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check custom-checkbox ms-2">
                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                <label class="form-check-label" for="customCheckBox2"></label>
                            </div>
                        </td>
                        <td>Cedric Kelly</td>
                        <td>Developer</td>
                        <td>Male</td>
                        <td>
                            <div class="d-flex">
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp me-1"
                                ><i class="fas fa-pencil-alt"></i
                            ></a>
                            <a
                                href="#"
                                class="btn btn-danger shadow btn-xs sharp"
                                ><i class="fa fa-trash"></i
                            ></a>
                            </div>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
        </div>

        {{-- modal ubah jadwal --}}
        <div class="modal modal-6 fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah Jadwal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-0">
                            <h6 class="modal-title">Ubah Jadwal Karyawan dengan Jadwal Kerja sbb</h6><br>
                            <select  id="jadwalSelect" class="default-select form-control wide w-100">
                                <option selected >Pilih Jadwal</option>
                                <option value="1">Shift Pagi</option>
                                <option value="2">Shift Malam</option>
                                <hr>
                                <option value="3" data-url="/WorkSchedule">Tambah Jadwal</option>									</select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <br>

                        <br>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-xs" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-danger btn-xs">Simpan</button>
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





    <!--**********************************
        Main wrapper end
    ***********************************-->

     <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<script>
    document.addEventListener("DOMContentLoaded", function() {
    var checkboxes = document.querySelectorAll("input[type=checkbox]");
    var button = document.getElementById("actionButton");

    checkboxes.forEach(function(checkbox) {
      checkbox.addEventListener('change', function() {
        var checkedCheckboxes = document.querySelectorAll("input[type=checkbox]:checked");

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
  document.addEventListener("DOMContentLoaded", function() {
    var selectElement = document.getElementById("jadwalSelect");

    selectElement.addEventListener('change', function() {
      var selectedOption = selectElement.options[selectElement.selectedIndex];
      var url = selectedOption.getAttribute('data-url');

      if (url) {
        window.location.href = url;
      }
    });
  });
</script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->
</html>

