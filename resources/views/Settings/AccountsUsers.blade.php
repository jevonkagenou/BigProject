@include('PartialAdmin.SidebarNavbar')

<div class="content-body">
    <div class="container-fluid">
        
        
        <div class="col-xl-12 ">
            <div class="row guttter-sm">
                <div class="col-xl-4">
                    <div class="card" style="max-height: 300px;">
                        <div class="card-body" >
                            <div class="row">
                                <div class="profile-info" style="display: flex; justify-content: center;">
                                    <div class="profile-photo">
                                        <img src="images/profile/profile.png" class="img-fluid rounded-circle" style="width: 120px; height: 120px;" alt="">
                                    </div>
                                </div>
                                <h4 style="text-align: center;" >Bapak Joko Widodo</h4>
                                <p class="mb-0" style="text-align: center;" >jokowidodo1@gmail.com</p>
                            </div>
                            <div class="text-center mt-3">
                                <span class="badge bg-primary">Admin</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 order-lg-2">
                                <h4 class="mb-3">Edit Profile</h4>
                                <hr>
                                <form class="needs-validation" novalidate="">

                                    <div class="mb-3">
                                        <label for="address"  class="form-label">Email</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" required="">
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="firstName" class="form-label">Nama Admin</label>
                                            <input type="text" class="form-control" id="namaadmin" placeholder="Nama Lengkap" value="" required="">
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastName"  class="form-label">No Telepon</label>
                                            <input type="number" class="form-control" id="notelp" placeholder="" value="" required="">
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <button class="btn btn-danger btn-xs" style="margin-left: auto;" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-8 ms-auto">
                    <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 order-lg-2">
                                <h4 class="mb-3">Ganti Password</h4>
                                <hr>
                                <form class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="mb-3">
                                            <label for="firstName" class="form-label">Password Lama</label>
                                            <input type="text" class="form-control" id="lama" placeholder="Password Lama" value="" required="">
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="firstName" class="form-label">Password Baru</label>
                                            <input type="text" class="form-control" id="baru" placeholder="Password Baru" value="" required="">
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastName"  class="form-label">Konfirmasi Password Baru</label>
                                            <input type="text" class="form-control" id="konfirmasi" placeholder="Konfirmasi Password Baru" value="" required="">
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                   <button class="btn btn-danger btn-xs" type="submit">Simpan</button>
                                </form>
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
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>