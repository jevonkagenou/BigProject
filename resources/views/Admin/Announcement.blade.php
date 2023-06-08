@include('PartialAdmin.SidebarNavbar')
		
		
        <!--**********************************
            Header start
        ***********************************-->
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
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
                                <h4 class="card-title">Pengumuman</h4>
                            </div>
                            
                            <div class="card-body">
								<div class="row">
									<div class="btn-group ">
										<div class="" style="margin-right: 3%; ">
											<button type="button" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target=".modal-6"><i class="fa fa-plus color-info"></i>
												<span class="text-center px-1">
												Pengumuman
												</span>
											</button>
										</div>
										<div class="" style="margin-left: -2%;" >
											<input type="date" class="form-control btn-xm" >
										</div>
									</div>
								</div>
									<div class="table-responsive text-center">
										<table id="example8" class="display" style="min-width: 845px">
											<thead>
												<tr>
													
													<th>No</th>
													<th>Waktu</th>
													<th>Pengumuman</th>
													<th>Dibaca</th>
													<th>Aksi</th>
													
												</tr>
											</thead>
											<tbody>
												<tr>
													
													<td>1</td>
													<td>Amel</td>
													<td><a data-bs-toggle="modal" data-bs-target="#lihat-pengumuman" type="button">Cuti Idhul Fitri</a></td>
													<td>
														<div class="progress" role="progressbar" style="height: 15px !important;" aria-label="Danger example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar bg-danger" style="width: 80%">80%</div>
														  </div>
													</td>
													<td>
														<span>
															<a
														href="javascript:void()" data-bs-toggle="tooltip"
														data-placement="top" title="btn-close"><i
															class="fa fa-trash hover-icon"></i></a>
														</span>
													</td>
													
																						
												</tr>
												<tr>
													
													<td>2</td>
													<td>Momo</td>
													<td>Cuti Idhul Adha</td>
													<td>
														<div class="progress" role="progressbar" style="height: 15px !important;" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar bg-danger" style="width: 100%">100%</div>
														  </div>
													</td>
													<td>
														<span>
															<a
														href="javascript:void()" data-bs-toggle="tooltip"
														data-placement="top" title="btn-close"><i
															class="fa fa-trash hover-icon"></i></a>
														</span>
													</td>
													
													
												</tr>
												<tr>
													
													<td>3</td>
													<td>Lisa</td>
													<td>Acara</td>
													<td>
														<div class="progress" role="progressbar" style="height: 15px !important;" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
															<div class="progress-bar bg-danger" style="width: 100%">100%</div>
														  </div>
													</td>
													<td>
														<span >
															<a
														href="javascript:void()" data-bs-toggle="tooltip"
														data-placement="top" title="btn-close"><i
															class="fa fa-trash hover-icon"></i></a>
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

				{{-- modal tambah pengumuman --}}
				<div class="modal modal-6 fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah Pengumuman</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<div class="row g-0">
									<h6 class="modal-title">Isi Pengumuman</h6><br>
									<div class="col">
										<textarea class="form-control " id="editor" name="isi" cols="30"
                                        rows="10"></textarea>
									</div>
												
								</div>
								<br>
								<div class="row g-0">
									<h6 class="modal-title">Lampiran</h6><br>
									<div class="col">
										<input type="file" class="form-control btn-xs" value="Upload" placeholder="Nama"  multiple>
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

				 {{-- modal lihat pengumuman --}}
				 <div class="modal fade" id="lihat-pengumuman">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Cuti Idhul Fitri</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<div class="row g-0">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, odio, repellendus magnam culpa corrupti placeat cupiditate alias id assumenda, aspernatur ab corporis sunt! Earum sunt quibusdam perspiciatis eum culpa illum veritatis, labore animi, quos incidunt saepe? Inventore mollitia dolor quae?</p>
								</div>
								<div class="row g-0">
									{{-- <h6 class="modal-title">Lampiran</h6><br> --}}
									<a href="" target="_blank">Lampiran</a>
												
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
	</div>
	@extends('PartialAdmin.footer')
        <!--**********************************
            Content body end
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

	{{-- text editor --}}
	<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->
</html>