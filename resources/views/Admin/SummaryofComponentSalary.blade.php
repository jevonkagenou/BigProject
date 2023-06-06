@include('PartialAdmin.SidebarNavbar')

        <div class="content-body">
            <div class="container-fluid">
				
				
                <!-- row -->

			
				
				<!-- ringkasan gaji perkomponen -->
				<div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ringkasan Gaji Perkomponen</h4>
                            </div>
                            <div class="card-body">
								<div class="row">
									<div class="btn-xs ms-auto text-end">                                
										<div class="responsive-button">
											<button type="button" class="btn btn-outline-light btn-xs">05/2022 - 05/2023<i class="bi bi-calendar-check px-2"></i></button>
											<button type="button" class="btn btn-outline-light btn-xs" ><i class="bi bi-arrow-bar-up px-2"></i>Ekspor<i class="bi bi-chevron-down px-2"></i> </button>
											
										</div>
									</div>
							
								</div>
								
								
                                
                                <div class="table-responsive text-center">
                                    <table id="example7" class="display" style="min-width: 845px">
										<thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Bulan</th>
                                                <th>Slip</th>
                                                <th>Gaji Pokok</th>
                                                <th>Tunjangan Transportasi</th>
                                                <th>Tunjangan Pulsa</th>
												<th>Potongan Lainnya</th>
												<th>Denda Keterlambatan</th>
												<th>Total Tunjagan</th>
												<th>Total Potongan</th>
												<th>Take Home Pay</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Mei 2023</td>
                                                <td>Gaji Bulanan</td>
                                                <td>24.089.500</td>
                                                <td>5.876.456</td>
                                                <td>2.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												
                                                												
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Juni 2023</td>
                                                <td>Gaji Bulanan</td>
                                                <td>24.089.500</td>
                                                <td>5.876.456</td>
                                                <td>2.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												
                                                												
                                            </tr>
											<tr>
                                                <td>03</td>
                                                <td>Juli 2023</td>
                                                <td>Gaji Bulanan</td>
                                                <td>24.089.500</td>
                                                <td>5.876.456</td>
                                                <td>2.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												<td>20.765.437</td>
												
                                                												
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
								
                            </div>
                        </div>
						
                    </div>
					
                    
                    
				</div>

				
            </div>

            @extends('PartialAdmin.footer')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
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

<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->
</html>