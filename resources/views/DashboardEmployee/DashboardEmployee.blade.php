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

</head>

<body>

    <style>
        .responsive-button {
            padding: 5px;
        }

        .search-area {
            padding: 5px;
        }
        .red-hover:hover{
            color:#EE3232 !important;
        }
        .announcement{
            color: #EE3232 !important;
        }
        .brand-logo img {
        max-width: 80%;
        height: auto;
        }
    </style>


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
			<img id="logo" src="https://i.postimg.cc/k4bDT4Pz/kalopsia.jpg">
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
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown notification_dropdown mx-2">
                                    <a class="nav-link bell bell-link" href="javascript:void(0)">
                                     <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M27 7.88883C27 5.18897 24.6717 3 21.8 3C17.4723 3 10.5277 3 6.2 3C3.3283 3 1 5.18897 1 7.88883V23.7776C1 24.2726 1.31721 24.7174 1.80211 24.9069C2.28831 25.0963 2.8473 24.9912 3.2191 24.6417C3.2191 24.6417 5.74629 22.2657 7.27769 20.8272C7.76519 20.3688 8.42561 20.1109 9.11591 20.1109H21.8C24.6717 20.1109 27 17.922 27 15.2221V7.88883ZM24.4 7.88883C24.4 6.53951 23.2365 5.44441 21.8 5.44441C17.4723 5.44441 10.5277 5.44441 6.2 5.44441C4.7648 5.44441 3.6 6.53951 3.6 7.88883V20.8272L5.4382 19.0989C6.4132 18.1823 7.73661 17.6665 9.11591 17.6665H21.8C23.2365 17.6665 24.4 16.5726 24.4 15.2221V7.88883ZM7.5 15.2221H17.9C18.6176 15.2221 19.2 14.6745 19.2 13.9999C19.2 13.3252 18.6176 12.7777 17.9 12.7777H7.5C6.7824 12.7777 6.2 13.3252 6.2 13.9999C6.2 14.6745 6.7824 15.2221 7.5 15.2221ZM7.5 10.3333H20.5C21.2176 10.3333 21.8 9.7857 21.8 9.11104C21.8 8.43638 21.2176 7.88883 20.5 7.88883H7.5C6.7824 7.88883 6.2 8.43638 6.2 9.11104C6.2 9.7857 6.7824 10.3333 7.5 10.3333Z" fill="black"/>
                                        </svg>
                                    </a>
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
                        <a style="cursor: default;" class="nav-link" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/profile/pic1.jpg') }}" width="20" alt="Profil" />
                            <div class="header-info ms-3">
                                <span class="font-w600 ">Hi,<b>Anggie</b></span>
                                <small class="text-end font-w400">Anggie@gmail.com</small>
                            </div>
                        </a>

                    </li>
                    <li><a class="ai-icon red-hover" href=" /DashboardEmployee" aria-expanded="false">
                            <i><svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M220-180h150v-250h220v250h150v-390L480-765 220-570v390Zm-60 60v-480l320-240 320 240v480H530v-250H430v250H160Zm320-353Z" fill="black"/></svg></i>
                            <span class="nav-text">Beranda</span>
                        </a>


                    </li>
                    <li><a class="ai-icon red-hover" href="/EmployeePresence" aria-expanded="false">
                            <i><svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M140-80q-24 0-42-18t-18-42v-172h60v172h172v60H140ZM80-648v-172q0-24 18-42t42-18h172v60H140v172H80ZM648-80v-60h172v-172h60v172q0 24-18 42t-42 18H648Zm172-568v-172H648v-60h172q24 0 42 18t18 42v172h-60ZM480-480q-51 0-85.5-34.5T360-600q0-50 34.5-85t85.5-35q50 0 85 35t35 85q0 51-35 85.5T480-480Zm-.351-60Q505-540 522.5-557.149t17.5-42.5Q540-625 522.649-642.5t-43-17.5Q454-660 437-642.649t-17 43Q420-574 437.149-557t42.5 17ZM240-240v-76q0-27 17.5-47.5T300-397q42-22 86.943-32.5 44.942-10.5 93-10.5Q528-440 573-429.5t87 32.5q25 13 42.5 33.5T720-316v76H240Zm240-140q-47.546 0-92.773 13T300-328v28h360v-28q-42-26-87.227-39-45.227-13-92.773-13Zm0-220Zm0 300h180-360 180Z" fill="black"/></svg></i>
                            <span class="nav-text">Presensi</span>
                        </a>

                    </li>
                    <li><a class=" ai-icon red-hover" href="/PermitEmployee" aria-expanded="false">
                            <i><svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M733-229q27.917 0 47.458-19.559Q800-268.118 800-296.059T780.458-343Q760.917-362 733-362q-27.5 0-46.75 19.353t-19.25 47Q667-268 686.25-248.5T733-229Zm-.214 133Q766-96 795-111.5t47-42.5q-26-14-53-22.5t-56-8.5q-29 0-56 8.5T624-154q18 27 46.786 42.5 28.785 15.5 62 15.5ZM180-120q-24.75 0-42.375-17.625T120-180v-600q0-24.75 17.625-42.375T180-840h600q24.75 0 42.375 17.625T840-780v329q-14-8-29.5-13t-30.5-8v-308H180v600h309q4 16 9.023 31.172Q503.045-133.655 510-120H180Zm0-107v47-600 308-4 249Zm100-53h211q4-16 9-31t13-29H280v60Zm0-170h344q14-7 27-11.5t29-8.5v-40H280v60Zm0-170h400v-60H280v60ZM732.5-41Q655-41 600-96.5T545-228q0-78.435 54.99-133.717Q654.98-417 733-417q77 0 132.5 55.283Q921-306.435 921-228q0 76-55.5 131.5T732.5-41Z" fill="black"/></svg></i>
                            <span class="nav-text">Izin Cuti</span>
                        </a>

                    </li>
                    <li><a class="ai-icon red-hover" href="/ApprovalEmployee" aria-expanded="false">
                            <i><svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M132-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h696q24 0 42 18t18 42v600q0 24-18 42t-42 18H132Zm0-60h696v-600H132v600Zm68-100h200v-80H200v80Zm382-80 198-198-57-57-141 142-57-57-56 57 113 113Zm-382-80h200v-80H200v80Zm0-160h200v-80H200v80Zm-68 420v-600 600Z" fill="black"/></svg></i>
                            <span class="nav-text">Approval</span>
                        </a>
                    </li>
                    <li><a class=" ai-icon red-hover" href="/CompanyEmployee" aria-expanded="false">
                            <i><svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M80-120v-720h390v165h410v555H80Zm60-60h270v-105H140v105Zm0-165h270v-105H140v105Zm0-165h270v-105H140v105Zm0-165h270v-105H140v105Zm330 495h350v-435H470v435Zm80-270v-60h165v60H550Zm0 165v-60h165v60H550Z" fill="black"/></svg></i>
                            <span class="nav-text">Perusahaan</span>
                        </a>

                    </li>
                    <li><a href="/SalaryEmployee" class="ai-icon red-hover" aria-expanded="false">
                            <i><svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M540-420q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM220-280q-24.75 0-42.375-17.625T160-340v-400q0-24.75 17.625-42.375T220-800h640q24.75 0 42.375 17.625T920-740v400q0 24.75-17.625 42.375T860-280H220Zm100-60h440q0-42 29-71t71-29v-200q-42 0-71-29t-29-71H320q0 42-29 71t-71 29v200q42 0 71 29t29 71Zm480 180H100q-24.75 0-42.375-17.625T40-220v-460h60v460h700v60ZM220-340v-400 400Z" fill="black"/></svg></i>
                            <span class="nav-text">Gaji</span>
                        </a>
                    </li>
                    <li><a class=" ai-icon red-hover" href="/Calendar" aria-expanded="false">
                            <i><svg  xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48"><path d="M596.817-220Q556-220 528-248.183q-28-28.183-28-69T528.183-386q28.183-28 69-28T666-385.817q28 28.183 28 69T665.817-248q-28.183 28-69 28ZM180-80q-24 0-42-18t-18-42v-620q0-24 18-42t42-18h65v-60h65v60h340v-60h65v60h65q24 0 42 18t18 42v620q0 24-18 42t-42 18H180Zm0-60h600v-430H180v430Zm0-490h600v-130H180v130Zm0 0v-130 130Z" fill="black"/></svg></i>
                            <span class="nav-text">Kalender</span>
                        </a>

                    </li>

                </ul>
            </div>
</div>

        {{-- Chatbox --}}
        <div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<div>
									<h6 class="mb-1">Pengumunam</h6>
								</div>
							</div>
							<div class="card-body contacts_body p-0 dlab-scroll" id="dlab_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">30/05/2023</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-danger">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">30/05/2023</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p class="text-danger">Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">30/05/2023</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>AharlieKane</span>
												<p class="text-danger">Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p class="text-danger">Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-body">
								<div class="d-xl-flex d-block align-items-start description-bx">
									<div class="col-xl-4 card-info text-white d-flex justify-content-center">
										<img src="https://i.postimg.cc/jjKwr4TP/dashboard.png" class="" alt="">

									</div>
									<div class="col-xl-8 mt-5" style="margin-top: 5%;">
										<h6 class="card-title" style="font-weight: bold; font-size: 25px;">Selamat Datang
											Anggie!</h6>
										<span class="" style="font-size: 16px;">Bekerja lebih mudah dan cepat bersama
											kami. Jangan lupa ikuti trainingnya.....</span>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card">
						<div class="card-body">
							<div class="row justify-content-center">
								<div class="col-4 col-xl-1 col-lg-1 col-sm-2 col-md-2 mt-4">
									<a href="/EmployeePresence" class="bg-success text-white d-flex flex-column align-items-center p-2"
										style="border-radius: 8px; width: 50px; height: 50px; margin-right: 30px; ">

										<i class="bi bi-stopwatch d-flex justify-content-center"
											style="font-size: 22px; margin-top: 5px;"></i>
										<span style="font-size: 12px; color: black; width: 90px;"
											class="text-center mt-3">Presensi</span>

									</a>

								</div>
								<div class="col-4 col-xl-1 col-lg-1 col-sm-2 col-md-2 mt-4">
									<a href="/PermitEmployee" class="bg-danger text-white d-flex flex-column align-items-center p-2"
										style="border-radius: 8px; width: 50px; height: 50px; margin-right: 20px;">

										<i class="bi bi-briefcase d-flex justify-content-center"
											style="font-size: 22px; margin-top: 5px;"></i>
										<span style="font-size: 12px; color: black; width: 90px;" class="text-center mt-3">Izin
											Cuti</span>

									</a>

								</div>
								<div class="col-4 col-xl-1 col-lg-1 col-sm-2 col-md-2 mt-4">
									<a href="/SalaryEmployee" class=" text-white d-flex flex-column align-items-center p-2"
										style="border-radius: 8px; width: 50px; height: 50px; margin-right: 20px; background-color: #60D394;">

										<i class="bi bi-wallet2 d-flex justify-content-center"
											style="font-size: 22px; margin-top: 5px;"></i>
										<span style="font-size: 12px; color: black; width: 200px;"
											class="text-center mt-3">Gaji</span>

									</a>

								</div>



								<div class="col-4 col-xl-1 col-lg-1 col-sm-2 col-md-2 mt-4">
									<a href="/CompanyEmployee" class=" text-white d-flex flex-column align-items-center p-2"
										style="border-radius: 8px; width: 50px; height: 50px; margin-right: 20px; background-color: #FFD97D;">

										<i class="bi bi-building d-flex justify-content-center"
											style="font-size: 22px; margin-top: 5px;"></i>
										<span style="font-size: 12px; color: black; width: 200px;"
											class="text-center mt-3">Perusahaan</span>

									</a>

								</div>
								<div class="col-4 col-xl-1 col-lg-1 col-sm-2 col-md-2 mt-4">
									<a href="/ApprovalEmployee" class=" text-white d-flex flex-column align-items-center p-2"
										style="border-radius: 8px; width: 50px; height: 50px; margin-right: 20px; background-color: #FF9B85;">

										<i class="bi bi-clipboard-check d-flex justify-content-center"
											style="font-size: 22px; margin-top: 5px;"></i>
										<span style="font-size: 12px; color: black; width: 200px;"
											class="text-center mt-3">Approval</span>

									</a>

								</div>

								<div class="col-4 col-xl-1 col-lg-1 col-sm-3 col-md-2 mt-4">
									<a href="/Calendar" class=" text-white d-flex flex-column align-items-center p-2"
										style="border-radius: 8px; width: 50px; height: 50px; margin-right: 20px; background-color: #146C94;">

										<i class="bi bi-calendar-event d-flex justify-content-center"
											style="font-size: 22px; margin-top: 5px;"></i>
										<span style="font-size: 12px; color: black; width: 200px;"
											class="text-center mt-3">Kalender</span>

									</a>
								</div>
							</div>
							<div class="row form-material">
								<div class="col-xl-12 mt-5">
									<div class="card card-cd" style="border-top-color: red;">
										<div class="card-header d-block">
											<h4 class="card-title" style="text-align: center; font-weight: bold;">Pengumuman</h4>
											<div class="row">
												<div class="col-xl-6 mt-3">
													<div class="alert alert-warning alert-dismissible fade show">

														<div class="media">
															<div class="media-body" style="color: black;">
																<h5 class="mt-1 mb-1">Pengumuman</h5>
																<hr>
																<p class="mb-0">Hari ini di karenakan perusahaan...</p>
																<a href="javascript:void(0)" class="text-red d-flex justify-content-end nav-link bell bell-link announcement red-hover">Lihat</a>

															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-6 mt-3">
													<div class="alert alert-warning alert-dismissible fade show">

														<div class="media">
															<div class="media-body" style="color: black;">
																<h5 class="mt-1 mb-1">Pengumuman</h5>
																<hr>
																<p class="mb-0">Hari ini di karenakan perusahaan...</p>
																<a href="javascript:void(0)" class="text-red d-flex justify-content-end nav-link bell bell-link announcement red-hover">Lihat</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
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
        <div class="footer">

            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://dexignlab.com/" target="_blank">Kalopsia</a> 2022</p>
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
    <script>
        var isAlternateLogo = false;
        var originalLogoSrc = "https://i.postimg.cc/k4bDT4Pz/kalopsia.jpg";
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

</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/transaction-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:53:23 GMT -->
</html>
