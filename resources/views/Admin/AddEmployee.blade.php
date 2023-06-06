@include('PartialAdmin.SidebarNavbar')

        <div class="content-body">
            <div class="container-fluid">
				
				
				<div class="col-xl-12 ">
					<div class="row guttter-sm">
						<div class="col-xl-3">
							<div class="card" style="max-height: 250px;">
								<div class="card-body" >
									<div class="row">
									<!-- <div class="profile-statistics">
										<div class="text-center">
											<div class="row">
												<div class="col">
													<h3 class="m-b-0">150</h3><span>Follower</span>
												</div>
												<div class="col">
													<h3 class="m-b-0">140</h3><span>Place Stay</span>
												</div>
												<div class="col">
													<h3 class="m-b-0">45</h3><span>Reviews</span>
												</div>
											</div>
										</div>
									</div> -->
										<div class="profile-info" style="display: flex; justify-content: center;">
											<div class="profile-photo">
												<img src="images/profile/profile.png" class="img-fluid rounded-circle" style="width: 120px; height: 120px;" alt="">
											</div>
										</div>
										<div class="profile-statistics">
											<div class="input-group">
												<div class="form-file">
													<input type="file" class="form-file-input form-control">
												</div>
											</div>
                                            </div>
									</div>
								</div>
							</div>
						</div>
                        <div class="card col-xl-8">
                            <div class="card-body">
                                <div class="row">
									
                                    <!-- <div class="col-lg-4 order-lg-2 mb-4">
                                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                                            <span class="text-muted">Your cart</span>
                                            <span class="badge badge-primary badge-pill">3</span>
                                        </h4>
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Product name</h6>
                                                    <small class="text-muted">Brief description</small>
                                                </div>
                                                <span class="text-muted">$12</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Second product</h6>
                                                    <small class="text-muted">Brief description</small>
                                                </div>
                                                <span class="text-muted">$8</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                                <div>
                                                    <h6 class="my-0">Third item</h6>
                                                    <small class="text-muted">Brief description</small>
                                                </div>
                                                <span class="text-muted">$5</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between active">
                                                <div class="text-white">
                                                    <h6 class="my-0 text-white">Promo code</h6>
                                                    <small>EXAMPLECODE</small>
                                                </div>
                                                <span class="text-white">-$5</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <span>Total (USD)</span>
                                                <strong>$20</strong>
                                            </li>
                                        </ul>

                                        <form>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Promo code">
												<button type="submit" class="input-group-text">Redeem</button>
                                            </div>
                                        </form>
                                    </div> -->
                                    <div class="col-lg-12 order-lg-2 mb-4">
                                        <h4 class="mb-3">Informasi Pribadi</h4>
                                        <form class="needs-validation" novalidate="">

											<div class="mb-3">
                                                <label for="address"  class="form-label">Nama Lengkap</label>
                                                <input type="text" class="form-control" id="nama lengkap" placeholder="Nama Lengkap" required="">
                                                <div class="invalid-feedback">
                                                    Please enter your shipping address.
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="firstName" class="form-label">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="tempatlahir" placeholder="Tempat Lahir" value="" required="">
                                                    <div class="invalid-feedback">
                                                        Valid first name is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="lastName"  class="form-label">Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="lastName" placeholder="" value="" required="">
                                                    <div class="invalid-feedback">
                                                        Valid last name is required.
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
												<div class="col-md-6 mb-3">
													<label for="lastName"  class="form-label">Jenis Kelamin</label>
													<div class="form-check custom-radio mb-2">
														<input id="credit" name="paymentMethod" type="radio" class="" checked required>
														<label class="form-check-label" for="credit">Laki-Laki</label>
													</div>
													<div class="form-check custom-radio mb-2">
														<input id="debit" name="paymentMethod" type="radio" class="" required>
														<label class="form-check-label" for="debit">Perempuan</label>
													</div>
												</div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="firstName" class="form-label">Setatus Perkawinan</label>
                                                    <input type="text" class="form-control" id="Setatus" placeholder="Setatus Perkawinan" value="" required="">
                                                    <div class="invalid-feedback">
                                                        Valid first name is required.
                                                    </div>
                                                </div>
                                            </div>

											<div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="firstName" class="form-label">Golongan Darah</label>
                                                    <input type="text" class="form-control" id="Golongan Darah" placeholder="Tempat Lahir" value="" required="">
                                                    <div class="invalid-feedback">
                                                        Valid first name is required.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
													<label class="form-label">Agama</label>
													<select class="default-select form-control wide w-100">
														<option selected >Agama</option>
														<option value="1">Islam</option>
														<option value="2">Kristen</option>
														<option value="3">Buddha</option>
														<option value="4">Hindu</option>
														<option value="3">Konghucu</option>
													</select>
													<div class="invalid-feedback">
														Please select a valid country.
													</div>
												</div>
                                            </div><br>

											<h4 class="mb-3">Informasi Tambahan</h4>

											<div class="mb-3">
                                                <label for="email"  class="form-label">Email <span
                                                        class="text-muted">(Optional)</span></label>
                                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                                <div class="invalid-feedback">
                                                    Please enter a valid email address for shipping updates.
                                                </div>
                                            </div>

											<div class="mb-3">
                                                <label for="address"  class="form-label">No.HP</label>
                                                <input type="text" class="form-control" id="nama lengkap" placeholder="+62" required="">
                                                <div class="invalid-feedback">
                                                    Please enter your shipping address.
                                                </div>
                                            </div>

											<div class="mb-3">
                                                <label for="address"  class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="address" placeholder="Alamat Lengkap" required="">
                                                <div class="invalid-feedback">
                                                    Please enter your shipping address.
                                                </div>
                                            </div><br>

											<h4 class="mb-3">Pendidikan Terakhir</h4>

                                            <div class="mb-3">
                                                <label for="address2"  class="form-label">Pendidikan Terakhir <span
                                                        class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                            </div>

                                            <div class="mb-3">
                                                <label for="address2"  class="form-label">Nama Institusi Pendidikan<span
                                                        class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                            </div>

                                            <div class="mb-3">
                                                <label for="address2"  class="form-label">Program Studi<span
                                                        class="text-muted"></span></label>
                                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                            </div>

                                            <hr class="mb-4">
                                            <button class="btn btn-success btn-lg btn-block" type="submit">Simpan</button>
                                        </form>
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
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/ecom-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:53:29 GMT -->
</html>