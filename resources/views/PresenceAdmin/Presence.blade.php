<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:32 GMT -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no" />

    <!-- PAGE TITLE HERE -->
    <title>Dompet : Payment Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <!-- Datatable -->
    <link
      href="vendor/datatables/css/jquery.dataTables.min.css"
      rel="stylesheet"
    />
    <!-- Custom Stylesheet -->
    <link
      href="vendor/jquery-nice-select/css/nice-select.css"
      rel="stylesheet"
    />
    <link href="css/style.css" rel="stylesheet" />

    <style>
        /* kebijakan presensi */
      .btn-outline-danger:hover {
    color: #fff !important;
      }
      .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
    color: #000 !important;
      }
/* button samping tgl */
.btn-primary {
  border-color: var(--bs-red )!important;
  background-color: var(--bs-red )!important; }
  .btn-primary:active, .btn-primary:focus, .btn-primary:hover {
    border-color: var(--bs-gray )!important;
    background-color: var(--bs-gray)!important; }
  .btn-primary:focus {
    box-shadow: 0 0 0 0.1rem var(--bs-gray)!important; }
  .btn-primary:disabled, .btn-primary.disabled {
    background-color: var(--primary);
    border-color: var(--primary); }

    </style>
  </head>

  <body>
    <!--*******************=
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="waviy">
        <span style="--i: 1">L</span>
        <span style="--i: 2">o</span>
        <span style="--i: 3">a</span>
        <span style="--i: 4">d</span>
        <span style="--i: 5">i</span>
        <span style="--i: 6">n</span>
        <span style="--i: 7">g</span>
        <span style="--i: 8">.</span>
        <span style="--i: 9">.</span>
        <span style="--i: 10">.</span>
      </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
      <!--**********************************
            Nav header start
        ***********************************-->
      <div class="nav-header">
        <a href="index.html" class="brand-logo">
          <svg class="logo-abbr" width="53" height="53" viewBox="0 0 53 53">
            <path
              d="M21.6348 8.04782C21.6348 5.1939 23.9566 2.87204 26.8105 2.87204H28.6018L28.0614 1.37003C27.7576 0.525342 26.9616 0 26.1132 0C25.8781 0 25.639 0.0403711 25.4052 0.125461L7.3052 6.7133C6.22916 7.105 5.67535 8.29574 6.06933 9.37096L7.02571 11.9814H21.6348V8.04782Z"
              fill="#759DD9"
            />
            <path
              d="M26.8105 5.97754C25.6671 5.97754 24.7402 6.90442 24.7402 8.04786V11.9815H42.8555V8.04786C42.8555 6.90442 41.9286 5.97754 40.7852 5.97754H26.8105Z"
              fill="#F8A961"
            />
            <path
              class="svg-logo-primary-path"
              d="M48.3418 41.8457H41.0957C36.8148 41.8457 33.332 38.3629 33.332 34.082C33.332 29.8011 36.8148 26.3184 41.0957 26.3184H48.3418V19.2275C48.3418 16.9408 46.4879 15.0869 44.2012 15.0869H4.14062C1.85386 15.0869 0 16.9408 0 19.2275V48.8594C0 51.1462 1.85386 53 4.14062 53H44.2012C46.4879 53 48.3418 51.1462 48.3418 48.8594V41.8457Z"
              fill="#5BCFC5"
            />
            <path
              class="svg-logo-primary-path"
              d="M51.4473 29.4238H41.0957C38.5272 29.4238 36.4375 31.5135 36.4375 34.082C36.4375 36.6506 38.5272 38.7402 41.0957 38.7402H51.4473C52.3034 38.7402 53 38.0437 53 37.1875V30.9766C53 30.1204 52.3034 29.4238 51.4473 29.4238ZM41.0957 35.6348C40.2382 35.6348 39.543 34.9396 39.543 34.082C39.543 33.2245 40.2382 32.5293 41.0957 32.5293C41.9532 32.5293 42.6484 33.2245 42.6484 34.082C42.6484 34.9396 41.9532 35.6348 41.0957 35.6348Z"
              fill="#5BCFC5"
            />
          </svg>
          <svg class="brand-title" width="124px" height="33px">
            <path
              class="svg-title-path"
              fill-rule="evenodd"
              fill="rgb(25, 59, 98)"
              d="M119.160,20.128 C119.363,20.309 119.602,20.400 119.873,20.400 L123.681,20.400 L123.681,24.820 L118.718,24.820 C117.108,24.820 115.850,24.366 114.944,23.460 C114.037,22.530 113.583,21.284 113.583,19.720 L113.583,11.696 L118.887,11.696 L118.887,19.414 C118.887,19.686 118.978,19.924 119.160,20.128 ZM110.727,11.696 L110.727,7.378 L113.583,7.378 L113.583,11.696 L110.727,11.696 ZM113.583,3.128 L118.887,3.128 L118.887,7.378 L113.583,7.378 L113.583,3.128 ZM123.681,7.378 L123.681,11.696 L118.887,11.696 L118.887,7.378 L123.681,7.378 ZM110.085,17.782 L98.661,17.782 C98.797,18.371 99.058,18.870 99.443,19.278 C99.828,19.686 100.316,19.992 100.905,20.196 C101.494,20.377 102.151,20.468 102.877,20.468 L108.215,20.468 L108.215,24.820 L103.047,24.820 C101.075,24.820 99.341,24.457 97.845,23.732 C96.349,22.984 95.182,21.964 94.343,20.672 C93.527,19.357 93.119,17.839 93.119,16.116 C93.119,14.212 93.516,12.580 94.309,11.220 C95.102,9.860 96.157,8.817 97.471,8.092 C98.808,7.344 100.281,6.970 101.891,6.970 C103.727,6.970 105.257,7.355 106.481,8.126 C107.728,8.897 108.668,9.951 109.303,11.288 C109.937,12.602 110.255,14.110 110.255,15.810 C110.255,16.104 110.232,16.456 110.187,16.864 C110.164,17.249 110.130,17.555 110.085,17.782 ZM104.951,13.430 C104.860,13.090 104.713,12.795 104.509,12.546 C104.328,12.274 104.112,12.047 103.863,11.866 C103.614,11.662 103.319,11.503 102.979,11.390 C102.661,11.276 102.299,11.220 101.891,11.220 C101.370,11.220 100.905,11.310 100.497,11.492 C100.089,11.673 99.749,11.922 99.477,12.240 C99.205,12.534 98.990,12.886 98.831,13.294 C98.695,13.679 98.593,14.076 98.525,14.484 L105.155,14.484 C105.110,14.121 105.041,13.770 104.951,13.430 ZM87.805,24.106 C86.559,24.854 85.108,25.228 83.454,25.228 C82.751,25.228 82.082,25.137 81.448,24.956 C80.835,24.775 80.269,24.514 79.747,24.174 C79.249,23.811 78.829,23.392 78.489,22.916 L78.387,22.916 L78.387,32.198 L73.117,32.198 L73.117,16.422 C73.117,14.518 73.503,12.852 74.274,11.424 C75.044,9.996 76.132,8.897 77.538,8.126 C78.942,7.355 80.586,6.970 82.467,6.970 C83.940,6.970 85.244,7.196 86.377,7.650 C87.533,8.103 88.508,8.760 89.301,9.622 C90.118,10.460 90.740,11.458 91.171,12.614 C91.602,13.770 91.817,15.028 91.817,16.388 C91.817,18.156 91.455,19.697 90.729,21.012 C90.027,22.326 89.052,23.358 87.805,24.106 ZM85.935,13.770 C85.618,13.067 85.165,12.523 84.576,12.138 C83.986,11.730 83.283,11.526 82.467,11.526 C81.651,11.526 80.938,11.730 80.326,12.138 C79.736,12.523 79.282,13.067 78.965,13.770 C78.648,14.450 78.489,15.221 78.489,16.082 C78.489,16.943 78.648,17.714 78.965,18.394 C79.282,19.074 79.736,19.618 80.326,20.026 C80.938,20.411 81.651,20.604 82.467,20.604 C83.283,20.604 83.986,20.411 84.576,20.026 C85.165,19.618 85.618,19.074 85.935,18.394 C86.275,17.714 86.445,16.943 86.445,16.082 C86.445,15.221 86.275,14.450 85.935,13.770 ZM65.039,14.688 C65.039,14.121 64.892,13.611 64.597,13.158 C64.325,12.682 63.951,12.297 63.475,12.002 C62.999,11.707 62.455,11.560 61.843,11.560 C61.231,11.560 60.676,11.707 60.177,12.002 C59.701,12.297 59.327,12.682 59.055,13.158 C58.783,13.611 58.647,14.121 58.647,14.688 L58.647,24.820 L53.377,24.820 L53.377,14.688 C53.377,14.121 53.230,13.611 52.935,13.158 C52.663,12.682 52.278,12.297 51.779,12.002 C51.303,11.707 50.759,11.560 50.147,11.560 C49.535,11.560 48.979,11.707 48.481,12.002 C48.005,12.297 47.631,12.682 47.359,13.158 C47.087,13.611 46.951,14.121 46.951,14.688 L46.951,24.820 L41.681,24.820 L41.681,14.518 C41.681,13.090 42.010,11.809 42.667,10.676 C43.347,9.520 44.311,8.613 45.557,7.956 C46.804,7.299 48.288,6.970 50.011,6.970 C50.873,6.970 51.666,7.072 52.391,7.276 C53.117,7.457 53.774,7.718 54.363,8.058 C54.975,8.375 55.497,8.760 55.927,9.214 L55.995,9.214 C56.448,8.760 56.970,8.375 57.559,8.058 C58.171,7.718 58.840,7.457 59.565,7.276 C60.313,7.072 61.118,6.970 61.979,6.970 C63.702,6.970 65.187,7.299 66.433,7.956 C67.680,8.613 68.643,9.520 69.323,10.676 C70.003,11.809 70.343,13.090 70.343,14.518 L70.343,24.820 L65.039,24.820 L65.039,14.688 ZM34.927,24.038 C33.499,24.831 31.901,25.228 30.133,25.228 C28.343,25.228 26.733,24.831 25.306,24.038 C23.877,23.244 22.744,22.156 21.906,20.774 C21.089,19.391 20.681,17.839 20.681,16.116 C20.681,14.370 21.089,12.818 21.906,11.458 C22.744,10.075 23.877,8.987 25.306,8.194 C26.733,7.378 28.343,6.970 30.133,6.970 C31.924,6.970 33.522,7.378 34.927,8.194 C36.356,8.987 37.478,10.075 38.293,11.458 C39.132,12.818 39.551,14.370 39.551,16.116 C39.551,17.839 39.132,19.391 38.293,20.774 C37.478,22.156 36.356,23.244 34.927,24.038 ZM33.738,13.804 C33.397,13.124 32.921,12.580 32.310,12.172 C31.698,11.764 30.972,11.560 30.133,11.560 C29.295,11.560 28.558,11.764 27.924,12.172 C27.312,12.580 26.835,13.124 26.495,13.804 C26.156,14.484 25.985,15.243 25.985,16.082 C25.985,16.943 26.156,17.714 26.495,18.394 C26.835,19.074 27.312,19.618 27.924,20.026 C28.558,20.434 29.295,20.638 30.133,20.638 C30.972,20.638 31.698,20.434 32.310,20.026 C32.921,19.618 33.397,19.074 33.738,18.394 C34.078,17.714 34.247,16.943 34.247,16.082 C34.247,15.243 34.078,14.484 33.738,13.804 ZM14.280,24.072 C12.875,24.842 11.231,25.228 9.350,25.228 C7.876,25.228 6.561,25.001 5.406,24.548 C4.272,24.094 3.298,23.449 2.482,22.610 C1.689,21.748 1.076,20.740 0.646,19.584 C0.215,18.428 0.000,17.170 0.000,15.810 C0.000,14.042 0.351,12.501 1.054,11.186 C1.779,9.871 2.765,8.840 4.012,8.092 C5.258,7.344 6.709,6.970 8.364,6.970 C9.067,6.970 9.724,7.061 10.336,7.242 C10.971,7.423 11.537,7.695 12.036,8.058 C12.557,8.398 12.988,8.806 13.328,9.282 L13.430,9.282 L13.430,-0.000 L18.700,-0.000 L18.700,15.776 C18.700,17.680 18.314,19.346 17.544,20.774 C16.773,22.202 15.686,23.301 14.280,24.072 ZM12.851,13.804 C12.534,13.124 12.070,12.591 11.458,12.206 C10.869,11.798 10.166,11.594 9.350,11.594 C8.534,11.594 7.831,11.798 7.242,12.206 C6.652,12.591 6.187,13.124 5.848,13.804 C5.530,14.484 5.372,15.254 5.372,16.116 C5.372,16.977 5.530,17.759 5.848,18.462 C6.187,19.142 6.652,19.686 7.242,20.094 C7.831,20.479 8.534,20.672 9.350,20.672 C10.166,20.672 10.869,20.479 11.458,20.094 C12.070,19.686 12.534,19.142 12.851,18.462 C13.169,17.759 13.328,16.977 13.328,16.116 C13.328,15.254 13.169,14.484 12.851,13.804 Z"
            />
          </svg>
        </a>
        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span
            ><span class="line"></span>
          </div>
        </div>
      </div>
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Chat box start
        ***********************************-->
      <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-bs-toggle="tab" href="#chat"
                >Chat</a
              >
            </li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade active" id="chat" role="tabpanel">
              <div
                class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box"
              >
                <div class="card-header chat-list-header text-center">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="18px"
                      height="18px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <rect
                          fill="#000000"
                          x="4"
                          y="11"
                          width="16"
                          height="2"
                          rx="1"
                        />
                        <rect
                          fill="#000000"
                          opacity="0.3"
                          transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                          x="4"
                          y="11"
                          width="16"
                          height="2"
                          rx="1"
                        />
                      </g></svg
                  ></a>
                  <div>
                    <h6 class="mb-1">Chat List</h6>
                    <p class="mb-0">Show All</p>
                  </div>
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="18px"
                      height="18px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <rect x="0" y="0" width="24" height="24" />
                        <circle fill="#000000" cx="5" cy="12" r="2" />
                        <circle fill="#000000" cx="12" cy="12" r="2" />
                        <circle fill="#000000" cx="19" cy="12" r="2" />
                      </g></svg
                  ></a>
                </div>
                <div
                  class="card-body contacts_body p-0 dlab-scroll"
                  id="dlab_W_Contacts_Body"
                >
                  <ul class="contacts">
                    <li class="name-first-letter">A</li>
                    <li class="active dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/1.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>Archie Parker</span>
                          <p>Kalid is online</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/2.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Alfie Mason</span>
                          <p>Taherah left 7 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/3.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>AharlieKane</span>
                          <p>Sami is online</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/4.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Athan Jacoby</span>
                          <p>Nargis left 30 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="name-first-letter">B</li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/5.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Bashid Samim</span>
                          <p>Rashid left 50 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/1.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>Breddie Ronan</span>
                          <p>Kalid is online</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/2.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Ceorge Carson</span>
                          <p>Taherah left 7 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="name-first-letter">D</li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/3.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>Darry Parker</span>
                          <p>Sami is online</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/4.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Denry Hunter</span>
                          <p>Nargis left 30 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="name-first-letter">J</li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/5.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Jack Ronan</span>
                          <p>Rashid left 50 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/1.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>Jacob Tucker</span>
                          <p>Kalid is online</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/2.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>James Logan</span>
                          <p>Taherah left 7 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/3.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon"></span>
                        </div>
                        <div class="user_info">
                          <span>Joshua Weston</span>
                          <p>Sami is online</p>
                        </div>
                      </div>
                    </li>
                    <li class="name-first-letter">O</li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/4.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Oliver Acker</span>
                          <p>Nargis left 30 mins ago</p>
                        </div>
                      </div>
                    </li>
                    <li class="dlab-chat-user">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont">
                          <img
                            src="images/avatar/5.jpg"
                            class="rounded-circle user_img"
                            alt=""
                          />
                          <span class="online_icon offline"></span>
                        </div>
                        <div class="user_info">
                          <span>Oscar Weston</span>
                          <p>Rashid left 50 mins ago</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card chat dlab-chat-history-box d-none">
                <div class="card-header chat-list-header text-center">
                  <a href="#" class="dlab-chat-history-back">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="18px"
                      height="18px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect
                          fill="#000000"
                          opacity="0.3"
                          transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                          x="14"
                          y="7"
                          width="2"
                          height="10"
                          rx="1"
                        />
                        <path
                          d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "
                        />
                      </g>
                    </svg>
                  </a>
                  <div>
                    <h6 class="mb-1">Chat with Khelesh</h6>
                    <p class="mb-0 text-success">Online</p>
                  </div>
                  <div class="dropdown">
                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false"
                      ><svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="18px"
                        height="18px"
                        viewBox="0 0 24 24"
                        version="1.1"
                      >
                        <g
                          stroke="none"
                          stroke-width="1"
                          fill="none"
                          fill-rule="evenodd"
                        >
                          <rect x="0" y="0" width="24" height="24" />
                          <circle fill="#000000" cx="5" cy="12" r="2" />
                          <circle fill="#000000" cx="12" cy="12" r="2" />
                          <circle fill="#000000" cx="19" cy="12" r="2" />
                        </g></svg
                    ></a>
                    <ul class="dropdown-menu dropdown-menu-end">
                      <li class="dropdown-item">
                        <i class="fa fa-user-circle text-primary me-2"></i> View
                        profile
                      </li>
                      <li class="dropdown-item">
                        <i class="fa fa-users text-primary me-2"></i> Add to
                        btn-close friends
                      </li>
                      <li class="dropdown-item">
                        <i class="fa fa-plus text-primary me-2"></i> Add to
                        group
                      </li>
                      <li class="dropdown-item">
                        <i class="fa fa-ban text-primary me-2"></i> Block
                      </li>
                    </ul>
                  </div>
                </div>
                <div
                  class="card-body msg_card_body dlab-scroll"
                  id="dlab_W_Contacts_Body3"
                >
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      Hi, how are you samim?
                      <span class="msg_time">8:40 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      Hi Khalid i am good tnx how about you?
                      <span class="msg_time_send">8:55 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/2.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      I am good too, thank you for your chat template
                      <span class="msg_time">9:00 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      You are welcome
                      <span class="msg_time_send">9:05 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/2.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      I am looking for your next templates
                      <span class="msg_time">9:07 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      Ok, thank you have a good day
                      <span class="msg_time_send">9:10 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/2.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      Bye, see you
                      <span class="msg_time">9:12 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      Hi, how are you samim?
                      <span class="msg_time">8:40 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      Hi Khalid i am good tnx how about you?
                      <span class="msg_time_send">8:55 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/2.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      I am good too, thank you for your chat template
                      <span class="msg_time">9:00 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      You are welcome
                      <span class="msg_time_send">9:05 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/2.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      I am looking for your next templates
                      <span class="msg_time">9:07 AM, Today</span>
                    </div>
                  </div>
                  <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send">
                      Ok, thank you have a good day
                      <span class="msg_time_send">9:10 AM, Today</span>
                    </div>
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/2.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                      <img
                        src="images/avatar/1.jpg"
                        class="rounded-circle user_img_msg"
                        alt=""
                      />
                    </div>
                    <div class="msg_cotainer">
                      Bye, see you
                      <span class="msg_time">9:12 AM, Today</span>
                    </div>
                  </div>
                </div>
                <div class="card-footer type_msg">
                  <div class="input-group">
                    <textarea
                      class="form-control"
                      placeholder="Type your message..."
                    ></textarea>
                    <div class="input-group-append">
                      <button type="button" class="btn btn-primary">
                        <i class="fa fa-location-arrow"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="alerts" role="tabpanel">
              <div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header chat-list-header text-center">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="18px"
                      height="18px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <rect x="0" y="0" width="24" height="24" />
                        <circle fill="#000000" cx="5" cy="12" r="2" />
                        <circle fill="#000000" cx="12" cy="12" r="2" />
                        <circle fill="#000000" cx="19" cy="12" r="2" />
                      </g></svg
                  ></a>
                  <div>
                    <h6 class="mb-1">Notications</h6>
                    <p class="mb-0">Show All</p>
                  </div>
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="18px"
                      height="18px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          opacity="0.3"
                        />
                        <path
                          d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                        />
                      </g></svg
                  ></a>
                </div>
                <div
                  class="card-body contacts_body p-0 dlab-scroll"
                  id="dlab_W_Contacts_Body1"
                >
                  <ul class="contacts">
                    <li class="name-first-letter">SEVER STATUS</li>
                    <li class="active">
                      <div class="d-flex bd-highlight">
                        <div class="img_cont primary">KK</div>
                        <div class="user_info">
                          <span>David Nester Birthday</span>
                          <p class="text-primary">Today</p>
                        </div>
                      </div>
                    </li>
                    <li class="name-first-letter">SOCIAL</li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="img_cont success">RU</div>
                        <div class="user_info">
                          <span>Perfection Simplified</span>
                          <p>Jame Smith commented on your status</p>
                        </div>
                      </div>
                    </li>
                    <li class="name-first-letter">SEVER STATUS</li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="img_cont primary">AU</div>
                        <div class="user_info">
                          <span>AharlieKane</span>
                          <p>Sami is online</p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="img_cont info">MO</div>
                        <div class="user_info">
                          <span>Athan Jacoby</span>
                          <p>Nargis left 30 mins ago</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <div class="tab-pane fade" id="notes">
              <div class="card mb-sm-3 mb-md-0 note_card">
                <div class="card-header chat-list-header text-center">
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="18px"
                      height="18px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <rect
                          fill="#000000"
                          x="4"
                          y="11"
                          width="16"
                          height="2"
                          rx="1"
                        />
                        <rect
                          fill="#000000"
                          opacity="0.3"
                          transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                          x="4"
                          y="11"
                          width="16"
                          height="2"
                          rx="1"
                        />
                      </g></svg
                  ></a>
                  <div>
                    <h6 class="mb-1">Notes</h6>
                    <p class="mb-0">Add New Nots</p>
                  </div>
                  <a href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="18px"
                      height="18px"
                      viewBox="0 0 24 24"
                      version="1.1"
                    >
                      <g
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <rect x="0" y="0" width="24" height="24" />
                        <path
                          d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                          opacity="0.3"
                        />
                        <path
                          d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                          fill="#000000"
                          fill-rule="nonzero"
                        />
                      </g></svg
                  ></a>
                </div>
                <div
                  class="card-body contacts_body p-0 dlab-scroll"
                  id="dlab_W_Contacts_Body2"
                >
                  <ul class="contacts">
                    <li class="active">
                      <div class="d-flex bd-highlight">
                        <div class="user_info">
                          <span>New order placed..</span>
                          <p>10 Aug 2020</p>
                        </div>
                        <div class="ms-auto">
                          <a href="#" class="btn btn-primary btn-xs sharp me-1"
                            ><i class="fas fa-pencil-alt"></i
                          ></a>
                          <a href="#" class="btn btn-danger btn-xs sharp"
                            ><i class="fa fa-trash"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="user_info">
                          <span>Youtube, a video-sharing website..</span>
                          <p>10 Aug 2020</p>
                        </div>
                        <div class="ms-auto">
                          <a href="#" class="btn btn-primary btn-xs sharp me-1"
                            ><i class="fas fa-pencil-alt"></i
                          ></a>
                          <a href="#" class="btn btn-danger btn-xs sharp"
                            ><i class="fa fa-trash"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="user_info">
                          <span>john just buy your product..</span>
                          <p>10 Aug 2020</p>
                        </div>
                        <div class="ms-auto">
                          <a href="#" class="btn btn-primary btn-xs sharp me-1"
                            ><i class="fas fa-pencil-alt"></i
                          ></a>
                          <a href="#" class="btn btn-danger btn-xs sharp"
                            ><i class="fa fa-trash"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex bd-highlight">
                        <div class="user_info">
                          <span>Athan Jacoby</span>
                          <p>10 Aug 2020</p>
                        </div>
                        <div class="ms-auto">
                          <a href="#" class="btn btn-primary btn-xs sharp me-1"
                            ><i class="fas fa-pencil-alt"></i
                          ></a>
                          <a href="#" class="btn btn-danger btn-xs sharp"
                            ><i class="fa fa-trash"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--**********************************
            Chat box End
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                        height="30" viewBox="0 0 24 24" fill="none" stroke="black"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" style="margin-left:-100%;">
                                    <li><a class="dropdown-item" href="#"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="#969ba0" viewBox="0 0 448 512"
                                                style="margin-left: 10px; margin-bottom: 5px; padding-right:5px">
                                                <path
                                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                            </svg> Profil</a></li>
                                    <li><a class="dropdown-item" href="#"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                fill="#969ba0" viewBox="0 0 512 512"
                                                style="margin-left: 10px; margin-bottom: 7px; padding-right:5px">
                                                <path
                                                    d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                                            </svg> Keluar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

      <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

      <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/profile/pic1.jpg') }}" width="20" alt="" />
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>Admin</b></span>
                                <small class="text-end font-w400 ">admin@gmail.com</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a href="app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ms-2 text-white">Profile </span>
                            </a>

                            <a href="/Login" class="dropdown-item ai-icon">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                    width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2 text-white">Logout </span>
                            </a>
                        </div>
                    </li>
                    <li><a class="ai-icon hover-red" href="/DashboardAdmin" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" style="font-size: 80px !important"
                                height="100" viewBox="0 -960 960 960" width="100">
                                <path
                                    d="M220-180h150v-250h220v250h150v-390L480-765 220-570v390Zm0 60q-24.75 0-42.375-17.625T160-180v-390q0-14.25 6.375-27T184-618l260-195q8.295-6 17.344-9 9.049-3 18.853-3 9.803 0 18.717 3 8.915 3 17.086 9l260 195q11.25 8.25 17.625 21T800-570v390q0 24.75-17.625 42.375T740-120H530v-250H430v250H220Zm260-353Z" />
                            </svg>
                            <span class="nav-text ">Dashboard</span>
                        </a>


                    </li>
                    <li><a class="ai-icon hover-red" href="/ApprovalAdmin" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M480-80q-85 0-158-30.5T195-195q-54-54-84.5-127T80-480q0-84 30.5-157T195-764q54-54 127-85t158-31q60 0 117 17.5T704-811q11 7 13.5 19t-5.5 22q-8 10-20 11t-23-6q-42-27-90-41t-99-14q-145 0-242.5 97.5T140-480q0 145 97.5 242.5T480-140q145 0 242.5-97.5T820-480q0-19-1.5-37t-5.5-35q-2-13 4-24t18-13q13-3 24 4.5t13 20.5q4 20 6 41t2 43q0 85-31 158t-85 127q-54 54-127 84.5T480-80Zm-59-309 392-392q9-9 22-9t23 9q10 10 10 23t-10 23L442-319q-9 9-21 9t-21-9L278-442q-9-9-8.5-22.5T279-487q9-9 22.5-9t22.5 9l97 98Z"/></svg>
                            <span class="nav-text ">Approval</span>
                        </a>

                    </li>
                    <li><a class=" ai-icon hover-red" href="AdminReport" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M349-250h262q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T611-310H349q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T349-250Zm0-170h262q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T611-480H349q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T349-420ZM220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h336q12.444 0 23.722 5T599-862l183 183q8 8 13 19.278 5 11.278 5 23.722v496q0 24-18 42t-42 18H220Zm331-584v-156H220v680h520v-494H581q-12.75 0-21.375-8.625T551-664ZM220-820v186-186 680-680Z"/></svg>
                            <span class="nav-text ">Laporan</span>
                        </a>

                    </li>
                    <li><a class="has-arrow ai-icon hover-red" href="javascript:void()" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M560-608q0-5.516 4.024-11.339 4.024-5.822 8.976-7.661 30-11 61.336-17 31.335-6 65.912-6 21.611 0 42.682 2.5Q764-645 784-640q6 2 11 7.395 5 5.396 5 12.14Q800-609 792.5-603t-18.5 3q-16.8-5-35.4-7.5Q720-610 700-610q-29 0-56 5.5T591-588q-14 5-22.5-.5T560-608Zm0 220q0-5.806 4.024-11.935 4.024-6.13 8.976-8.065 30-11 61.336-16.5 31.335-5.5 65.912-5.5 21.611 0 42.682 2.5Q764-425 784-420q6 2 11 7.395 5 5.396 5 12.14Q800-389 792.5-383t-18.5 3q-16.8-5-35.4-7.5Q720-390 700-390q-29 0-56 5t-53 16q-14 5-22.5 0t-8.5-19Zm0-110q0-5.516 4.024-11.339 4.024-5.822 8.976-7.661 30-11 61.336-17 31.335-6 65.912-6 21.611 0 42.682 2.5Q764-535 784-530q6 2 11 7.395 5 5.396 5 12.14Q800-499 792.5-493t-18.5 3q-16.8-5-35.4-7.5Q720-500 700-500q-29 0-56 5.5T591-478q-14 5-22.5-.5T560-498ZM248-300q53.566 0 104.283 12.5T452-250v-427q-45-30-97.619-46.5Q301.763-740 248-740q-38 0-74.5 9.5T100-707v434q31-14 70.5-20.5T248-300Zm264 50q50-25 98-37.5T712-300q38 0 78.5 6t69.5 16v-429q-34-17-71.822-25-37.823-8-76.178-8-54 0-104.5 16.5T512-677v427ZM276-489Zm206 318q-7.538 0-14.269-1.5T456-178q-47-29-99.847-45Q303.305-239 248-239q-36.537 0-71.768 9Q141-221 106-208q-23.1 11-44.55-3Q40-225 40-251v-463q0-15 7-27.5T68-761q42-20 87.395-29.5Q200.789-800 248-800q63 0 122.5 17T482-731q51-35 109.5-52T712-800q46.868 0 91.934 9.5Q849-781 891-761q14 7 21.5 19.5T920-714v463q0 27.894-22.5 42.447Q875-194 853-208q-34-14-69.232-22.5Q748.537-239 712-239q-54.275 0-106.137 16Q554-207 508-178q-5 4-11.731 5.5T482-171Z"/></svg>
                            <span class="nav-text ">Kehadiran</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/PresenceApproval" class="hover-red">Approval Presensi</a></li>
                            <li><a href="/WorkSchedule" class="hover-red">Jadwal Kerja</a></li>
                            <li><a href="/Presence" class="hover-red">Presensi</a></li>
                            <li><a href="/PermitLeaveAdmin" class="hover-red">Izin Cuti</a></li>


                        </ul>
                    </li>
                    <li><a class=" ai-icon hover-red" href="/" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M68-160q-13 0-21.5-8.5T38-190v-64q0-35 18-63.5t50-42.5q73-32 131.5-46T358-420q62 0 120 14t131 46q32 14 50.5 42.5T678-254v64q0 13-8.5 21.5T648-160H68Zm648 0q10-2 16-10.5t6-21.5v-62q0-63-32-103.5T622-423q69 8 130 23.5t99 35.5q33 19 52 47t19 63v64q0 13-8.5 21.5T892-160H716ZM358-481q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42Zm360-150q0 66-42 108t-108 42q-11 0-24.5-1.5T519-488q24-25 36.5-61.5T568-631q0-45-12.5-79.5T519-774q11-3 24.5-5t24.5-2q66 0 108 42t42 108ZM98-220h520v-34q0-16-9.5-31T585-306q-72-32-121-43t-106-11q-57 0-106.5 11T130-306q-14 6-23 21t-9 31v34Zm260-321q39 0 64.5-25.5T448-631q0-39-25.5-64.5T358-721q-39 0-64.5 25.5T268-631q0 39 25.5 64.5T358-541Zm0-90Zm0 271Z"/></svg>
                            <span class="nav-text ">Karyawan</span>
                        </a>

                    </li>
                    <li><a href="/Payroll" class="ai-icon hover-red" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M324-358q21 46 51.5 72.5T451-247v27q0 11 8.5 19t19.5 8q11 0 19-8.5t8-19.5v-24q61-7 95-37.5t34-81.5q0-51-29-83t-98-61q-58-24-84-43t-26-51q0-31 22.5-49t61.5-18q30 0 52 14t37 42l48-23q-17-35-45-55t-66-24v-24q0-11-8-19t-19-8q-11 0-19.5 8t-8.5 19v24q-51 7-80.5 37.5T343-602q0 49 30 78t90 54q67 28 92 50.5t25 55.5q0 32-26.5 51.5T487-293q-39 0-69.5-22T375-375l-51 17ZM480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z"/></svg>
                            <span class="nav-text ">Payroll</span>
                        </a>
                    </li>
                    <li><a class=" ai-icon" href="/Setting hover-red" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M546-80H414q-11 0-19.5-7T384-105l-16-101q-19-7-40-19t-37-25l-93 43q-11 5-22 1.5T159-220L93-337q-6-10-3-21t12-18l86-63q-2-9-2.5-20.5T185-480q0-9 .5-20.5T188-521l-86-63q-9-7-12-18t3-21l66-117q6-11 17-14.5t22 1.5l93 43q16-13 37-25t40-18l16-102q2-11 10.5-18t19.5-7h132q11 0 19.5 7t10.5 18l16 101q19 7 40.5 18.5T669-710l93-43q11-5 22-1.5t17 14.5l66 116q6 10 3.5 21.5T858-584l-86 61q2 10 2.5 21.5t.5 21.5q0 10-.5 21t-2.5 21l86 62q9 7 12 18t-3 21l-66 117q-6 11-17 14.5t-22-1.5l-93-43q-16 13-36.5 25.5T592-206l-16 101q-2 11-10.5 18T546-80Zm-66-270q54 0 92-38t38-92q0-54-38-92t-92-38q-54 0-92 38t-38 92q0 54 38 92t92 38Zm0-60q-29 0-49.5-20.5T410-480q0-29 20.5-49.5T480-550q29 0 49.5 20.5T550-480q0 29-20.5 49.5T480-410Zm0-70Zm-44 340h88l14-112q33-8 62.5-25t53.5-41l106 46 40-72-94-69q4-17 6.5-33.5T715-480q0-17-2-33.5t-7-33.5l94-69-40-72-106 46q-23-26-52-43.5T538-708l-14-112h-88l-14 112q-34 7-63.5 24T306-642l-106-46-40 72 94 69q-4 17-6.5 33.5T245-480q0 17 2.5 33.5T254-413l-94 69 40 72 106-46q24 24 53.5 41t62.5 25l14 112Z"/></svg>
                            <span class="nav-text ">Pengaturan</span>
                        </a>

                    </li>

                </ul>
                <div class="copyright">
                    <p class=""><strong>Kalopsia</strong> © 2022 All Rights Reserved</p>
                    <p class="fs-12 ">Made with <span class="heart" style="color: white"></span> by
                        Kalopsia</p>
                </div>
            </div>
        </div>


<div class="content-body">
  <div class="container-fluid">
    <!-- row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">
                       Presensi
                    </h4>
                </div>
                
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col-xl-3 col-lg-9 col-md-6 col-sm-1 mt-2">
                            <div class="button-group text-start">
                                <a href="/Validation" class="btn w-100 btn-outline-danger btn-xs">Atur Kebijakan Presensi</a>
                            </div>
                            
                        </div>
                        <div class="col-xl-9 col-lg-3 col-md-6 col-sm- mt-2 me-auto">
                            <div class="button-group text-end">
                                <button type="button" class="btn btn-outline-light custom-btn btn-xs">
                                    05/05/2023<span style="margin-left: 10px;"><i class="bi bi-calendar-check"></i></span>
                                </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button type="button" class="btn btn-primary btn-xs">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                      
                        <div class="table-responsive" >
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Shift</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Masuk</th>
                                        <th class="text-center">Keluar</th>
                                        <th class="text-center">Masuk Lembur</th>
                                        <th class="text-center">Keluar Lembur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-center">Tina</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-secondary dropdown-toggle btn-xs" data-bs-toggle="dropdown">Jam Kantor</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void()">Shift Pagi</a>
                                                <a class="dropdown-item" href="javascript:void()">Jam Kantor</a>
                                            </div>
                                        </div></td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-warning dropdown-toggle btn-xs text-start" data-bs-toggle="dropdown">Belum ada status</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void()">Belum ada status</a>
                                                <a class="dropdown-item" href="javascript:void()">Sudah Presensi</a>
                                            </div>
                                        </div></td>
                                        <td class="text-center">00.00 <span class="px-1">
                                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg></a>
                                            </span>
                                        </td>
                                        <td class="text-center">00.00
                                            <span class="px-1">
                                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                  </svg></a>
                                                </span>
                                        </td>
                                        <td class="text-center">00.00
                                            <span class="px-1">
                                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                  </svg></a>
                                                </span>
                                        </td>
                                        <td class="text-center">00.00
                                            <span class="px-1">
                                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                  </svg></a>
                                                </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="text-center">Jihan</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-bs-toggle="dropdown">Shift Pagi</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void()">Shift Pagi</a>
                                                <a class="dropdown-item" href="javascript:void()">Jam Kantor</a>
                                            </div>
                                        </div></td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-success dropdown-toggle btn-xs" data-bs-toggle="dropdown">Sudah Presensi</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
                                                <a class="dropdown-item" href="javascript:void()">Dropdown link</a>
                                            </div>
                                        </div></td>
                                        <td class="text-center">00.00
                                            <span class="px-1">
                                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                  </svg></a>
                                                </span>
                                        </td>
                                        <td class="text-center">00.00
                                            <span class="px-1">
                                                <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                  </svg></a>
                                                </span>
                                        </td>
                                        <td class="text-center">00.00
                                            <span class="px-1">
                                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg></a>
                                            </span>
                                        </td>
                                        <td class="text-center">00.00
                                            <span class="px-1">
                                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                              </svg></a>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                          <nav class="mt-3">
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
        <div class="footer">
            <div class="copyright">
              <p>
                Copyright © Designed &amp; Developed by
                <a href="https://dexignlab.com/" target="_blank">DexignLab</a>
                2022
              </p>
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
    
        <!-- <script>
          var kolomElements = document.getElementsByClassName('kolom');
    
    for (var i = 0; i < kolomElements.length; i++) {
      kolomElements[i].addEventListener('click', function() {
        var detail = this.nextElementSibling;
    
        // Menutup detail pada kolom lain yang sedang terbuka
        var semuaDetail = document.getElementsByClassName('detail');
        for (var j = 0; j < semuaDetail.length; j++) {
          if (semuaDetail[j] !== detail) {
            semuaDetail[j].style.display = 'none';
          }
        }
    
        // Menampilkan/menyembunyikan detail pada kolom yang diklik
        if (detail.style.display === 'none') {
          detail.style.display = 'table-cell';
        } else {
          detail.style.display = 'none';
        }
      });
    }
        </script> -->
      </body>
    
      <!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:40 GMT -->
    </html>
    