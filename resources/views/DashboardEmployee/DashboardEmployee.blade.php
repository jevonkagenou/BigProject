<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/xhtml/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dompet : Payment Admin Template" />
    <meta property="og:title" content="Dompet : Payment Admin Template" />
    <meta property="og:description" content="Dompet : Payment Admin Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Kalopsia</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/P55dtZjM/Logo-A-1.png" />
    <!-- Datatable -->
    <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    {{-- css toastr --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.css"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('css/marquee.css') }}">

    <style>
        .responsive-button {
            padding: 5px;
        }

        .search-area {
            padding: 5px;
        }

        .red-hover:hover {
            color: #EE3232 !important;
            fill: red !important
        }

        .red-icon path {
            fill: red;
        }

        .announcement {
            color: #EE3232 !important;
        }

        .brand-logo img {
            max-width: 80%;
            height: auto;
        }

        .marquee {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        @media only screen and (max-width: 480px) {
            marquee {
                overflow: auto;
                white-space: nowrap;
                margin-left: -70% !important;
                width: 600px !important;
            }
        }

        .marquee {
            animation: scroll 20s linear infinite;
            white-space: nowrap;
            overflow: hidden;
        }

        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        marquee {
            width: 100%;
            color: white;
            overflow: hidden;
            white-space: nowrap;
            background-color: #EE3232;
            font: 'Cairo', sans-serif;
        }

        marquee {
            display: flex;
            justify-content: space-between;
        }

        #dlab_W_Notification1 {
            max-height: 280px;
            overflow-y: auto;
        }
    </style>

</head>

<body>



    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="waviy">
            <span style="--i:1">L</span>
            <span style="--i:2">o</span>
            <span style="--i:3">a</span>
            <span style="--i:4">d</span>
            <span style="--i:5">i</span>
            <span style="--i:6">n</span>
            <span style="--i:7">g</span>
            <span style="--i:8">.</span>
            <span style="--i:9">.</span>
            <span style="--i:10">.</span>
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
                <img id="logo" src="https://i.postimg.cc/MpM0gDDQ/Logo-kal.png">
            </a>
            <div class="nav-control" onclick="changeLogo()">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Beranda
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0);" role="button"
                                    data-bs-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z"
                                            fill="#4f7086" />
                                    </svg>
                                    @if ($unreadNotifications != 0)
                                    <span
                                        class="badge light text-white bg-primary rounded-circle">{{ $unreadNotifications }}</span>
                                    @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="dlab_W_Notification1" class="widget-media dlab-scroll p-3">
                                        <ul class="timeline">
                                            @foreach ($notif as $notification)
                                                <li>
                                                    <div class="timeline-panel">
                                                        @if ($notification->status == 'Ditolak')
                                                            <form action="/markAsRead/{{ $notification->id }}"
                                                                method="POST" class="media me-2 media-info">
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        height="28" viewBox="0 -960 960 960"
                                                                        width="28">
                                                                        <path fill="white"
                                                                            d="M294-242 70-466l43-43 181 181 43 43-43 43Zm170 0L240-466l43-43 181 181 384-384 43 43-427 427Zm0-170-43-43 257-257 43 43-257 257Z" />
                                                                    </svg></button>
                                                            </form>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Permintaan anda</h6>
                                                                <span
                                                                    class="badge badge-danger mb-1">{{ $notification->status }}</span>
                                                                <span class="d-block">Pada Tanggal
                                                                    {{ \Carbon\Carbon::parse($notification->updated_at)->format('d M Y') }}
                                                                    Karena</span>
                                                                <h6>
                                                                    {!! $notification->reason !!}
                                                                </h6>
                                                            </div>
                                                        @elseif ($notification->status == 'Diterima')
                                                            <form action="/markAsRead/{{ $notification->id }}"
                                                                method="POST" class="media me-2 media-info">
                                                                @csrf
                                                                <button type="submit" class="btn btn-success"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        height="28" viewBox="0 -960 960 960"
                                                                        width="28">
                                                                        <path fill="white"
                                                                            d="M294-242 70-466l43-43 181 181 43 43-43 43Zm170 0L240-466l43-43 181 181 384-384 43 43-427 427Zm0-170-43-43 257-257 43 43-257 257Z" />
                                                                    </svg></button>
                                                            </form>
                                                            <div class="media-body">
                                                                <h6 class="mb-1">Permintaan anda</h6>
                                                                <span
                                                                    class="badge badge-success mb-1">{{ $notification->status }}</span>
                                                                <span class="d-block">Pada Tanggal
                                                                    {{ \Carbon\Carbon::parse($notification->updated_at)->format('d M Y') }}
                                                                </span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>

                                    </div>
                                    @if ($unreadNotifications >= 1)
                                    <form action="{{ route('readAll') }}" method="POST" class="all-notification">
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-xs text-white">Tandai Semua Telah Dibaca</button>
                                    </form>
                                    @endif
                                </div>
                            </li>
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
                                    <li><a class="dropdown-item" href="/ProfileEmployee"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="#969ba0" viewBox="0 0 448 512"
                                                style="margin-left: 10px; margin-bottom: 5px; padding-right:5px">
                                                <path
                                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                            </svg> Profil</a></li>
                                    <li><a class="dropdown-item" href="{{ url('logout') }}"><svg
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
            {{-- <div class="container"> --}}
            <marquee behavior="scroll" direction="left" scrollamount="4"
                style="font-size: 15px; font: 'Cairo' , sans-serif; margin-left:3px;">
                {{-- <span> SISA CUTI ANDA TINGGAL 4 HARI LAGI </span> | --}}
                <span style="color: yellow; font-size: 15px; font: 'Cairo' , sans-serif;"> JANGAN LUPA PRESENSI UNTUK
                    HARI INI!!</span>
            </marquee>

            {{-- </div> --}}
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
                        <a style="cursor: default;" class="nav-link" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/profile/pic1.jpg') }}" width="20" alt="Profil" />
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>{{ Auth()->user()->name }}</b></span>
                                <small class="text-end font-w400">{{ Auth()->user()->email }}</small>
                            </div>
                        </a>

                    </li>
                    <li><a class="ai-icon red-hover" href=" /DashboardEmployee" aria-expanded="false">
                            <svg class="red-icon" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M220-180h150v-250h220v250h150v-390L480-765 220-570v390Zm-60 60v-480l320-240 320 240v480H530v-250H430v250H160Zm320-353Z" />
                            </svg></i>
                            <span class="nav-text">Beranda</span>
                        </a>


                    </li>
                    <li><a class="ai-icon red-hover" href="/EmployeePresence" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M140-80q-24 0-42-18t-18-42v-172h60v172h172v60H140ZM80-648v-172q0-24 18-42t42-18h172v60H140v172H80ZM648-80v-60h172v-172h60v172q0 24-18 42t-42 18H648Zm172-568v-172H648v-60h172q24 0 42 18t18 42v172h-60ZM480-480q-51 0-85.5-34.5T360-600q0-50 34.5-85t85.5-35q50 0 85 35t35 85q0 51-35 85.5T480-480Zm-.351-60Q505-540 522.5-557.149t17.5-42.5Q540-625 522.649-642.5t-43-17.5Q454-660 437-642.649t-17 43Q420-574 437.149-557t42.5 17ZM240-240v-76q0-27 17.5-47.5T300-397q42-22 86.943-32.5 44.942-10.5 93-10.5Q528-440 573-429.5t87 32.5q25 13 42.5 33.5T720-316v76H240Zm240-140q-47.546 0-92.773 13T300-328v28h360v-28q-42-26-87.227-39-45.227-13-92.773-13Zm0-220Zm0 300h180-360 180Z" />
                            </svg></i>
                            <span class="nav-text">Presensi</span>
                        </a>

                    </li>
                    <li><a class=" ai-icon red-hover" href="/PermitEmployee" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M733-229q27.917 0 47.458-19.559Q800-268.118 800-296.059T780.458-343Q760.917-362 733-362q-27.5 0-46.75 19.353t-19.25 47Q667-268 686.25-248.5T733-229Zm-.214 133Q766-96 795-111.5t47-42.5q-26-14-53-22.5t-56-8.5q-29 0-56 8.5T624-154q18 27 46.786 42.5 28.785 15.5 62 15.5ZM180-120q-24.75 0-42.375-17.625T120-180v-600q0-24.75 17.625-42.375T180-840h600q24.75 0 42.375 17.625T840-780v329q-14-8-29.5-13t-30.5-8v-308H180v600h309q4 16 9.023 31.172Q503.045-133.655 510-120H180Zm0-107v47-600 308-4 249Zm100-53h211q4-16 9-31t13-29H280v60Zm0-170h344q14-7 27-11.5t29-8.5v-40H280v60Zm0-170h400v-60H280v60ZM732.5-41Q655-41 600-96.5T545-228q0-78.435 54.99-133.717Q654.98-417 733-417q77 0 132.5 55.283Q921-306.435 921-228q0 76-55.5 131.5T732.5-41Z" />
                            </svg></i>
                            <span class="nav-text">Izin Cuti</span>
                        </a>

                    </li>
                    <li><a class="ai-icon red-hover" href="/ApprovalEmployee" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M132-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h696q24 0 42 18t18 42v600q0 24-18 42t-42 18H132Zm0-60h696v-600H132v600Zm68-100h200v-80H200v80Zm382-80 198-198-57-57-141 142-57-57-56 57 113 113Zm-382-80h200v-80H200v80Zm0-160h200v-80H200v80Zm-68 420v-600 600Z" />
                            </svg></i>
                            <span class="nav-text">Approval</span>
                        </a>
                    </li>
                    <li><a href="/SalaryEmployee" class="ai-icon red-hover" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M540-420q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM220-280q-24.75 0-42.375-17.625T160-340v-400q0-24.75 17.625-42.375T220-800h640q24.75 0 42.375 17.625T920-740v400q0 24.75-17.625 42.375T860-280H220Zm100-60h440q0-42 29-71t71-29v-200q-42 0-71-29t-29-71H320q0 42-29 71t-71 29v200q42 0 71 29t29 71Zm480 180H100q-24.75 0-42.375-17.625T40-220v-460h60v460h700v60ZM220-340v-400 400Z" />
                            </svg></i>
                            <span class="nav-text">Gaji</span>
                        </a>
                    </li>
                    <li><a class=" ai-icon red-hover" href="/Calendar" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M596.817-220Q556-220 528-248.183q-28-28.183-28-69T528.183-386q28.183-28 69-28T666-385.817q28 28.183 28 69T665.817-248q-28.183 28-69 28ZM180-80q-24 0-42-18t-18-42v-620q0-24 18-42t42-18h65v-60h65v60h340v-60h65v60h65q24 0 42 18t18 42v620q0 24-18 42t-42 18H180Zm0-60h600v-430H180v430Zm0-490h600v-130H180v130Zm0 0v-130 130Z" />
                            </svg></i>
                            <span class="nav-text">Kalender</span>
                        </a>

                    </li>

                </ul>
            </div>
        </div>

        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="marquee">
            <span>Ini adalah teks yang bergerak dari kanan ke kiri.</span>
        </div>
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-xl-flex d-block align-items-start description-bx">
                                    <div class="col-xl-4 card-info text-white d-flex justify-content-center">
                                        <img src="https://i.postimg.cc/jjKwr4TP/dashboard.png" class=""
                                            alt="">

                                    </div>
                                    <div class="col-xl-8 mt-5" style="margin-top: 5%;">
                                        <h6 class="card-title" style="font-weight: bold; font-size: 25px;">Selamat
                                            Datang
                                            {{ Auth()->user()->name }}!</h6>
                                        <span class="" style="font-size: 16px;">Bekerja lebih mudah dan cepat
                                            bersama
                                            kami. Jangan lupa ikuti trainingnya.....</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="row form-material">
                            <div class="col-xl-12">
                                <div class="" style="border-top-color: red;">
                                    <div class="card-header d-block">
                                        <h4 class="card-title" style="text-align: center; font-weight: bold;">
                                            Pengumuman</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            @foreach ($data as $row)
                                                <div class="col-xl-6 mt-3">
                                                    <div class="alert alert-warning alert-dismissible fade show">

                                                        <div class="media">
                                                            <div class="media-body" style="color: black;">
                                                                <div class="row">
                                                                    <div class="col-7 mt-1">
                                                                        <h5 class="">{{ $row->judul }}</h5>
                                                                    </div>
                                                                    <div class="col-5 text-end mt-1">
                                                                        <span
                                                                            style="color: gray;">{{ $row->created_at->format('D M Y') }}</span>
                                                                    </div>
                                                                </div>

                                                                <hr>
                                                                <p class="mb-0">{!! $row->isi !!}</p>
                                                                <a data-bs-toggle="modal"
                                                                    data-bs-target="#lihat-pengumuman{{ $row->id }}"
                                                                    class="text-red d-flex justify-content-end"
                                                                    type="button">Lihat</a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- modal lihat pengumuman --}}
                                                <div class="modal fade" id="lihat-pengumuman{{ $row->id }}">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">{{ $row->judul }}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal">
                                                                </button>
                                                            </div>
                                                            <p class="mb-0 text-red"
                                                                style="text-align: left; padding-left: 30px;">
                                                                {{ $row->created_at->format('D M Y') }}</p>
                                                            <div class="modal-body">
                                                                <div class="row g-0">
                                                                    <p>{!! $row->isi !!}</p>
                                                                </div>
                                                                @if ($row->lampiran)
                                                                    <div class="row g-0">
                                                                        <div class="d-flex justify-content-end">
                                                                            <a href="/blank/{{ $row->id }}"
                                                                                target="_blank">Lampiran</a>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    {{-- chart rekap gaji --}}
                    <div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-8 col-sm-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">Statistik Gaji Per Bulan</h4>
                                            </div>
                                            <div class="card-body">
                                                <div id="chart"></div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-xl-4 col-xxl-4 col-lg-4">
                                        <div class="card">
                                            <div class="card-header border-0 pb-0">
                                                <h4 class="card-title">Jam Kerja</h4>
                                            </div>
                                            <div class="card-body">
                                                <div id="dlab_W_TimeLine" class="widget-timeline dlab-scroll height370">
                                                    <ul class="timeline">
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted" href="#">
                                                                <span>Senin</span>
                                                                <h6 class="mb-0">07.00 - 12.00</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted" href="#">
                                                                <span>Senin</span>
                                                                <h6 class="mb-0">07.00 - 12.00</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted" href="#">
                                                                <span>Senin</span>
                                                                <h6 class="mb-0">07.00 - 12.00</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted" href="#">
                                                                <span>Senin</span>
                                                                <h6 class="mb-0">07.00 - 12.00</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted" href="#">
                                                                <span>Senin</span>
                                                                <h6 class="mb-0">07.00 - 12.00</h6>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="timeline-badge danger">
                                                            </div>
                                                            <a class="timeline-panel text-muted" href="#">
                                                                <span>Senin</span>
                                                                <h6 class="mb-0">07.00 - 12.00</h6>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
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
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/"
                        target="_blank">Kalopsia</a>
                    2022</p>
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

    {{-- cdn toastr --}}
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/build/toastr.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.css"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{-- toastr --}}
    @if (Session::has('error'))
        <script>
            toastr.options = {
                "timeOut": 0, // Set timeOut to 0 to make it sticky
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        </script>
    @endif
    @if (Session::has('success'))
        <script>
            toastr.options = {
                "timeOut": 0, // Set timeOut to 0 to make it sticky
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        </script>
    @endif



    <script>
        var isAlternateLogo = false;
        var originalLogoSrc = "https://i.postimg.cc/MpM0gDDQ/Logo-kal.png";
        var alternateLogoSrc = "https://i.postimg.cc/XNR73XHZ/Logo-A.png";

        function changeLogo() {
            var logo = document.getElementById("logo");

            if (isAlternateLogo) {
                logo.src = originalLogoSrc;
                isAlternateLogo = false;
            } else {
                logo.src = alternateLogoSrc;
                isAlternateLogo = true;
            }
        }
    </script>
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <!-- Apex Chart -->
    <script src="vendor/apexchart/apexchart.js"></script>
    <script src="js/dashboard/transaction-details.js"></script>
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>



    {{-- chart --}}
    <script>
        var options = {
            series: [{
                data: [21, 22, 10, 28, 16, 21, 13, 30, 50, 21, 10, 25]
            }],
            chart: {
                height: 350,
                type: 'bar',
                events: {
                    click: function(chart, w, e) {}
                }
            },
            colors: ['#EE3232'],
            plotOptions: {
                bar: {
                    columnWidth: '40%',
                    distributed: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            xaxis: {
                categories: [
                    'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember',
                ],
                labels: {
                    style: {
                        colors: ['#000000'],
                        // Dalam Code ini Length: 8 berfungsi untuk mengulangi warna sebanyak jumlah data dalam Categories //
                        // colors: Array.from({
                        //     length: 8
                        // }, (_, index) => ['#CF0000', '#890596', '#1CC5DC'][index % 3]),
                        fontSize: '12px'
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>


</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/transaction-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:53:23 GMT -->

</html>
