@include('PartialAdmin.SidebarNavbar')
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
				<!-- payroll slip gaji -->
				<div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slip Gaji</h4>
                            </div>
                            <div class="card-body">
								<div class="row">
									<div class="col-xl-6 col-lg-8 col-md-7 col-sm-1  btn-group btn-xs">                                
										<div class="btn-group btn-xs">
                                            <div class="size-filter">
                                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                                    <label class="btn btn-xs btn-outline-danger" for="btnradio1">Slip Gaji</label>

                                                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                                    <label class="btn btn-xs btn-outline-danger" for="btnradio2">Tambah Rekening</label>
                                                </div>
                                            </div>
                                        </div>
									</div>
									<div class="col-xl-6 col-lg-4 col-md-5 col-sm-3 mt-8 btn-xs text-end">                                
										<div class="responsive-button">
											<button type="button" class="btn btn-danger btn-xs"><i class="bi bi-plus me-1"></i>Tambah Slip Gaji</button>
											<button type="button" class="btn btn-outline-light btn-xs" ><i class="bi bi-download me-2"></i>Print </button>
											
										</div>
									</div>
								</div>
                                <div class="table-responsive mb-4">
                                    <table id="example5" class="display" style="min-width: 845px">
										<thead>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Periode</th>
                                                <th>Lama Periode</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-center">
                                                <td>01</td>
                                                <td>Gaji Bulanan</td>
                                                <td>Tetap</td>
                                                <td>1 Bulan</td>											
                                            </tr>
                                            <tr class="text-center">
                                                <td>02</td>
                                                <td>Gaji Bulanan</td>
                                                <td>Tetap</td>
                                                <td>2 Bulan</td>
                                            </tr>
                                            <tr class="text-center">
                                                <td>03</td>
                                                <td>Gaji Bulanan</td>
                                                <td>Tetap</td>
                                                <td>3 Bulan</td>		
                                            </tr>
										
                                        </tbody>
                                    </table>
									
								</div>
								<nav>
										
									<ul class="pagination pagination-xs" style="float: right;">
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
										</li>
										<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
										</li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										
										<li class="page-item page-indicator">
											<a class="page-link" href="javascript:void(0)">
												<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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