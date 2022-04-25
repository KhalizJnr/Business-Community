        <!DOCTYPE html>
        <html lang="en">

        <!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 13:46:30 GMT -->
        <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form by Colorlib</title>

        <link rel="stylesheet" href="{{ asset('things/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

        <link rel="stylesheet" href="{{ asset('things/css/style.css') }}">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

        <!-- Preloadin' -->
        <link rel="stylesheet" href="css/vendors/uikit.min.css">
    <link rel="stylesheet" href="css/style.css">
     <link rel="preload" href="js/vendors/uikit.min.js" as="script">
    <link rel="preload" href="{{ asset('css/vendors/uikit.min.css') }}" as="style">
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style">
    <!-- Icon preload -->
    <link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
    <!-- Font preload -->
    <link rel="preload" href="fonts/inter-v2-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/inter-v2-latin-500.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="fonts/inter-v2-latin-700.woff2" as="font" type="font/woff2" crossorigin>


        <meta name="robots" content="noindex, follow">
        <script nonce="e8219ac4-3492-4d7f-a9a6-f42c09aa4c86">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="../../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>
        <body>
            <div class="in-loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
        <div class="main">

        <section class="signup">
        <div class="container">
        <div class="signup-content">
        <div class="signup-form">
        <h2 class="form-title">Sign up</h2>
        <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
           @csrf
        <div class="form-group">

        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
        <!-- <input type="text" name="name" id="name" placeholder="Your Name" /> -->
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">
                               @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
        <label for="email"><i class="zmdi zmdi-email"></i></label>
        <!-- <input type="email" name="email" id="email" placeholder="Your Email" /> -->
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
        <!-- <input type="password" name="pass" id="pass" placeholder="Password" /> -->
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
        <!-- <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" /> -->
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">

        </div>
        <div class="form-group">
        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required />
        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
        </div>
        <div class="form-group form-button">
        <!-- <input type="submit" name="signup" id="signup" class="form-submit" value="Register" /> -->
         <button type="submit" class="form-submit" style="font-size: 20px ; font-family: 'Questrial', sans-serif">{{ __('Register') }}</button>
        </div>
        </form>
        </div>
        <div class="signup-image">
        <figure><img src="{{ asset('things/images/signup-image.jpg') }}" alt="sing up image"></figure>
        <a href="{{ route('login') }}" class="signup-image-link">I am already member</a>
        </div>
        </div>
        </div>
        </section>

        </div>

        <script src="{{ asset('things/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('things/js/main.js') }}"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
        </script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"70178671cd09d7ad","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
        <script src="{{ asset('js/vendors/uikit.min.js') }}"></script>
        <script src="{{ asset('js/vendors/blockit.min.js') }}"></script>
        <script src="{{ asset('js/config-theme.js') }}"></script>

        </body>

        <!-- Mirrored from colorlib.com/etc/regform/colorlib-regform-7/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Apr 2022 13:46:33 GMT -->
        </html>