
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-error-403.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:41 GMT -->
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
    <link href="css/style.css" rel="stylesheet">
    <style>
        .btn-primary {
        background-color: red;
        color: white;
    }

    .btn-primary:hover {
        background-color: red;
        color: white;
    }
    </style>
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text  fw-bold">403</h1>
                        <h4><i class="fa fa-times-circle text-danger"></i> Forbidden Error!</h4>
                        <p>Anda Tidak Dapat Masuk ke Halaman ini, Silahkan Tekan Button Dibawah Untuk Kembali!</p>
                        <div>
                            @if(auth()->user()->hasRole('Admin'))
                                <a class="btn btn-primary" href="{{ route('DashboardAdmin') }}">Kembali</a>
                            @else
                                <a class="btn btn-primary" href="{{ route('DashboardEmployee') }}">Kembali</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-error-403.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 May 2023 08:54:41 GMT -->
</html>
