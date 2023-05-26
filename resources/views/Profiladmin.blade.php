@include('PartialAdmin.SidebarNavbar')


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-info d-flex justify-content-center">
                                    <div class="profile-photo text-center">
                                        <div class="profil">
                                            <div class="image-container">
                                                <img src="images/profile/profile.png" class="rounded-circle"
                                                    alt="" width="100px" />
                                                <div class="image-overlay rounded-circle">
                                                    <span class="pencil-icon">&#9998</span>
                                                </div>
                                            </div>
                                            <div class="options">
                                                <ul>
                                                    <li class="mb-1">Edit Profil</li>
                                                    <li class="mb-1">Ganti Foto</li>
                                                    <li class="mb-1">Hapus Foto</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-statistics">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="m-b-0">Fajar Kurniawan</h5>
                                                <span>@fajarkur123</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 badge rounded-pill bg-danger badge-xs">
                                            Admin
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card">
                    <h5 class="nav-item strong card-header" data-bs-toggle="tab">
                        Edit Profil
                    </h5>
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <form class="needs-validation" novalidate="">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Email" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Nama Admin</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Nama" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">No. Telp</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="No. Telp" />
                                        </div>
                                    </div>
                                    <hr class="mb-2" />
                                    <div class="row">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8 ms-auto">
                <div class="card">
                    <h5 class="nav-item strong card-header" data-bs-toggle="tab">
                        Ubah Password
                    </h5>
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <form class="needs-validation" novalidate="">
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Password Lama</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Password Lama" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" placeholder="Password Baru" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control"
                                                placeholder="Konfirmasi Password Baru" />
                                        </div>
                                    </div>
                                    <hr class="mb-2" />
                                    <div class="row">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
    @extends('PartialAdmin.footer')
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

{{-- dropdown edit profil --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const editIcon = document.querySelector(".pencil-icon");
        const options = document.querySelector(".options");

        editIcon.addEventListener("click", function() {
            options.style.display = "block";
        });

        document.addEventListener("click", function(event) {
            if (
                !editIcon.contains(event.target) &&
                !options.contains(event.target)
            ) {
                options.style.display = "none";
            }
        });
    });
</script>


</body>


</html>
