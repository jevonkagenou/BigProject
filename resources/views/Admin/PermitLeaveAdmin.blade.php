@include('PartialAdmin.SidebarNavbar')
<div class="content-body">
    <div class="container-fluid">


        <div class="row">
            <!-- Cuti Khusus -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Izin & Cuti</h4>
                    </div>
                    <div class="card-body">
                        {{-- <div class="row"> --}}
                            <div class="col-xl-8">
                                <div class="col mb-10">
                                    <div class="size-filter btn-group btn-xs">
                                        {{-- <div class="btn-group btn-xs" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio"
                                                id="btnradio1" value="cuti-khusus" checked>
                                            <label class="btn btn-outline-danger btn-xs btn-hover"
                                                for="btnradio1">Cuti Khusus</label>

                                            <input type="radio" class="btn-check" name="btnradio"
                                                id="btnradio2" value="izin">
                                            <label class="btn btn-outline-danger btn-xs btn-hover"
                                                for="btnradio2">Izin</label>

                                            <input type="radio" class="btn-check" name="btnradio"
                                                id="btnradio3" value="sakit">
                                            <label class="btn btn-outline-danger btn-xs"
                                                for="btnradio3">Sakit</label>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="row ms-auto">
                                    <form action="{{ route('PermitLeaveAdmin') }}" method="GET" class="d-flex" style="justify-content: end">
                                        <div class="col-lg-2 px-1">
                                            <select class="form-select" name="tipe" id="tipe">
                                                <option value="">Semua</option>
                                                <option value="Izin" @if(isset($_GET['tipe']) && $_GET['tipe'] == 'Izin') selected @endif>Izin</option>
                                                <option value="Sakit" @if(isset($_GET['tipe']) && $_GET['tipe'] == 'Sakit') selected @endif>Sakit</option>
                                                <option value="Cuti_Khusus" @if(isset($_GET['tipe']) && $_GET['tipe'] == 'Cuti_Khusus') selected @endif>Cuti Khusus</option>
                                                <option value="Cuti_Tahunan" @if(isset($_GET['tipe']) && $_GET['tipe'] == 'Cuti_Tahunan') selected @endif>Cuti Tahunan</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-2 px-1">
                                            <select class="form-select" name="status" id="status">
                                                <option value="">Semua</option>
                                                <option value="Menunggu" @if(isset($_GET['status']) && $_GET['status'] == 'Menunggu') selected @endif>Menunggu</option>
                                                <option value="Ditolak" @if(isset($_GET['status']) && $_GET['status'] == 'Ditolak') selected @endif>Ditolak</option>
                                                <option value="Diterima" @if(isset($_GET['status']) && $_GET['status'] == 'Diterima') selected @endif>Diterima</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-1">
                                            <button class="btn btn-xs btn-danger" type="submit"><i class="fas fa-search"></i></button>
                                        </div>
                                    </form>
                            </div>
                        {{-- </div> --}}
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Tanggal Pengajuan</th>
                                        <th>Tanggal Cuti</th>
                                        <th>Jumlah Hari</th>
                                        <th>Jenis Cuti</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($approve_admin as $approve)   
                                    <tr class="text-center">
                                        <td>{{ $approve->id }}</td>
                                        <td>{{ $approve->User->name }}</td>
                                        <td>{{ $approve->submission_date }}</td>
                                        <td>{{ $approve->date_leave }}</td>
                                        <td>{{ $approve->total_day }}</td>
                                        <td>{{ $approve->tipe }}</td>
                                        <td>
                                            <span
                                                class="badge light
                                                @if ($approve->status == 'Menunggu') badge-warning
                                                @elseif ($approve->status == 'Diterima') badge-success
                                                @elseif ($approve->status == 'Ditolak') badge-danger @endif">{{ $approve->status }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">Kalopsia</a> 2022
        </p>
    </div>
</div>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
  var selectElement = document.querySelector('input[name="btnradio"]');

  selectElement.addEventListener('change', function() {
    var selectedOption = selectElement.value;
    var url = selectElement.getAttribute('data-url');

    if (url) {
      window.location.href = url + '?type=' + selectedOption;
    }
  });
});
</script>

</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->

</html>
