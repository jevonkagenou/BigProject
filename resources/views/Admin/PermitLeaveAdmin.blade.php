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
                        <div class="row col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12 mb-3">
                                <div class="btn-group btn-xs">
                                    <div class="size-filter">
                                        <div class="btn-group" role="group"
                                            aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" checked>
                                            <label class="btn btn-xs btn-outline-danger" for="btnradio1">Izin</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-xs btn-outline-danger" for="btnradio2">Sakit</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3">
                                            <label class="btn btn-xs btn-outline-danger" for="btnradio3">Cuti Khusus</label>

                                            <input type="radio" class="btn-check" id="cutiTahunan"
                                                data-url="/WorkSchedule" name="btnradio" value="cuti_tahunan">
                                            <label class="btn btn-xs btn-outline-danger" for="cutiTahunan">Cuti
                                                Tahunan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <nav class="mt-3">
                            <ul class="pagination pagination-xs" style="float: right">
                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="fa fa-angle-double-left" aria-hidden="true"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="javascript:void(0)">2</a>
                                </li>

                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </nav>
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
