@include('PartialAdmin.SidebarNavbar')


        <!--**********************************
            Content body start
        ***********************************-->
		<style>
			.card-cd {
  border: 1px solid #ccc;
  border-radius: 10px;
}
		</style>
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="padding-bottom: 20px;">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Slip Gaji</h4>
                            </div>
                            <div class="card-body">
                                
								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="firstName" class="form-label">Nama</label>
										<input type="text" class="form-control" id="tempatlahir" placeholder="Nama" value="" required="">
										<div class="invalid-feedback">
											Valid first name is required.
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label class="form-label">Periode</label>
										<select class="default-select form-control wide w-100">
											<option selected >Tetap(Gaji Bulanan, Mingguan, per Sekian Gaji)</option>
											<option value="1">Tetap(Gaji Bulanan, Mingguan, per Sekian Gaji)</option>
											<option value="2">Tidak Tetap(THR, Bonus Lebih Dari 1 Bulan)</option>
											
										</select>
										<div class="invalid-feedback">
											Please select a valid country.
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6 mb-3">
										<label for="firstName" class="form-label">Lama Periode</label>
										<input type="text" class="form-control" id="tempatlahir" placeholder="Lama Periode" value="" required="">
										<div class="invalid-feedback">
											Valid first name is required.
										</div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="firstName" class="form-label">Periode Dimulai</label>
										<input type="date" class="form-control" id="tempatlahir" placeholder="" value="" required="">
										<div class="invalid-feedback">
											Valid first name is required.
										</div>
									</div>
								</div>
								
								<div class="mb-3">
									<label for="address2"  class="form-label">Untuk komponen pendapatan tergantung kehadiran, berapa hari absensi terakhir yang masuk hitungan<span
											class="text-muted"></span></label>
									<input type="text" class="form-control" id="address2" placeholder="Masukkan jumlah hari (Masukkan sebelum akhir periode)">
								</div>
                            </div>
							
							<div class="card-header">
								<h4 class="card-title">Tambah Slip Gaji</h4>
							</div>
							<div class="container-fluid">
								<div class="row form-material">
									<div class="col-lg-6">
										<div class="card card-cd">
											<div class="card-header d-block">
												<h4 class="card-title" style="text-align: center;">Komponen Pendapatan</h4>
											</div>
											<div class="card-body ">
												<div class="d-flex  justify-content-start">
													<div class="bootstrap-badge">
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Gaji Pokok</a>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Uang Lembur</a>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Tunjangan Pulsa</a><br>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Tunjangan Komputer</a>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Tunjangan Transportasi</a>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Tunjangan Makan</a><br>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Pendapatan Berdasarkan Durasi Kerja</a>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Bonus Tunjangan</a>
														<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Tunjangan Lainnya</a>
													</div>
													<br>
												</div>
												<!-- <div class="card-footer mt-2" > -->
													<hr>
													<button type="button" class="btn btn-danger btn-xs"  data-bs-toggle="modal" data-bs-target=".modal-5"><i class="fa fa-plus color-info"></i>
														<span class="text-center">
														Tambah Komponen Pendapatan
														</span>
													</button>
												<!-- </div> -->
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card card-cd" >
											<div class="card-header d-block">
												<b><h4 class="card-title" style="text-align: center;">Komponen Pemotongan</h4></b>
											</div>
											<div class="card-body">
												<div class="bootstrap-badge">
													<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Potongan Ketidak Hadiran</a>
													<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Denda Keterlambatan</a>
													<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Koperasi</a><br>
													<a href="javascript:void(0)" class="badge badge-rounded badge-outline-dark" style="margin-right: 1%;margin-top: 1%;">Potongan Lainnya</a>
												</div>
												<br>
												<!-- <div class="card-footer mt-auto" > -->
												<hr>
												<button type="button" class="btn btn-danger btn-xs"  data-bs-toggle="modal" data-bs-target=".modal-6"><i class="fa fa-plus color-info"></i>
													<span class="text-center">
													Tambah Komponen Pemotongan
													</span>
												</button>
												<!-- </div> -->
											</div>
										</div>
									</div>
									<button class="btn btn-danger btn-sm btn-block"  type="submit" >Simpan</button>
								</div>
								
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="modal modal-5 fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Komponen Pendapatan</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<div class="row g-0">
									<h6 class="modal-title">Nama</h6><br>
									<div class="col">
										<input type="text" class="form-control btn-xs" placeholder="Nama">
									</div>
									
								</div>
								<br>
								<div class="row g-0">
									<!-- <label class="form-label">Periode</label> -->
									<h6 class="modal-title">Tipe Komponen</h6><br>
									<select class="default-select form-control wide w-100">
										<option selected >Manual</option>
										<option value="1">Manual</option>
										<option value="2">Berdasarkan Kehadiran</option>
										
									</select>
									<div class="invalid-feedback">
										Please select a valid country.
									</div>
								</div>
								<br>
								
							 </div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger light btn-xs" data-bs-dismiss="modal">Batal</button>
								<button type="button" class="btn btn-success btn-xs">Simpan</button>
							</div>
						</div>
					</div>
				 </div>

				 <div class="modal modal-6 fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Komponen Pendapatan</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<div class="row g-0">
									<h6 class="modal-title">Nama</h6><br>
									<div class="col">
										<input type="text" class="form-control btn-xs" placeholder="Nama">
									</div>
									
								</div>
								<br>
								<div class="row g-0">
									<!-- <label class="form-label">Periode</label> -->
									<h6 class="modal-title">Tipe Komponen</h6><br>
									<select class="default-select form-control wide w-100">
										<option selected >Manual</option>
										<option value="1">Manual</option>
										<option value="2">Berdasarkan Kehadiran</option>
										
									</select>
									<div class="invalid-feedback">
										Please select a valid country.
									</div>
								</div>
								<br>
								
							 </div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger light btn-xs" data-bs-dismiss="modal">Batal</button>
								<button type="button" class="btn btn-success btn-xs">Simpan</button>
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
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
    


    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="vendor/moment/moment.min.js"></script>
    <script src="vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="vendor/pickadate/picker.js"></script>
    <script src="vendor/pickadate/picker.time.js"></script>
    <script src="vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="js/plugins-init/pickadate-init.js"></script>

	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/form-pickers.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:32 GMT -->
</html>