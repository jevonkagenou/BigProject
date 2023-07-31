<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dompet.dexignlab.com/xhtml/ecom-checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:53:29 GMT -->

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
    <link href="{{ asset('vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fullcalendar/css/main.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>
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

    .fc-button-active {
        background-color: #EE3232 !important;
    }

    .fc-button:hover {
        background-color: #EE3232 !important;
    }

    .red-hover:hover {
        color: #EE3232 !important;
        fill: red !important
    }

    .red-icon path {
        fill: red;
    }

    .btn-outline-danger:checked {
        color: white !important;
    }

    .brand-logo img {
        max-width: 80%;
        height: auto;
    }

    .gambar img {
        max-width: 80%;
        height: auto;
    }

    .circle {
        background-color: #EE3232;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .circle i {
        color: white;
        font-size: 35px;
    }

    .circle p {
        color: white;
        text-align: center;
    }
</style>

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

        <!--**********************************
            Chat box start
        ***********************************-->
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
                                {{ $tittle }}
                            </div>
                        </div>
                        <div class="justify-content-end">
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
                                        <li><a class="dropdown-item" href="{{url('logout')}}"><svg
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
            <div class="dlabnav-scroll  mm-active ps ps--active-y">
                <ul class="metismenu  mm-show" id="menu">
                    <li class="dropdown header-profile">
                        <a class="nav-link" style="cursor: default;" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('gambar/' . $admin->foto) }}" width="20" alt="" />
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>Admin</b></span>
                                <small class="text-end font-w400 ">admin@gmail.com</small>
                            </div>
                        </a>
                    </li>
                    <li><a class="ai-icon red-hover" href="/ " aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" style="font-size: 80px !important"
                                height="100" viewBox="0 -960 960 960" width="100">
                                <path
                                    d="M220-180h150v-250h220v250h150v-390L480-765 220-570v390Zm0 60q-24.75 0-42.375-17.625T160-180v-390q0-14.25 6.375-27T184-618l260-195q8.295-6 17.344-9 9.049-3 18.853-3 9.803 0 18.717 3 8.915 3 17.086 9l260 195q11.25 8.25 17.625 21T800-570v390q0 24.75-17.625 42.375T740-120H530v-250H430v250H220Zm260-353Z" />
                            </svg>
                            <span class="nav-text ">Dashboard</span>
                        </a>


                    </li>
                    <li><a class="ai-icon red-hover" href="/ApprovalAdmin" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M480-80q-85 0-158-30.5T195-195q-54-54-84.5-127T80-480q0-84 30.5-157T195-764q54-54 127-85t158-31q60 0 117 17.5T704-811q11 7 13.5 19t-5.5 22q-8 10-20 11t-23-6q-42-27-90-41t-99-14q-145 0-242.5 97.5T140-480q0 145 97.5 242.5T480-140q145 0 242.5-97.5T820-480q0-19-1.5-37t-5.5-35q-2-13 4-24t18-13q13-3 24 4.5t13 20.5q4 20 6 41t2 43q0 85-31 158t-85 127q-54 54-127 84.5T480-80Zm-59-309 392-392q9-9 22-9t23 9q10 10 10 23t-10 23L442-319q-9 9-21 9t-21-9L278-442q-9-9-8.5-22.5T279-487q9-9 22.5-9t22.5 9l97 98Z" />
                            </svg>
                            <span class="nav-text ">Approval</span>
                        </a>

                    </li>
                    @if ($tittle == 'Izin Cuti Admin')
                        <li class="mm-active"><a class="ai-icon red-hover " href="/PermitLeaveAdmin"
                                aria-expanded="false">
                                <svg class="svg red-icon" xmlns="http://www.w3.org/2000/svg" height="48"
                                    viewBox="0 -960 960 960" width="48">
                                    <path
                                        d="M121-120v-60h720v60H121Zm63-208L81-503l43-8 70 62 226-61-171-287 58-17 285 257 216-58q27-8 49 9.5t22 46.5q0 19-11.5 34T838-505L184-328Z" />
                                </svg>
                                <span class="nav-text ">Izin Cuti</span>
                            </a>
                        </li>
                    @endif
                    @if ($tittle !== 'Izin Cuti Admin')
                        <li><a class="ai-icon red-hover" href="/PermitLeaveAdmin" aria-expanded="false">
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                    viewBox="0 -960 960 960" width="48">
                                    <path
                                        d="M121-120v-60h720v60H121Zm63-208L81-503l43-8 70 62 226-61-171-287 58-17 285 257 216-58q27-8 49 9.5t22 46.5q0 19-11.5 34T838-505L184-328Z" />
                                </svg>
                                <span class="nav-text ">Izin Cuti</span>
                            </a>
                        </li>
                    @endif
                    @if ($tittle == 'Laporan')
                        <li class="mm-active"><a class="ai-icon red-hover " href="/AdminReport"
                                aria-expanded="false">
                                <svg class="svg red-icon" xmlns="http://www.w3.org/2000/svg" height="48"
                                    viewBox="0 -960 960 960" width="48">
                                    <path
                                        d="M349-250h262q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T611-310H349q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T349-250Zm0-170h262q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T611-480H349q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T349-420ZM220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h336q12.444 0 23.722 5T599-862l183 183q8 8 13 19.278 5 11.278 5 23.722v496q0 24-18 42t-42 18H220Zm331-584v-156H220v680h520v-494H581q-12.75 0-21.375-8.625T551-664ZM220-820v186-186 680-680Z" />
                                </svg>
                                <span class="nav-text ">Laporan</span>
                            </a>
                        </li>
                    @endif
                    @if ($tittle !== 'Laporan')
                        <li><a class=" ai-icon red-hover" href="/AdminReport" aria-expanded="false">
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                    viewBox="0 -960 960 960" width="48">
                                    <path
                                        d="M349-250h262q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T611-310H349q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T349-250Zm0-170h262q12.75 0 21.375-8.675 8.625-8.676 8.625-21.5 0-12.825-8.625-21.325T611-480H349q-12.75 0-21.375 8.675-8.625 8.676-8.625 21.5 0 12.825 8.625 21.325T349-420ZM220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h336q12.444 0 23.722 5T599-862l183 183q8 8 13 19.278 5 11.278 5 23.722v496q0 24-18 42t-42 18H220Zm331-584v-156H220v680h520v-494H581q-12.75 0-21.375-8.625T551-664ZM220-820v186-186 680-680Z" />
                                </svg>
                                <span class="nav-text ">Laporan</span>
                            </a>

                        </li>
                    @endif
                    <li><a class="has-arrow ai-icon red-hover" href="javascript:void()" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M560-608q0-5.516 4.024-11.339 4.024-5.822 8.976-7.661 30-11 61.336-17 31.335-6 65.912-6 21.611 0 42.682 2.5Q764-645 784-640q6 2 11 7.395 5 5.396 5 12.14Q800-609 792.5-603t-18.5 3q-16.8-5-35.4-7.5Q720-610 700-610q-29 0-56 5.5T591-588q-14 5-22.5-.5T560-608Zm0 220q0-5.806 4.024-11.935 4.024-6.13 8.976-8.065 30-11 61.336-16.5 31.335-5.5 65.912-5.5 21.611 0 42.682 2.5Q764-425 784-420q6 2 11 7.395 5 5.396 5 12.14Q800-389 792.5-383t-18.5 3q-16.8-5-35.4-7.5Q720-390 700-390q-29 0-56 5t-53 16q-14 5-22.5 0t-8.5-19Zm0-110q0-5.516 4.024-11.339 4.024-5.822 8.976-7.661 30-11 61.336-17 31.335-6 65.912-6 21.611 0 42.682 2.5Q764-535 784-530q6 2 11 7.395 5 5.396 5 12.14Q800-499 792.5-493t-18.5 3q-16.8-5-35.4-7.5Q720-500 700-500q-29 0-56 5.5T591-478q-14 5-22.5-.5T560-498ZM248-300q53.566 0 104.283 12.5T452-250v-427q-45-30-97.619-46.5Q301.763-740 248-740q-38 0-74.5 9.5T100-707v434q31-14 70.5-20.5T248-300Zm264 50q50-25 98-37.5T712-300q38 0 78.5 6t69.5 16v-429q-34-17-71.822-25-37.823-8-76.178-8-54 0-104.5 16.5T512-677v427ZM276-489Zm206 318q-7.538 0-14.269-1.5T456-178q-47-29-99.847-45Q303.305-239 248-239q-36.537 0-71.768 9Q141-221 106-208q-23.1 11-44.55-3Q40-225 40-251v-463q0-15 7-27.5T68-761q42-20 87.395-29.5Q200.789-800 248-800q63 0 122.5 17T482-731q51-35 109.5-52T712-800q46.868 0 91.934 9.5Q849-781 891-761q14 7 21.5 19.5T920-714v463q0 27.894-22.5 42.447Q875-194 853-208q-34-14-69.232-22.5Q748.537-239 712-239q-54.275 0-106.137 16Q554-207 508-178q-5 4-11.731 5.5T482-171Z" />
                            </svg>
                            <span class="nav-text ">Kehadiran</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/WorkSchedule" class="red-hover">Jadwal Kerja</a></li>
                            <li><a href="/Presence" class="red-hover">Presensi</a></li>
                        </ul>
                    </li>
                    <li><a class=" ai-icon red-hover" href="/EmployeeAdmin" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M68-160q-13 0-21.5-8.5T38-190v-64q0-35 18-63.5t50-42.5q73-32 131.5-46T358-420q62 0 120 14t131 46q32 14 50.5 42.5T678-254v64q0 13-8.5 21.5T648-160H68Zm648 0q10-2 16-10.5t6-21.5v-62q0-63-32-103.5T622-423q69 8 130 23.5t99 35.5q33 19 52 47t19 63v64q0 13-8.5 21.5T892-160H716ZM358-481q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42Zm360-150q0 66-42 108t-108 42q-11 0-24.5-1.5T519-488q24-25 36.5-61.5T568-631q0-45-12.5-79.5T519-774q11-3 24.5-5t24.5-2q66 0 108 42t42 108ZM98-220h520v-34q0-16-9.5-31T585-306q-72-32-121-43t-106-11q-57 0-106.5 11T130-306q-14 6-23 21t-9 31v34Zm260-321q39 0 64.5-25.5T448-631q0-39-25.5-64.5T358-721q-39 0-64.5 25.5T268-631q0 39 25.5 64.5T358-541Zm0-90Zm0 271Z" />
                            </svg>
                            <span class="nav-text ">Karyawan</span>
                        </a>

                    </li>
                    <li><a href="/StartPayroll" class="ai-icon red-hover" aria-expanded="false">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                viewBox="0 -960 960 960" width="48">
                                <path
                                    d="M324-358q21 46 51.5 72.5T451-247v27q0 11 8.5 19t19.5 8q11 0 19-8.5t8-19.5v-24q61-7 95-37.5t34-81.5q0-51-29-83t-98-61q-58-24-84-43t-26-51q0-31 22.5-49t61.5-18q30 0 52 14t37 42l48-23q-17-35-45-55t-66-24v-24q0-11-8-19t-19-8q-11 0-19.5 8t-8.5 19v24q-51 7-80.5 37.5T343-602q0 49 30 78t90 54q67 28 92 50.5t25 55.5q0 32-26.5 51.5T487-293q-39 0-69.5-22T375-375l-51 17ZM480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" />
                            </svg>
                            <span class="nav-text ">Payroll</span>
                        </a>
                    </li>
                    @if ($tittle == 'Pengaturan')
                        <li class="mm-active"><a class=" ai-icon  red-hover" href="/Setting" aria-expanded="false">
                                <svg class="svg red-icon" xmlns="http://www.w3.org/2000/svg" height="48"
                                    viewBox="0 -960 960 960" width="48">
                                    <path
                                        d="M546-80H414q-11 0-19.5-7T384-105l-16-101q-19-7-40-19t-37-25l-93 43q-11 5-22 1.5T159-220L93-337q-6-10-3-21t12-18l86-63q-2-9-2.5-20.5T185-480q0-9 .5-20.5T188-521l-86-63q-9-7-12-18t3-21l66-117q6-11 17-14.5t22 1.5l93 43q16-13 37-25t40-18l16-102q2-11 10.5-18t19.5-7h132q11 0 19.5 7t10.5 18l16 101q19 7 40.5 18.5T669-710l93-43q11-5 22-1.5t17 14.5l66 116q6 10 3.5 21.5T858-584l-86 61q2 10 2.5 21.5t.5 21.5q0 10-.5 21t-2.5 21l86 62q9 7 12 18t-3 21l-66 117q-6 11-17 14.5t-22-1.5l-93-43q-16 13-36.5 25.5T592-206l-16 101q-2 11-10.5 18T546-80Zm-66-270q54 0 92-38t38-92q0-54-38-92t-92-38q-54 0-92 38t-38 92q0 54 38 92t92 38Zm0-60q-29 0-49.5-20.5T410-480q0-29 20.5-49.5T480-550q29 0 49.5 20.5T550-480q0 29-20.5 49.5T480-410Zm0-70Zm-44 340h88l14-112q33-8 62.5-25t53.5-41l106 46 40-72-94-69q4-17 6.5-33.5T715-480q0-17-2-33.5t-7-33.5l94-69-40-72-106 46q-23-26-52-43.5T538-708l-14-112h-88l-14 112q-34 7-63.5 24T306-642l-106-46-40 72 94 69q-4 17-6.5 33.5T245-480q0 17 2.5 33.5T254-413l-94 69 40 72 106-46q24 24 53.5 41t62.5 25l14 112Z" />
                                </svg>
                                <span class="nav-text ">Pengaturan</span>
                            </a>

                        </li>
                    @endif
                    @if ($tittle !== 'Pengaturan')
                        <li><a class=" ai-icon  red-hover" href="/Setting" aria-expanded="false">
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="48"
                                    viewBox="0 -960 960 960" width="48">
                                    <path
                                        d="M546-80H414q-11 0-19.5-7T384-105l-16-101q-19-7-40-19t-37-25l-93 43q-11 5-22 1.5T159-220L93-337q-6-10-3-21t12-18l86-63q-2-9-2.5-20.5T185-480q0-9 .5-20.5T188-521l-86-63q-9-7-12-18t3-21l66-117q6-11 17-14.5t22 1.5l93 43q16-13 37-25t40-18l16-102q2-11 10.5-18t19.5-7h132q11 0 19.5 7t10.5 18l16 101q19 7 40.5 18.5T669-710l93-43q11-5 22-1.5t17 14.5l66 116q6 10 3.5 21.5T858-584l-86 61q2 10 2.5 21.5t.5 21.5q0 10-.5 21t-2.5 21l86 62q9 7 12 18t-3 21l-66 117q-6 11-17 14.5t-22-1.5l-93-43q-16 13-36.5 25.5T592-206l-16 101q-2 11-10.5 18T546-80Zm-66-270q54 0 92-38t38-92q0-54-38-92t-92-38q-54 0-92 38t-38 92q0 54 38 92t92 38Zm0-60q-29 0-49.5-20.5T410-480q0-29 20.5-49.5T480-550q29 0 49.5 20.5T550-480q0 29-20.5 49.5T480-410Zm0-70Zm-44 340h88l14-112q33-8 62.5-25t53.5-41l106 46 40-72-94-69q4-17 6.5-33.5T715-480q0-17-2-33.5t-7-33.5l94-69-40-72-106 46q-23-26-52-43.5T538-708l-14-112h-88l-14 112q-34 7-63.5 24T306-642l-106-46-40 72 94 69q-4 17-6.5 33.5T245-480q0 17 2.5 33.5T254-413l-94 69 40 72 106-46q24 24 53.5 41t62.5 25l14 112Z" />
                                </svg>
                                <span class="nav-text ">Pengaturan</span>
                            </a>

                        </li>
                    @endif

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
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
                                            @guest
                                                <a href="/DashboardAdmin" class="header-widget" title="Akun Saya">
                                                    <img src="{{ asset('gambar/' . $admin->foto) }}" class="edit-image"
                                                        style="width: 90px; float: left; border-radius: 50%;"
                                                        alt="">
                                                </a>
                                            @else 
                                                {{-- @if (Auth::user()->foto) --}}
                                                    <a href="/profile" class="header-widget ms-auto" title="Akun Saya">
                                                        <img src="{{ asset('images/profile/' . $admin->foto) }}"
                                                            class="edit-image"
                                                            style="width: 90px; float: left; border-radius: 50%;"
                                                            alt="">
                                                    </a>
                                                {{-- @else
                                                    <a href="/profile" class="header-widget" title="Akun Saya">
                                                        <img src="{{ asset('gambar/' . $admin->foto) }}"
                                                            class="edit-image"
                                                            style="width: 90px; float: left; border-radius: 50%;"
                                                            alt="">
                                                    </a>
                                                @endif --}}
                                        </div>
                                        <div class="dropdown-content">
                                            <a data-bs-toggle="modal" data-bs-target="#editprofilkaryawan"
                                                class="text-red d-flex" type="button">Edit Foto Profil</a>
                                            <a href="#">Hapus Foto Profil</a>
                                        </div>
                                    </div>
                                    <form action="/updateFotoadmin/{{ $admin->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal fade" id="editprofilkaryawan">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit Foto Profil</h5>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row g-0 mb-3 justify-content-center">
                                                            <img src="{{ asset('gambar/' . $admin->foto) }}"
                                                                class="edit-image"
                                                                style="width: 90px; float: left; border-radius: 50%;"
                                                                alt="">
                                                        </div>
                                                        <div class="row g-0">
                                                            <br>
                                                            <div class="profile-statistics mb-3">
                                                                <div class="input-group">
                                                                    <div class="form-file">
                                                                        <input type="file"
                                                                            class="form-file-input form-control"
                                                                            id="foto" name="foto" multiple>
                                                                        <div id="fileName"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex justify-content-end">
                                                            <button type="submit"
                                                                class="btn btn-danger btn-xs ms-auto mb-3"
                                                                style="margin-left: auto !important">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


                                    <p></p>
                                    <div class="profile-statistics">
                                        <div class="text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <h5 class="m-b-0">{{ $admin->name }}</h5>
                                                    <span>{{ $admin->email }}</span>
                                                </div>
                                            </div>
                                            <div class="mt-2 badge rounded-pill bg-danger badge-xs">
                                                Admin
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
                            <h5 class="nav-item strong card-header" data-bs-toggle="tab">Edit Profil</h5>
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <form action="/updateProfile/{{ $admin->id }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">E-mail</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="email" name="email"
                                                        class="form-control" placeholder="Email"
                                                        value="{{ $admin->email }}" />
                                                </div>
                                            </div>

                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Nama Admin</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="name" name="name"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        placeholder="Nama" value="{{ $admin->name }}" />
                                                    @error('name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="notelp" name="notelp"
                                                        class="form-control @error('notelp') is-invalid  @enderror"
                                                        placeholder="No. Telp" value="{{ $admin->notelp }}">
                                                    @error('notelp')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <hr class="mb-2" />
                                            <div class="row">
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn btn-danger btn-xs">
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
                        <h5 class="nav-item strong card-header" data-bs-toggle="tab">Ubah Password</h5>
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <form action="/changePassword/{{ $admin->id }}" method="post">
                                        @csrf
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kata Sandi Lama</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control"
                                                    placeholder="Kata Sandi Lama" name="current_password" />
                                                @error('current_password')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kata Sandi Baru</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control"
                                                    placeholder="Kata Sandi Baru"name="new_password" />
                                                @error('new_password')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Konfirmasi Password Baru</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control"
                                                    placeholder="Konfirmasi Password Baru"
                                                    name="new_password_confirmation" />
                                                @error('new_password_confirmation')
                                                    <div class="text-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <hr class="mb-2" />
                                        <div class="row">
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-danger btn-xs">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if (Session::has('success'))
        <script>
            toastr.options = {
                "timeOut": 5000, // Set timeOut to 0 to make it sticky
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
