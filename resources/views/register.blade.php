<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Footer-Multi-Column-icons.css') }}">
</head>

<body class="bg-gradient-primary">
    <div class="container" style="padding-left: 2px;padding-right: 0px;">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image"
                            style="background: url(&quot;assets/img/Logo%20for%20Project.jpg&quot;) repeat-x;background-size: cover;margin-bottom: -2px;padding-bottom: 0px;padding-right: 0px;margin-right: -10px;">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user" id="studentForm" method="POST" action="{{ route('users.register') }}">
                                @csrf
                                <div class="mb-3">
                                    <input class="form-control form-control-user" type="text" id="username"
                                        placeholder="Username" name="username">
                                    @error('username')
                                        <p class="fs-6 text-danger">Username needs Minimum 5 characters</p>
                                    @enderror
                                    <input class="form-control form-control-user" type="text" id="name"
                                        placeholder="Enter name" name="name">
                                    @error('name')
                                        <p class="fs-6 text-danger">Name is Required</p>
                                    @enderror
                                </div>
                                <div class="mb-3"><input class="form-control form-control-user" type="email"
                                        id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address"
                                        name="email"></div>
                                @error('email')
                                    <p class="fs-6 text-danger">Email Invalid</p>
                                @enderror
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user"
                                            id="password" type="password" placeholder="Password" name="password"></div>
                                    @error('password')
                                        <p class="fs-6 text-danger">Password needs to be 8 Minimum characters</p>
                                    @enderror
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password"
                                            id="exampleRepeatPasswordInput" placeholder="Repeat Password"
                                            name="password_repeat"></div>
                                </div><button class="btn btn-primary d-block btn-user w-100"
                                    type="submit">Register</button>
                                <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2" role="button"><i
                                        class="fab fa-google"></i>&nbsp; Register with Google</a>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center"><a class="small" href="login.html">Already have an account?
                                    Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>

</body>

</html>
