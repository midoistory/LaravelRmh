<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('adminsb/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('adminsb/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Full Name" value="{{ old('name') }}" name="name">
                                        @error('name')
                                            <span id="terms-error" class="error invalid-feedback"
                                                style="display: inline; color:red; font-size: 10px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control @error('email') is-invalid
                                        @enderror"
                                        placeholder="Email Address" value="{{ old('email') }}" name="email">
                                    @error('email')
                                        <span span id="terms-error" class="error invalid-feedback"
                                            style="display: inline; color:red; font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number"
                                        class="form-control @error('umur') is-invalid
                                        @enderror"
                                        placeholder="Your Age" name="umur">
                                    @error('umur')
                                        <span span id="terms-error" class="error invalid-feedback"
                                            style="display: inline; color:red; font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="alamat"
                                        class="form-control @error('alamat') is-invalid
                                        @enderror"
                                        placeholder="Your Address" value="{{ old('alamat') }}" name="alamat">
                                    @error('alamat')
                                        <span span id="terms-error" class="error invalid-feedback"
                                            style="display: inline; color:red; font-size: 10px;">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid
                                        @enderror"
                                            placeholder="Password" name="password">
                                        @error('password')
                                            <span span id="terms-error" class="error invalid-feedback"
                                                style="display: inline; color:red; font-size: 10px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid
                                        @enderror"
                                            placeholder="Password" name="password_confirmation">
                                        @error('password')
                                            <span span id="terms-error" class="error invalid-feedback"
                                                style="display: inline; color:red; font-size: 10px;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="{{ route('auth.login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('adminsb/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminsb/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('adminsb/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('adminsb/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
