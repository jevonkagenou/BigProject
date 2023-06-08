@include('PartialAdmin.SidebarNavbar')\

    <style>
       .btn-check:checked+.btn-outline-danger,
        .btn-
        e+.btn-outline-danger,
        .btn-outline-danger:active,
        .btn-outline-danger.active,
        .btn-outline-danger.dropdown-toggle.show {
            color: white !important;
        }
    </style>

        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Validasi Presensi</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <div class="default-tab">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" style="color: #f72b50;" href="#presensi">Presensi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" style="color: #f72b50;" href="#lembur">Lembur</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="lembur" role="tabpanel">
                                            <div class="pt-4">
                                                <h6>Apakah selalu diperlukan approval saat lembur?</h6>
                                                <div class="btn-group white-color" role="group" aria-label="Basic radio toggle button group">
													<input type="radio" class="btn-check" name="btnradio1a" id="btnradio1" checked>
													<label class="btn btn-outline-danger btn-xs" for="btnradio1">Ya</label>

													<input type="radio" class="btn-check" name="btnradio1a" id="btnradio2">
													<label class="btn btn-outline-danger btn-xs" for="btnradio2">Tidak</label>
												</div>
												<h6>Apakah karyawan harus lembur dari dalam radius GPS yang ditentukan ?</h6>
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
													<input type="radio" class="btn-check" name="btnradio2a" id="btnradio3" checked>
													<label class="btn btn-outline-danger btn-xs" for="btnradio3">Ya</label>

													<input type="radio" class="btn-check" name="btnradio2a" id="btnradio4">
													<label class="btn btn-outline-danger btn-xs" for="btnradio4">Tidak</label>
												</div>
												<h6>Apakah karyawan harus lembur dari dalam radius GPS yang ditentukan ?</h6>
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
													<input type="radio" class="btn-check" name="btnradio3a" id="btnradio5" checked>
													<label class="btn btn-outline-danger btn-xs" for="btnradio5">Ya</label>

													<input type="radio" class="btn-check" name="btnradio3a" id="btnradio6">
													<label class="btn btn-outline-danger btn-xs" for="btnradio6">Tidak</label>
												</div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="presensi">
                                            <div class="pt-4">
                                                <h6>Apakah selalu diperlukan approval saat presensi ?</h6>
												<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
													<input type="radio" class="btn-check" name="btnradio1b" id="btnradio7" checked>
													<label class="btn btn-outline-danger btn-xs" for="btnradio7">Ya</label>

													<input type="radio" class="btn-check" name="btnradio1b" id="btnradio8">
													<label class="btn btn-outline-danger btn-xs" for="btnradio8">Tidak</label>
												</div>
												<h6>Apakah karyawan harus presensi dari dalam radius GPS yang ditentukan?</h6>
                                                 <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
													<input type="radio" class="btn-check" name="btnradio2b" id="btnradio9" checked>
													<label class="btn btn-outline-danger btn-xs" for="btnradio9">Ya</label>

													<input type="radio" class="btn-check" name="btnradio2b" id="btnradio10">
													<label class="btn btn-outline-danger btn-xs" for="btnradio10">Tidak</label>
												</div>
												<h6>Apakah diperlukan approval untuk presensi di luar radius GPS ?</h6>
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
													<input type="radio" class="btn-check" name="btnradio3b" id="btnradio11" checked>
													<label class="btn btn-outline-danger btn-xs" for="btnradio11">Ya</label>

													<input type="radio" class="btn-check" name="btnradio3b" id="btnradio12">
													<label class="btn btn-outline-danger btn-xs" for="btnradio12">Tidak</label>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2022</p>
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
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/ui-tab.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:53:42 GMT -->
</html>
