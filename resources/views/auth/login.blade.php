<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 13:00:47 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourCoupon | Login</title>
    <link rel="stylesheet" type="text/css" href="auth/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="auth/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="auth/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="auth/css/iofrm-theme5.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="/">
                <div class="logo">
                    <img class="logo-size" src="auth/images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="auth/images/graphic2.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="/login" class="active">Login</a><a href="/register">Register</a>
                        </div>
                        <form action="/login" method="POST">
                            @csrf
                @if (Session::has('success'))
                                        <div class="alert alert-dismissable alert-success">    
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                              {{ Session::get('success') }}
                                      </div>
                @endif

                @if (Session::has('status'))
                                        <div class="alert alert-dismissable alert-success">    
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                              {{ Session::get('status') }}
                                      </div>
                @endif
                            <input class="form-control" type="text" name="email" value="{{old('email')}}" placeholder="E-mail Address" required>

                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        @error('email')
                            <span style="color:white;">{{ $message }}</span>
                        @enderror
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="/forgot-password">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="auth/js/jquery.min.js"></script>
<script src="auth/js/popper.min.js"></script>
<script src="auth/js/bootstrap.min.js"></script>
<script src="auth/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 13:00:56 GMT -->
</html>