<!DOCTYPE html>
<html lang="zxx" dir="ltr">


<!-- Mirrored from www.indonez.com/html-demo/Liquid/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 18:27:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta name="description" content="Premium HTML5 Template by Indonez">
    <meta name="keywords" content="blockit, uikit3, indonez, handlebars, scss, vanilla javascript">
    <meta name="author" content="Indonez">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f2f3f5" />
    <!-- Site Properties -->
    <title>Sign in - Liquid HTML5 Template</title>
    <!-- Critical preload -->
    <link rel="preload" href="js/vendors/uikit.min.js" as="script">
    <link rel="preload" href="css/vendors/uikit.min.css" as="style">
    <link rel="preload" href="css/style.css" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="fonts/inter-v2-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/inter-v2-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/inter-v2-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Favicon and apple icon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/vendors/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- preloader begin -->
    <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- preloader end -->
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-container uk-container-expand">
                <div class="uk-grid" data-uk-height-viewport="expand: true">
                    <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url(img/in-signin-image.jpg);"></div>
                    <div class="uk-width-expand@m uk-flex uk-flex-middle">
                        <div class="uk-grid uk-flex-center">
                            <div class="uk-width-3-5@m">
                                <div class="in-padding-horizontal@s">
                                    <!-- logo begin -->
                                    <a class="uk-logo" href="{{ url('/') }}">
                                        <img src="img/in-lazy.gif" data-src="img/in-logo-2.svg" alt="logo" width="160" height="34" data-uk-img>
                                    </a>
                                    <!-- logo end -->
                                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">Log into your account</p>
                                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">Don't have an account? <a href="{{ route('register') }}">Register here</a></p>
                                    <!-- login form begin -->
                                    <form class="uk-grid uk-form" method="POST">
                                        @csrf
                                        <!-- labelling -->
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                                            <input id="email username" type="email" class="form-control @error('email') is-invalid @enderror uk-input uk-border-rounded" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-Mail">
                                            <!-- <input class="uk-input uk-border-rounded" id="username" value="" type="text" placeholder="Username"> -->
                                           
                                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror
                                        </div>
                                       <!-- labelling for password -->
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror uk-input uk-border-rounded" name="password" required autocomplete="current-password" placeholder="Password">

                                            <!-- <input class="uk-input uk-border-rounded" id="password" value="" type="password" placeholder="Password"> -->
                                             @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                       </span>
                                   @enderror
                                        </div>
                                        <div class="uk-margin-small uk-width-auto uk-text-small">
                                                <input class="form-check-input uk-checkbox uk-border-rounded" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <!-- <input class="uk-checkbox uk-border-rounded" type="checkbox"> Remember me -->
                                                <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                           </label>
                                        </div>
                                                                                <div class="uk-margin-small uk-width-1-1">
                                            <!-- <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button> -->
                                            <button type="submit" class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded">
                                          {{ __('Login') }}
                                         </button>
                                     <div class="uk-margin-small uk-width-expand uk-text-small">
                                            <label class="uk-align-right">
                                                      @if (Route::has('password.request'))
                                           <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                          </a>
                                         @endif   
                                            </label>
                                   
                                        </div>

                                        </div>
                                    </form>
                                    <!-- login form end -->
                                    <p class="uk-heading-line uk-text-center"><span>Or sign in with</span></p>
                                    <div class="uk-margin-medium-bottom uk-text-center">
                                        <a class="uk-button uk-button-small uk-border-rounded in-brand-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                                        <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
    <!-- Javascript -->
    <script src="js/vendors/uikit.min.js"></script>
    <script src="js/vendors/blockit.min.js"></script>
    <script src="js/config-theme.js"></script>
</body>


<!-- Mirrored from www.indonez.com/html-demo/Liquid/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2022 18:27:20 GMT -->
</html>