<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | KominfoMuda</title>

    <!-- Fonts & CSS -->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: linear-gradient(to right, #0f0f0f, #1a1a2e);
            color: #ffffff;
        }

        .login-card {
            background: linear-gradient(to right, #3a0ca3, #240046);
            border: none;
            border-radius: 1.5rem;
            box-shadow: 0 0 40px rgba(170, 0, 255, 0.2);
            overflow: hidden;
        }

        .bg-login-image {
            background: #1f1f2e;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg-login-image img {
            max-width: 75%;
        }

        .btn-login {
            background: linear-gradient(to right, #7209b7, #560bad);
            border: none;
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .btn-login:hover {
            background: linear-gradient(to right, #5f0a87, #a4508b);
            transform: scale(1.02);
        }

        .text-login {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: #e0aaff;
        }

        .form-control-user {
            border-radius: 10px;
            background-color: #2a2a3b;
            color: #ffffff;
            border: 1px solid #5a189a;
        }

        .form-control-user::placeholder {
            color: #cccccc;
        }

        a.small {
            color: #b197fc;
        }

        a.small:hover {
            color: #d0bfff;
        }
    </style>
</head>

<body>
@if (session('success'))
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            iconColor: '#10b981',
            customClass: {
                popup: 'colored-toast',
            },
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#1e1e2f',
            color: '#f9fafb',
        });

        Toast.fire({
            icon: 'success',
            title: '{{ session()->get('success') }}'
        });
    </script>
@endif

    <div class="container">

        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card login-card my-5">
                    <div class="row">
                        <!-- Image Side -->
                        <div class="col-lg-6 bg-login-image d-none d-lg-flex">
                            <img src="{{ asset('template/img/logokominfo.png') }}" alt="Kominfo Logo">
                        </div>

                        <!-- Form Side -->
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center mb-4">
                                    <h1 class="text-login">Login KominfoMuda</h1>
                                </div>

                                <form action="/login" method="POST" onsubmit="const submitBtn = document.getElementById('submitBtn'); submitBtn.disabled = true; submitBtn.textContent = 'Loading....'">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                                    </div>
                                    <button id="submitBtn" type="submit" class="btn btn-login btn-user btn-block">
                                        Login
                                    </button>
                                </form>

                                <div class="text-center mt-3">
                                    <a class="small" href="/new-account">Buat Akun Baru!</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- row -->
                </div> <!-- card -->
            </div>

        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
