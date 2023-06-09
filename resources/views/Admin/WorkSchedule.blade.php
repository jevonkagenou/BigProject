@include('PartialAdmin.SidebarNavbar')


        <div class="content-body">
            <div class="container-fluid">

				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="">Jadwal Kerja</a></li>
					</ol>
                </div>
                <!-- row -->
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div id="calendar" class="app-fullcalendar"></div>
                                </div>
                        </div>


                    <div class="">

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-intro-title">Kalender</h4>

                                    <div class="">
                                        <div id="external-events" class="my-3">
                                            <p>Seret dan lepas acara Anda atau klik di kalender</p>
                                            <div class="external-event btn-success light" data-class="bg-success"><i class="fa fa-move"></i><span>Hari Kerja</span></div>
                                            <div class="external-event btn-warning light" data-class="bg-warning"><i class="fa fa-move"></i>Hari Libur
                                            </div>
                                            <div class="external-event btn-danger light" data-class="bg-danger"><i class="fa fa-move"></i>Libur Bersama</div>

                                        </div>
                                        <!-- checkbox -->
                                        {{-- <div class="checkbox form-check checkbox-event custom-checkbox pt-3 pb-5">
                                            <input type="checkbox" class="form-check-input" id="drop-remove">
                                            <label class="form-check-label" for="drop-remove">Remove After Drop</label>
                                        </div> --}}
                                        <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#add-category" class="btn btn-danger btn-event btn-sm w-100">
                                            <span class="align-middle"><i class="ti-plus"></i></span> Tambah
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN MODAL -->
                    <div class="modal fade none-border" id="event-modal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                </div>
                                <div class="modal-body"></div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                        event</button>

                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-bs-toggle="modal">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Category -->
                    <div class="modal fade none-border" id="add-category">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Tambahkan Jadwal Kerja</strong></h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label class="control-label form-label">Nama Jadwal</label>
                                                <input class="form-control form-white" placeholder="Nama Jadwal Kerja" type="text" name="category-name">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="control-label form-label">Pilih Warna Jadwal</label>
                                                <select class="form-control form-white" data-placeholder="Pilih Warna Jadwal Kerja" name="category-color">
                                                    <option value="success">Success</option>
                                                    <option value="danger">Danger</option>
                                                    <option value="info">Info</option>
                                                    <option value="pink">Pink</option>
                                                    <option value="primary">Primary</option>
                                                    <option value="warning">Warning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default btn-xs waves-effect" data-bs-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect waves-light save-category" data-bs-toggle="modal">Simpan</button>
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
    <script src="{{ asset('vendor/fullcalendar/js/main.min.js')}}"></script>


</body>


</html>
