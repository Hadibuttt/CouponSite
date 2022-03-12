<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/forget5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 13:02:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>YourCoupon | Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="auth/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="auth/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="auth/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="auth/css/iofrm-theme5.css">
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
                        <h3>Password Reset</h3>
                        <p>To reset your password, enter the email address you use to sign in to iofrm</p>
                        <form action="/forgot-password" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                            <div class="form-button full-width">
                                <button id="submit" type="submit" class="ibtn">Send Reset Link</button>
                            </div>
                            
                        @error('email')
                            <span style="color:white;">{{ $message }}</span>
                        @enderror

                    @if (session('status'))
                        <span style="color:white;">{{ session('status') }}</span>
                    @endif
                        </form>
                    </div>

                        <div class="form-sent">
                            <div class="tick-holder">
                                <div class="tick-icon"></div>
                            </div>
                            <h3>Password link sent</h3>
                            <p>Please check your inbox <a href="http://brandio.io/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b02040d19062b02040d19061f0e061b070a1f0e450204">[email&#160;protected]</a></p>
                            <div class="info-holder">
                                <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="auth/js/jquery.min.js"></script>
<script src="auth/js/popper.min.js"></script>
<script src="auth/js/bootstrap.min.js"></script>
<script src="auth/js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/forget5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Mar 2022 13:02:27 GMT -->
</html>