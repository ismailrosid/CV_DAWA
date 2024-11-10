<!doctype html>
<html lang="en">

<head>
    <title>ADM - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.min.css') }}">
    <style>
        .login-wrap {
            position: relative;
            background: #000232;
            border-radius: 5px;
            padding-left: 30px;
            padding-right: 30px;
            -webkit-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
            box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
        }

        .login-wrap h3 {
            font-weight: 400;
            font-size: 18px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .login-wrap p {
            color: rgba(255, 255, 255, 0.5);
        }

        .login-wrap .img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
            margin-bottom: 20px;
        }

        .form-group {
            position: relative;
        }

        .form-group .icon {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            width: 20px;
            height: 48px;
            background: transparent;
            font-size: 18px;
        }

        .form-group .icon span {
            color: rgba(0, 0, 0, 0.8) !important;
        }

        .form-control {
            height: 48px;
            background: rgba(255, 255, 255, 0.05);
            color: rgba(0, 0, 0, 0.8) !important;
            font-size: 14px;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-radius: 0;
            border: none;
            border-bottom: 1px solid #7fad39;
            padding-left: 30px;
            padding-right: 0;
            letter-spacing: 1px;
            -webkit-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }
    </style>
    {{-- SweetAlert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake img-fluid" src="{{ asset('front/img/logo.png') }}" alt="">
    </div>
    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Opps!',
                text: '{{ session('error') }}',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

    <section class=" ftco-section d-flex align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap bg-white py-5">
                        <div class="d-flex align-items-center justify-content-center mb-5">
                            <img class="img-fluid" src="{{ asset('front/img/logo.png') }}" alt="">
                        </div>

                        <form method="POST" action="{{ route('admin.login.auth') }}" class="login-form" id="loginForm">
                            @csrf
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-user"></span>
                                </div>
                                <input type="text" name="username"
                                    class="form-control 
                            @error('username') is-invalid @enderror 
                            @if (old('username')) is-valid @endif"
                                    placeholder="Username" value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-lock"></span>
                                </div>
                                <input type="password" name="password"
                                    class="form-control 
                            @error('password') is-invalid @enderror 
                            @if (old('password')) is-valid @endif"
                                    placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="w-100 mt-4 btn btn-primary rounded submit px-3">LOGIN</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
    <script>
        // Trigger loading before form submission
        $(document).ready(function() {
            // Prevent form submission
            $('.preloader').hide();
            $('#loginForm').on('submit', function(e) {
                e.preventDefault(); // Prevent form submission
                $('.preloader').css('height', '100vh').show();
                $('.preloader').children().show(); // Menampilkan elemen anak
                // Submit the form after a small delay to show loading
                setTimeout(() => {
                    this.submit(); // Submit the form
                }, 1000); // Delay 1 second before submitting (can be adjusted)
            });
        });
    </script>
</body>

</html>
