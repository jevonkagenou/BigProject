@include('PartialEmployee.SidebarNavbar')

<style>
    .btn-check:checked+.btn-outline-danger {
        color: white !important;
    }

    .hoverbtn {
        color: #f72b50 !important;
    }

    .hoverbtn:hover {
        color: white !important;
    }
    .profile-photo {
    position: relative;
}

.image-container {
    position: relative;
    display: inline-block;
}

.edit-overlay {
    position: relative;
    display: inline-block;
}

.edit-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s;
}

.edit-overlay:hover .edit-icon {
    opacity: 1;
}

.edit-image {
    width: 100%;
    height: auto;
}

.edit-overlay::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-color: rgba(0, 0, 0, 0.5); */
    opacity: 0;
    transition: opacity 0.3s;
    /* border-radius: 50%; */
}

.edit-overlay:hover::before {
    opacity: 1;
}
.dropdown-container .dropdown-content {
  display: none;
  position: absolute;
  top: 131px;
  left: 50;
  width: 125px;
  background-color: #fff;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  z-index: 1;
}

.dropdown-container .dropdown-content a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #333;
}

.dropdown-container .dropdown-content a:hover {
  background-color: #f9f9f9;
}

.dropdown-container.active .dropdown-content {
  display: block;
}
</style>
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <p></p>
                            <div class="dropdown-container d-flex justify-content-center">
                                <div class="edit-overlay">
                                  <div class="edit-icon">
                                    <i class="fas fa-pencil-alt"></i>
                                  </div>
                                  <img src="images/profile/user.png" class="edit-image" style="width: 90px; float: left; border-radius: 50%;" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="dropdown-content">
                                    <a href="#">Ganti Foto Profil</a>
                                    <a href="#">Edit Foto Profil</a>
                                    <a href="#">Hapus Foto Profil</a>
                                </div>
                              </div>
                                <p></p>
                                <div class="profile-statistics">
                                    <div class="text-center">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="m-b-0">Fajar Kurniawan</h5>
                                                <span>@fajarkur123</span>
                                            </div>
                                        </div>
                                        <div class="mt-2 badge rounded-pill bg-danger badge-xs">
                                            Karyawan
                                        </div>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            <div class="col-xl-8 ms-auto">
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
                                        <label class="col-sm-3 col-form-label">Nama Karyawan</label>
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
<script>
    var dropdownContainer = document.querySelector('.dropdown-container');
var editIcon = document.querySelector('.edit-icon');

editIcon.addEventListener('click', function() {
  dropdownContainer.classList.toggle('active');
});

// Menutup dropdown saat mengklik di luar dropdown
document.addEventListener('click', function(event) {
  if (!dropdownContainer.contains(event.target)) {
    dropdownContainer.classList.remove('active');
  }
});
</script>
</body>
</html>
