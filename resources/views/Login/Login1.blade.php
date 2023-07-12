<!DOCTYPE html>
<html lang="en" class="h-100">


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

    <title>Login Kalopsia</title>

    <link rel="shortcut icon" type="image/png" href="https://i.postimg.cc/P55dtZjM/Logo-A-1.png" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
      /* Add additional CSS styles here */
      .red-hover{
        background-color:#EE3232 !important ;
        border:1px solid#EE3232 !important ;
      }
      .logo {
          width: 100px;
      }

      .login-image {
          width: 100% !important;
          max-width: 450px;
      }

      @media (max-width: 576px) {
          .authincation-content {
              max-width: 100%;
              padding: 0 15px;
          }

          .card {
              height: auto;
              width: 100%;
          }
      }

      @media (min-width: 576px) {
          .authincation-content {
              max-width: 540px;
              margin: 0 auto;
          }
      }

      @media (min-width: 768px) {
          .authincation-content {
              max-width: 720px;
              margin: 0 auto;
          }
      }

      @media (min-width: 992px) {
          .authincation-content {
              max-width: 800px;
              margin: 0 auto;
          }
      }

      @media (min-width: 1200px) {
          .authincation-content {
              max-width: 960px;
              margin: 0 auto;
          }
      }

      /* .card {
          height: 400px;
          width: max-content !important;
          margin-left: 50px;
          margin-top: 0%;
      } */

      .card-body {
          display: flex;
          flex-direction: column;
          justify-content: center;
      }
      .login-image {
        margin-top: 10px; /* Ganti nilai ini sesuai kebutuhan Anda */
        }
    </style>
</head>

<body class="vh-100">
    <div class="authincation">
        <div class="card-body">
            <div class="col-xl-12">
                <div class="card-body">
                    <div class="row no-gutters">
                            <div class="auth-form">
                                <div class="row">

                                    <div class="col-lg-5">
                                        <div class="text-left mb-3">
                                            <img src="{{ asset('gambar/login1.png') }}" alt="" class="login-image">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="text-left">
                                            <div class="">
                                                <div class="">
                                                    <h3 class="mb-4">Login</h3>
                                                    <h6 class="mb-4">Silahkan Masukkan Email dan Password Terlebih Dahulu!</h6>
                                                    <form action="/loginuser" method="POST" autocomplete="off">
                                                        @csrf
                                                        <div class="ml-5">
                                                            <label class="mb-6">Email</label>
                                                            <input type="email" name="email" class="form-control" placeholder="example@gmail.com" required>
                                                        </div>
                                                        <br>
                                                        <div class="ml-5">
                                                            <label class="mb-1">Password</label>
                                                            <input name="password" type="password" class="form-control" placeholder="Password" required>
                                                        </div>
                                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                                            <div class="mb-3">
                                                            </div>
                                                        </div>
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-danger btn-block red-hover">Login</button>
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
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>

    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	<script src="js/styleSwitcher.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @if(Session::has('error'))
        <script>

        toastr.options =
        {
            "timeOut"       : 0, // Set timeOut to 0 to make it sticky
            "closeButton"   : true,
            "progressBar"   : true
        }
        toastr.error("{{ session('error') }}");
        </script>
        @endif

</body>

</html>
