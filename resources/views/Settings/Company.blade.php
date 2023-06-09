@include('PartialAdmin.SidebarNavbar')


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            {{-- Profile --}}
            <div class="col-lg-12">
                <div class="profile card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Profile --}}

            {{-- Input Form --}}
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Profil</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label">Nama Perusahaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Nama Perusahaan">
                                    </div>
                                </div>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label">No Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" placeholder="No Telepon">
                                    </div>
                                </div>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label">Tanggal Berdiri</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" placeholder="Tanggal">
                                    </div>
                                </div>
                                <div class="mb-3 row align-items-center">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-danger btn-xs">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Input Form --}}
        </div>
    </div>
</div>

<script src="{{ asset('vendor/global/global.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('vendor/wnumb/wNumb.js') }}"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ asset('js/dlabnav-init.js') }}"></script>
<script src="{{ asset('js/demo.js') }}"></script>
<script src="{{ asset('js/styleSwitcher.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

<!-- Chart ChartJS plugin files -->
<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/plugins-init/chartjs-init.js') }}"></script>
