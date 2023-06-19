@include('PartialAdmin.SidebarNavbar')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<style>
						a {
						  text-decoration: none;
						}
					</style>
						<div class="row">
							<div class="col-md-4" name="ellipsis-vertical-outline;">
								<a href="/SalarySummary">
									<div class="card progress-card">
									  <p>
										<div class="img_cont">
										  <center><img src="https://i.postimg.cc/tRKhxKnV/ringkasangaji.png" class="rounded-circle user_img" alt="width=30%" /></center>
										  <span class="online_icon"></span>
										</div>
										<div class="card-body d-flex; justify-content: center;">
										  <div class="me-auto">
											<center><h4 class="card-title">Ringkasan Gaji</h4></center>
										  </div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4"  >
								<a href="/SalaryPaymentReport">
									<div class="card progress-card">
									  <p>
										<div class="img_cont">
										  <center><img src="https://i.postimg.cc/XNRVjhkV/laporan2.png" class="rounded-circle user_img" alt="width=30%" /></center>
										  <span class="online_icon"></span>
										</div>
										<div class="card-body d-flex; justify-content: center;">
										  <div class="me-auto">
											<center><h4 class="card-title">Pembayaran Gaji</h4></center>
										  </div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-md-4"  >
								<a href="/SummaryofComponentSalary">
									<div class="card progress-card">
									  <p>
										<div class="img_cont">
										  <center><img src="https://i.postimg.cc/sxxGFJLS/komponen.png" class="rounded-circle user_img" alt="width=30%" /></center>
										  <span class="online_icon"></span>
										</div>
										<div class="card-body d-flex; justify-content: center;">
										  <div class="me-auto">
											<center><h4 class="card-title">Ringkasan Gaji Perkomponen</h4></center>
										  </div>
										</div>
									</div>
								</a>
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
	<div class="footer">

		<div class="copyright">
			<p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">Kalopsia</a> 2022</p>
		</div>
	</div>
    <!-- Required vendors -->
	<script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	<script src="vendor/nouislider/nouislider.min.js"></script>
	<script src="vendor/wnumb/wNumb.js"></script>

	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:53:06 GMT -->
</html>
