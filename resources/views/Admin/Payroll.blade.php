@include('PartialAdmin.SidebarNavbar')
<body>

    <style>
        .responsive-button {
          padding: 5px;
        }
      
        .search-area {
          padding: 5px;
        }
      </style>
 
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
.paging_simple_numbers.dataTables_paginate{
	background: transparent !important;
}
					</style>

					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pembayaran Gaji</h4>
                            </div>
                            
                            <div class="card-body">
								<div class="row">
									<div class="btn-group">
										<div class="col-xl-2">
											<input type="date" class="form-control btn-xs" >
										</div>
									</div>
								</div>
									<div class="table-responsive text-center">
										<table id="example8" class="display" style="min-width: 845px">
											<thead>
												<tr>
													
													<th>No</th>
													<th>Bulan</th>
													<th>Bank</th>
													<th>Jumlah Slip</th>
													<th>Total</th>

												</tr>
											</thead>
											<tbody>
												<tr>
													
													<td>1</td>
													<td>Mei</td>
													<td>BCA</td>
													<td>6</td>
													<td>5.876.000</td>

												</tr>
												<tr>
													
													<td>2</td>
													<td>Juni</td>
													<td>BRI</td>
													<td>4</td>
													<td>5.600.00</td>
													
												</tr>
												<tr>
													
													<td>3</td>
													<td>Juli</td>
													<td>BCA</td>
													<td>7</td>
													<td>5.750.000</td>

												</tr>
											
											</tbody>
										</table>
									</div>
                                
                        	</div>
                    </div>
					</div>

					<!-- <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pengumuman</h4>
                            </div>
                            
                            <div class="card-body">
                                  
                                <div class="table-responsive">
                                    <table id="example8" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Waktu</th>
                                                <th>Pengumuman</th>
                                                <th>Dibaca</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Amel</td>
                                                <td>Tiger Nixon</td>
                                                <td>
													<div class="row col-12">
													<div class="progress" style="background: rgba(127, 99, 244, .1)">
                                                        <div class="progress-bar" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
													<span class="badge badge-primary light">70%</span>
													</div>
												</td>								
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Momo</td>
												<td>Garrett Winters</td>
                                                <td>Dr. Cedric</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Lisa</td>
												<td>Ashton Cox</td>
                                                <td>Dr. Rhona</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> -->
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