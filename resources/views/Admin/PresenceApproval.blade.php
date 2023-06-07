@include('PartialAdmin.SidebarNavbar')
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
				<!-- menunggu persetujuan -->
                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Approval Presensi</h4>
                            </div>
                            <div class="card-body">
								<div class="row">
									
							
								</div>
								
                                
                                <div class="table-responsive mb-4">
                                    <table id="example5" class="display" style="min-width: 845px">
										<thead class="text-center">
                                            <tr>
                                                <th>
													<div class="form-check custom-checkbox ">
														<input type="checkbox" class="form-check-input" id="checkAll" required="">
														<label class="form-check-label" for="checkAll"></label>
													</div>
												</th>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Waktu</th>
                                                <th>Lokasi</th>
                                                <th>IP</th>
                                                <th>Tipe</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
											<tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
														<label class="form-check-label" for="customCheckBox2"></label>
													</div>
												</td>
												<td>01</td>
												<td>Lisa</td>
												<td>26/02/2020, 12:42 AM</td>
												<td>Luar Kantor</td>
												<td>8547</td>
												<td>Presensi Masuk</td>
												<td>
													<span >
														<a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Terima"><i class="bi bi-person-check-fill text-success"></i> </a>
														<a href="javascript:void()" data-bs-toggle="tooltip"
															data-placement="top" title="Tolak"><i class="bi bi-person-x-fill text-danger"></i></a>
													</span>
												</td>												
											</tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
														<label class="form-check-label" for="customCheckBox3"></label>
													</div>
												</td>
                                                <td>02</td>
                                                <td>janna</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Luar Kantor</td>
                                                <td>1717</td>
                                                <td>Presensi Masuk</td>
                                                <td>
													<span >
														<a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Terima"><i class="bi bi-person-check-fill text-success"></i> </a>
														<a href="javascript:void()" data-bs-toggle="tooltip"
															data-placement="top" title="Tolak"><i class="bi bi-person-x-fill text-danger"></i></a>
													</span>
												</td>		
                                            </tr>
                                            <tr>
												<td>
													<div class="form-check custom-checkbox ms-2">
														<input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
														<label class="form-check-label" for="customCheckBox4"></label>
													</div>
												</td>
                                                <td>03</td>
                                                <td>Nanda</td>
                                                <td>26/02/2020, 12:42 AM</td>
                                                <td>Luar Kantor</td>
                                                <td>9898</td>
                                                <td>Presensi Masuk</td>
                                                <td>
													<span >
														<a href="javascript:void()" class="me-4" data-bs-toggle="tooltip"
															data-placement="top" title="Terima"><i class="bi bi-person-check-fill text-success"></i> </a>
														<a href="javascript:void()" data-bs-toggle="tooltip"
															data-placement="top" title="Tolak"><i class="bi bi-person-x-fill text-danger"></i></a>
													</span>
												</td>		
                                            </tr>
										
                                        </tbody>
                                    </table>
									
								</div>
                                <nav class="mt-3">
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
								<button type="button" class="btn btn-success btn-xs">Konfirmasi Data yang Dipilih   </button>
							<button type="button" class="btn btn-danger btn-xs">Tolak Data yang Dipilih   </button>
						
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
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->
</html>