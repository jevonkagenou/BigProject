@include('PartialAdmin.SidebarNavbar')

<style>
  .options {
    position: absolute;
    top: 15%;
    left: 90%;
    transform: translate(-50%, -50%);
    display: none;
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    padding: 10px;
    border-radius: 5px;
    margin-top: 7%;
  }

  .ekspor .options ul {
    list-style-type: none;
    padding: 0;
  }

  .ekspor .options ul li {
    cursor: pointer;
    margin-bottom: 5px;
  }
  .hidden {
    display: none;
  }

  .detail {
    display: none;
  }
  .roww {
    cursor: pointer;
  }
</style>

<div class="content-body">
  <div class="container-fluid">
    <!-- row -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Payroll</h4>
          </div>
          <div class="card-body">
            <!-- baris satu -->
            <div class="row">
              <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-6">
                <div class="responsive-button">
                  <button type="button" class="btn btn-danger btn-xs">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="15"
                      height="15"
                      fill="white"
                      class="bi bi-caret-right-fill"
                      viewBox="0 0 16 16"
                    >
                      <path
                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"
                      />
                    </svg>
                    Bayar Gaji
                  </button>
                </div>
              </div>
              <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-6">
                <div class="responsive-button text-end">
                  <button
                    type="button"
                    class="btn btn-outline-light btn-xs"
                  >
                    <span>
                      <i class="bi bi-download px-1"></i>
                    </span>
                    Import
                  </button>
                </div>
              </div>
            </div>
            <!-- baris dua -->
            <div class="row mt-2">
              <div class="col-md-2 col-sm-3 col-4">
                <button class="btn btn-outline-light btn-xs">
                  Bulan ini
                </button>
              </div>
              <div
                class="col-md-1 col-sm-5 col-3"
                style="margin-left: -8%"
              >
                <div class="dropdown-basic">
                  <button
                    class="btn btn-outline-light btn-xs dropdown-toggle"
                    data-bs-toggle="dropdown"
                  >
                    Mei
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Juni</a>
                    <a class="dropdown-item" href="#">Juli</a>
                  </div>
                </div>
              </div>
              <div
                class="col-xl-4 col-lg-9 col-md-9 col-sm-6 col-5 ms-auto"
              >
                <div class="input-group search-area">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Cari Disini..."
                  />
                  <span class="input-group-text"
                    ><a href="javascript:void(0)"
                      ><i class="flaticon-381-search-2"></i></a
                  ></span>
                </div>
              </div>
            </div>

            <div class="accordion" id="accordion-eleven">
              <div class="table-responsive mb-2">
                <table
                  id="example8"
                  class="display align-content-end"
                  style="min-width: 845px"
                  data-paging="false"
                >
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Nama</th>
                      <th>Bank</th>
                      <th>Status</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-center">
                      <td>1</td>
                      <td
                        class="accordion"
                        id="accord-11One"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse11One"
                        aria-controls="collapse11One"
                        aria-expanded="true"
                        role="button"
                      >
                        Tina
                      </td>
                      <td>BCA</td>
                      <td>
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-outline-light btn-xs"
                          >
                            Belum Siap
                          </button>
                          <button
                            type="button"
                            class="btn btn-danger btn-xs"
                          >
                            Siap Bayar
                          </button>
                          <button
                            type="button"
                            class="btn btn-outline-light btn-xs"
                          >
                            Sudah Bayar
                          </button>
                        </div>
                      </td>
                      <td>2.434.678</td>
                    </tr>
                    <tr>
                      <td colspan="5">
                        <div
                          id="collapse11One"
                          class="collapse accordion__body"
                          aria-labelledby="accord-11One"
                          data-bs-parent="#accordion-eleven"
                        >
                          <div class="accordion-body-text">
                            <div
                              id="collapse11One"
                              class="collapse accordion__body"
                              aria-labelledby="accord-11One"
                              data-bs-parent="#accordion-eleven"
                            >
                              <div class="accordion-body-text">
                                <div class="row mb-2">
                                  <div class="col-xl-6 col-12 mb-2">
                                    <div
                                      class="card-body"
                                      style="
                                        border: 1px solid
                                          rgb(181, 178, 178);
                                        border-radius: 1rem;
                                      "
                                    >
                                      <h5
                                        class="strong text-center"
                                        data-bs-toggle="tab"
                                      >
                                        Pendapatan
                                      </h5>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Gaji Pokok</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <p>Rp. 4.500.000</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-3 col-3">
                                          <p>Uang Lembur</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>Jam x 26.001</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>0</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Tunjangan Pulsa</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Tunjangan Lainnya</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-5 col-12">
                                          <p>Masukkan Nama Pendapatan</p>
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div class="col-xl-5 col-12">
                                          <p>
                                            Masukkan Jumlah Pendapatan
                                          </p>
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div
                                          class="col-xl-1 col-1 mt-2 mb-2 d-flex align-items-end ms-2"
                                        >
                                          <a href=""
                                            ><i
                                              class="fa fa-trash font-18 align-middle me-2"
                                            ></i
                                          ></a>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-12">
                                          <a href="" class="text-red"
                                            ><i
                                              class="bi bi-plus px-1"
                                            ></i
                                            >Pendapatan</a
                                          >
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-8">
                                          <p class="strong">
                                              Total Pendapatan
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-4">
                                        <p class="strong">Rp. 5.000.000</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-xl-6 col-12 ms-auto">
                                    <div
                                      class="card-body"
                                      style="
                                        border: 1px solid
                                          rgb(181, 178, 178);
                                        border-radius: 1rem;
                                      "
                                    >
                                      <h5
                                        class="strong text-center"
                                        data-bs-toggle="tab"
                                      >
                                        Potongan
                                      </h5>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Koperasi</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <p>Rp. 450.000</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-3 col-3">
                                          <p>Denda Keterlambatan</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>Jam x 26.001</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>0</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Potongan Lainnya</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-12">
                                          <a href="" class="text-red"
                                            ><i
                                              class="bi bi-plus px-1"
                                            ></i
                                            >Potongan</a
                                          >
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-8"><p class="strong">
                                              Total Potongan
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-4">
                                          <p>Rp. 500.000</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="text-center">
                      <td>2</td>
                      <td
                        class="accordion collapsed"
                        id="accord-11Two"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse11Two"
                        aria-controls="collapse11Two"
                        aria-expanded="true"
                        role="button"
                      >
                        Dwi
                      </td>
                      <td>BCA</td>
                      <td>
                        <div class="btn-group">
                          <button
                            type="button"
                            class="btn btn-outline-light btn-xs"
                          >
                            Belum Siap
                          </button>
                          <button
                            type="button"
                            class="btn btn-danger btn-xs"
                          >
                            Siap Bayar
                          </button>
                          <button
                            type="button"
                            class="btn btn-outline-light btn-xs"
                          >
                            Sudah Bayar
                          </button>
                        </div>
                      </td>
                      <td>2.434.678</td>
                    </tr>
                    <tr>
                      <td colspan="5">
                        <div
                          id="collapse11Two"
                          class="collapse accordion__body"
                          aria-labelledby="accord-11Two"
                          data-bs-parent="#accordion-eleven"
                        >
                          <div class="accordion-body-text">
                            <div
                              id="collapse11Two"
                              class="collapse accordion__body"
                              aria-labelledby="accord-11Two"
                              data-bs-parent="#accordion-eleven"
                            >
                              <div class="accordion-body-text">
                                <div class="row mb-2">
                                  <div class="col-xl-6 col-12 mb-2">
                                    <div
                                      class="card-body"
                                      style="
                                        border: 1px solid
                                          rgb(181, 178, 178);
                                        border-radius: 1rem;
                                      "
                                    >
                                      <h5
                                        class="strong text-center"
                                        data-bs-toggle="tab"
                                      >
                                        Pendapatannnnn
                                      </h5>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Gaji Pokok</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <p>Rp. 4.500.000</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-3 col-3">
                                          <p>Uang Lembur</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>Jam x 26.001</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>0</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Tunjangan Pulsa</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Tunjangan Lainnya</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-5 col-12">
                                          <p>Masukkan Nama Pendapatan</p>
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div class="col-xl-5 col-12">
                                          <p>
                                            Masukkan Jumlah Pendapatan
                                          </p>
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div
                                          class="col-xl-1 col-1 mt-2 mb-2 d-flex align-items-end ms-2"
                                        >
                                          <a href=""
                                            ><i
                                              class="fa fa-trash font-18 align-middle me-2"
                                            ></i
                                          ></a>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-12">
                                          <a href="" class="text-red"
                                            ><i
                                              class="bi bi-plus px-1"
                                            ></i
                                            >Pendapatan</a
                                          >
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-8"><p class="strong">
                                              Total Pendapatan
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-4">
                                          <p>Rp. 5.000.000</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-xl-6 col-12 ms-auto">
                                    <div
                                      class="card-body"
                                      style="
                                        border: 1px solid
                                          rgb(181, 178, 178);
                                        border-radius: 1rem;
                                      "
                                    >
                                      <h5
                                        class="strong text-center"
                                        data-bs-toggle="tab"
                                      >
                                        Potongan
                                      </h5>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Koperasi</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <p>Rp. 450.000</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-3 col-3">
                                          <p>Denda Keterlambatan</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>Jam x 26.001</p>
                                        </div>
                                        <div class="col-xl-3 col-3">
                                          <p>0</p>
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-xl-9 col-8">
                                          <p>Potongan Lainnya</p>
                                        </div>
                                        <div class="col-xl-3 col-4">
                                          <input
                                            type="text"
                                            class="form-control"
                                            placeholder=""
                                            style="
                                              border: 0.035rem solid
                                                rgb(195, 195, 195);
                                            "
                                          />
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-12">
                                          <a href="" class="text-red"
                                            ><i
                                              class="bi bi-plus px-1"
                                            ></i
                                            >Potongan</a
                                          >
                                        </div>
                                      </div>
                                      <hr />
                                      <div class="row">
                                        <div class="col-lg-9 col-8"><p class="strong">
                                              Total Potongan
                                            </p>
                                        </div>
                                        <div class="col-lg-3 col-4">
                                          <p>Rp. 500.000</p>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <nav>
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


</body>


</html>
