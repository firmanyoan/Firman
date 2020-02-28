<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel navbar-secondary bg-secondary">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" class="d-block" viewBox="0 0 612 612" role="img" focusable="false"><title>Bootstrap</title><path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"></path><path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"></path></svg>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Documentation</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Examples</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Icons</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Themes</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Expo</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">Blog</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item dropdown">
                            <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                v4.4
                            </a>
                            <div class="dropdown-menu dropdown-menu-md-right" aria-labelledby="bd-versions">
                                <a class="dropdown-item active" href="/docs/4.4/">Latest (4.4.x)</a>
                                <a class="dropdown-item" href="https://getbootstrap.com/docs/4.3/">v4.3.1</a>
                                <a class="dropdown-item" href="https://getbootstrap.com/docs/4.2/">v4.2.1</a>
                                <a class="dropdown-item" href="https://getbootstrap.com/docs/4.0/">v4.0.0</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://v4-alpha.getbootstrap.com/">v4 Alpha 6</a>
                                <a class="dropdown-item" href="https://getbootstrap.com/docs/3.4/">v3.4.1</a>
                                <a class="dropdown-item" href="https://getbootstrap.com/docs/3.3/">v3.3.7</a>
                                <a class="dropdown-item" href="https://getbootstrap.com/2.3.2/">v2.3.2</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/docs/versions/">All versions</a>
                            </div>
                        </li>
                        <li class="nav-item" style="margin-top: -9px;">
                            <a class="nav-link p-2" href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener" aria-label="GitHub"></a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 499.36" role="img" focusable="false"><title>GitHub</title><path fill="currentColor" fill-rule="evenodd" d="M256 0C114.64 0 0 114.61 0 256c0 113.09 73.34 209 175.08 242.9 12.8 2.35 17.47-5.56 17.47-12.34 0-6.08-.22-22.18-.35-43.54-71.2 15.49-86.2-34.34-86.2-34.34-11.64-29.57-28.42-37.45-28.42-37.45-23.27-15.84 1.73-15.55 1.73-15.55 25.69 1.81 39.21 26.38 39.21 26.38 22.84 39.12 59.92 27.82 74.5 21.27 2.33-16.54 8.94-27.82 16.25-34.22-56.84-6.43-116.6-28.43-116.6-126.49 0-27.95 10-50.8 26.35-68.69-2.63-6.48-11.42-32.5 2.51-67.75 0 0 21.49-6.88 70.4 26.24a242.65 242.65 0 0 1 128.18 0c48.87-33.13 70.33-26.24 70.33-26.24 14 35.25 5.18 61.27 2.55 67.75 16.41 17.9 26.31 40.75 26.31 68.69 0 98.35-59.85 120-116.88 126.32 9.19 7.9 17.38 23.53 17.38 47.41 0 34.22-.31 61.83-.31 70.23 0 6.85 4.61 14.81 17.6 12.31C438.72 464.97 512 369.08 512 256.02 512 114.62 397.37 0 256 0z"></path></svg>
                        </li>
                        <li class="nav-item ml-3" style="margin-top: -9px;">
                            <a class="nav-link p-2" href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener" aria-label="GitHub"></a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 416.32" role="img" focusable="false"><title>Twitter</title><path fill="currentColor" d="M160.83 416.32c193.2 0 298.92-160.22 298.92-298.92 0-4.51 0-9-.2-13.52A214 214 0 0 0 512 49.38a212.93 212.93 0 0 1-60.44 16.6 105.7 105.7 0 0 0 46.3-58.19 209 209 0 0 1-66.79 25.37 105.09 105.09 0 0 0-181.73 71.91 116.12 116.12 0 0 0 2.66 24c-87.28-4.3-164.73-46.3-216.56-109.82A105.48 105.48 0 0 0 68 159.6a106.27 106.27 0 0 1-47.53-13.11v1.43a105.28 105.28 0 0 0 84.21 103.06 105.67 105.67 0 0 1-47.33 1.84 105.06 105.06 0 0 0 98.14 72.94A210.72 210.72 0 0 1 25 370.84a202.17 202.17 0 0 1-25-1.43 298.85 298.85 0 0 0 160.83 46.92"></path></svg>
                        </li>
                        <li class="nav-item ml-3" style="margin-top: -9px;">
                            <a class="nav-link p-2" href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener" aria-label="GitHub"></a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="navbar-nav-svg" viewBox="0 0 512 512" role="img" focusable="false"><title>Slack</title><path fill="currentColor" d="M210.787 234.832l68.31-22.883 22.1 65.977-68.309 22.882z"></path><path fill="currentColor" d="M490.54 185.6C437.7 9.59 361.6-31.34 185.6 21.46S-31.3 150.4 21.46 326.4 150.4 543.3 326.4 490.54 543.34 361.6 490.54 185.6zM401.7 299.8l-33.15 11.05 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.38-68.36 22.92 11.46 34.38c4.5 13.92-2.87 29.06-16.78 33.56-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18l-11.46-34.43-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.5-13.92 2.87-29.06 16.78-33.56l33.12-11.03-22.1-65.9-33.15 11.05c-2.87.82-6.14 1.64-9 1.23a27.32 27.32 0 0 1-24.56-18c-4.48-13.93 2.89-29.07 16.81-33.58l33.15-11.05-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.46 34.38 68.36-22.92-11.46-34.38c-4.5-13.92 2.87-29.06 16.78-33.56s29.06 2.87 33.56 16.78l11.47 34.42 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.87 29.06-16.78 33.56L329.7 194.6l22.1 65.9 33.15-11.05c13.92-4.5 29.06 2.87 33.56 16.78s-2.88 29.07-16.81 33.57z"></path></svg>
                        </li>
                        <li class="nav-item ml-3" style="margin-top: -9px;">
                            <a class="nav-link p-2" href="https://github.com/twbs/bootstrap" target="_blank" rel="noopener" aria-label="GitHub"></a>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd" class="navbar-nav-svg" viewBox="0 0 40 41" role="img" focusable="false"><title>Open Collective</title><path fill-opacity=".4" d="M32.8 21c0 2.4-.8 4.9-2 6.9l5.1 5.1c2.5-3.4 4.1-7.6 4.1-12 0-4.6-1.6-8.8-4-12.2L30.7 14c1.2 2 2 4.3 2 7z"></path><path d="M20 33.7a12.8 12.8 0 0 1 0-25.6c2.6 0 5 .7 7 2.1L32 5a20 20 0 1 0 .1 31.9l-5-5.2a13 13 0 0 1-7 2z"></path></svg>
                        </li>
                        <!-- <li class="nav-item">
                        <svg height="30" width="30"id="Layer_1" style="enable-background:new 0 0 67 67;" version="1.1" viewBox="0 0 67 67" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M20.543,34.569c-0.054-0.001,0.592,1.366,0.61,1.366  c1.41,2.516,4.128,4.08,8.713,4.514c-0.654,0.488-1.44,1.414-1.549,2.484c-0.823,0.523-2.478,0.696-3.764,0.297  c-1.803-0.559-2.493-4.066-5.192-3.566c-0.584,0.107-0.468,0.486,0.037,0.808c0.823,0.524,1.597,1.179,2.194,2.572  c0.459,1.07,1.423,2.981,4.473,2.981c1.21,0,2.058-0.143,2.058-0.143s0.023,2.731,0.023,3.793c0,1.225-1.682,1.57-1.682,2.159  c0,0.233,0.557,0.255,1.004,0.255c0.884,0,2.723-0.725,2.723-1.998c0-1.011,0.017-4.411,0.017-5.006c0-1.3,0.709-1.712,0.709-1.712  s0.088,6.94-0.169,7.872c-0.302,1.094-0.847,0.939-0.847,1.427c0,0.726,2.214,0.179,2.948-1.416c0.567-1.239,0.319-8.05,0.319-8.05  l0.605-0.012c0,0,0.034,3.117,0.013,4.542c-0.021,1.476-0.123,3.342,0.769,4.222c0.586,0.579,2.484,1.594,2.484,0.666  c0-0.539-1.04-0.982-1.04-2.441v-6.715c0.831,0,0.706,2.208,0.706,2.208l0.061,4.103c0,0-0.184,1.494,1.645,2.119  c0.645,0.223,2.025,0.282,2.09-0.09c0.065-0.373-1.662-0.928-1.678-2.084c-0.01-0.707,0.032-1.119,0.032-4.187  c0-3.068-0.419-4.202-1.88-5.106c4.508-0.455,7.299-1.551,8.658-4.486c0.106,0.003,0.555-1.371,0.496-1.371  c0.305-1.108,0.47-2.419,0.502-3.971c-0.008-4.21-2.058-5.699-2.451-6.398c0.58-3.187-0.098-4.637-0.412-5.135  c-1.162-0.406-4.041,1.045-5.615,2.066c-2.564-0.737-7.986-0.666-10.019,0.19c-3.751-2.639-5.736-2.235-5.736-2.235  s-1.283,2.259-0.339,5.565c-1.234,1.546-2.154,2.64-2.154,5.539C19.906,31.83,20.102,33.292,20.543,34.569z M33,64  C16.432,64,3,50.569,3,34S16.432,4,33,4s30,13.431,30,30S49.568,64,33,64z" style="fill-rule:evenodd;clip-rule:evenodd;fill:#D8D9D8;"/></svg>
                        </li> -->
                        <!-- <li class="nav-item">
                            <div class="pt-1">
                            <svg height="30" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style type="text/css"><![CDATA[.st0{fill-rule:evenodd;clip-rule:evenodd;}]]></style><g><path class="st0" d="M256,32C132.3,32,32,134.8,32,261.7c0,101.5,64.2,187.5,153.2,217.9c11.2,2.1,15.3-5,15.3-11.1   c0-5.5-0.2-19.9-0.3-39.1c-62.3,13.9-75.5-30.8-75.5-30.8c-10.2-26.5-24.9-33.6-24.9-33.6c-20.3-14.3,1.5-14,1.5-14   c22.5,1.6,34.3,23.7,34.3,23.7c20,35.1,52.4,25,65.2,19.1c2-14.8,7.8-25,14.2-30.7c-49.7-5.8-102-25.5-102-113.5   c0-25.1,8.7-45.6,23-61.6c-2.3-5.8-10-29.2,2.2-60.8c0,0,18.8-6.2,61.6,23.5c17.9-5.1,37-7.6,56.1-7.7c19,0.1,38.2,2.6,56.1,7.7   c42.8-29.7,61.5-23.5,61.5-23.5c12.2,31.6,4.5,55,2.2,60.8c14.3,16.1,23,36.6,23,61.6c0,88.2-52.4,107.6-102.3,113.3   c8,7.1,15.2,21.1,15.2,42.5c0,30.7-0.3,55.5-0.3,63c0,6.1,4,13.3,15.4,11C415.9,449.1,480,363.1,480,261.7   C480,134.8,379.7,32,256,32z"/></g></svg>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="pt-1 ml-3">
                                <svg enable-background="new -0.001 -3.266 32 32" height="30" overflow="visible" version="1.1" viewBox="-0.001 -3.266 32 32" width="30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs/><path d="M32,3.078c-1.178,0.523-2.443,0.875-3.771,1.035c1.355-0.812,2.396-2.102,2.887-3.633  c-1.268,0.752-2.674,1.297-4.168,1.594C25.749,0.797,24.043,0,22.155,0c-3.626,0-6.565,2.939-6.565,6.566  c0,0.512,0.058,1.016,0.17,1.496C10.304,7.787,5.466,5.174,2.228,1.203C1.663,2.172,1.339,3.299,1.339,4.502  c0,2.279,1.159,4.287,2.921,5.465c-1.076-0.033-2.089-0.33-2.974-0.822C1.285,9.172,1.285,9.199,1.285,9.229  c0,3.182,2.264,5.834,5.267,6.438c-0.551,0.15-1.131,0.229-1.729,0.229c-0.423,0-0.835-0.039-1.235-0.117  c0.835,2.609,3.26,4.508,6.133,4.559c-2.247,1.762-5.078,2.812-8.153,2.812c-0.53,0-1.053-0.031-1.566-0.094  c2.905,1.863,6.356,2.951,10.063,2.951c12.076,0,18.679-10.004,18.679-18.68c0-0.283-0.006-0.568-0.018-0.85  C30.008,5.551,31.119,4.395,32,3.078z" id="twitter_1_"/></svg>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="pt-1 ml-3">
                            <svg height="30" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="30" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x33_3-slack_x2C__chat"><g><path d="M216.594,231.219c6.662,20.492,13.769,42.349,20.445,62.883l62.913-20.437l-20.447-62.871    C259.004,217.449,237.138,224.549,216.594,231.219z"/><polygon points="199,369.368 199,369.364 198.992,369.367   "/><path d="M376,16H136C69.726,16,16,69.726,16,136v240c0,66.274,53.726,120,120,120h240c66.274,0,120-53.726,120-120V136    C496,69.726,442.274,16,376,16z M405.396,302.236c0,0-11.797,3.83-30.127,9.781c6.1,18.762,10.056,30.93,10.099,31.066    c5.075,15.571-4.616,32.403-20.472,36.974c-15.227,4.359-31.061-3.88-36.366-18.527l-10.099-31.058    c-20.504,6.658-42.367,13.759-62.915,20.431c6.1,18.761,10.066,30.928,10.109,31.061c5.077,15.571-4.594,32.4-20.449,36.97    c-15.227,4.363-31.019-3.875-36.325-18.528l-9.994-30.995c-18.918,6.074-30.998,10.012-31.135,10.06    c-15.582,5.072-32.6-4.612-37.172-20.456c-4.36-15.217,3.88-31.041,18.543-36.344l31.082-10.097l-0.002-0.006l0.02-0.007    l-20.454-62.883c-18.783,6.099-30.965,10.054-31.098,10.097c-15.582,5.047-32.427-4.609-36.998-20.458    c-4.382-15.217,3.859-31.041,18.542-36.343l31.08-10.094l-9.793-30.106c-5.115-15.697,3.501-32.525,19.193-37.64    c15.687-5.116,32.547,3.479,37.671,19.178c0,0,3.832,11.786,9.787,30.102l62.905-20.43l-9.792-30.109    c-5.099-15.695,3.481-32.548,19.19-37.637c15.71-5.096,32.57,3.498,37.67,19.176c0,0,3.832,11.784,9.785,30.097l0.01-0.003    l0.002,0.008l30.097-9.774c15.708-5.091,32.568,3.479,37.669,19.179c5.096,15.696-3.482,32.546-19.192,37.641    c0,0-11.789,3.827-30.108,9.775c6.658,20.481,13.761,42.326,20.434,62.851l0.007-0.002c0.001,0.004,0.003,0.009,0.005,0.013    l30.114-9.782c15.71-5.089,32.572,3.479,37.668,19.179C429.684,280.292,421.104,297.143,405.396,302.236z"/></g></g><g id="Layer_1"/></svg>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="pt-1 ml-3">

                            </div>
                        </li>
                    </ul> -->
                    <li class="nav-item ml-3">
                        <button type="button" class="btn btn-outline-warning">Download</button>
                    </li>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <br>
        <main class="bd-masthead" id="content" role="main">
        <div class="container">
            <div class="row">
            <div class="col-6 mx-auto col-md-6 order-md-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="430" class="img-fluid mb-3 mb-md-0" viewBox="0 0 1024 860" focusable="false" role="img"><title>Bootstrap</title><defs><linearGradient id="c" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#e83e8c"></stop><stop offset="100%" stop-color="#e83e8c"></stop></linearGradient><path id="b" d="M355.967 242.807l-322 216.395c-44.275 29.754-44.275 78.443 0 108.197l322 216.395c44.275 29.754 116.725 29.754 161 0l322-216.395c44.275-29.754 44.275-78.443 0-108.197l-322-216.395c-44.275-29.754-116.725-29.754-161 0z"></path><filter id="a" width="108%" height="112%" x="-4%" y="-4.3%" filterUnits="objectBoundingBox"><feOffset dy="10" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="10"></feGaussianBlur><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix></filter><linearGradient id="f" x1="50%" x2="50%" y1="-17.303%" y2="100%"><stop offset="0%" stop-color="#e83e8c"></stop><stop offset="100%" stop-color="#e83e8c"></stop></linearGradient><path id="e" d="M355.967 132.807l-322 216.395c-44.275 29.754-44.275 78.443 0 108.197l322 216.395c44.275 29.754 116.725 29.754 161 0l322-216.395c44.275-29.754 44.275-78.443 0-108.197l-322-216.395c-44.275-29.754-116.725-29.754-161 0z"></path><filter id="d" width="108%" height="112%" x="-4%" y="-4.3%" filterUnits="objectBoundingBox"><feOffset dy="10" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="10"></feGaussianBlur><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix></filter><linearGradient id="i" x1="50%" x2="50%" y1="0%" y2="100%"><stop offset="0%" stop-color="#e83e8c"></stop><stop offset="100%" stop-color="#e83e8c"></stop></linearGradient><path id="h" d="M355.967 22.807l-322 216.395c-44.275 29.754-44.275 78.443 0 108.197l322 216.395c44.275 29.754 116.725 29.754 161 0l322-216.395c44.275-29.754 44.275-78.443 0-108.197l-322-216.395c-44.275-29.754-116.725-29.754-161 0z"></path><filter id="g" width="108%" height="112%" x="-4%" y="-4.3%" filterUnits="objectBoundingBox"><feOffset dy="10" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="10"></feGaussianBlur><feColorMatrix in="sha54dowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix></filter></defs><g fill="none"><g transform="translate(75 23)"><use fill="#000" filter="url(#a)" xlink:href="#b"></use><use fill="url(#c)" xlink:href="#b"></use></g><g transform="translate(75 23)"><use fill="#000" filter="url(#d)" xlink:href="#e"></use><use fill="url(#f)" xlink:href="#e"></use></g><g transform="translate(75 23)"><use fill="#000" filter="url(#g)" xlink:href="#h"></use><use fill="url(#i)" xlink:href="#h"></use></g><path fill="#6F00FF" d="M558.273 447.667L308.036 279.5l97.982-65.847c42.83-28.784 96.789-31.483 134.245-6.311 26.044 17.502 31.214 46.615 11.444 65.724l1.389.934c38.324-19.932 84.107-18.527 117.396 3.845 44.046 29.6 38.671 68.419-14.561 104.193l-97.658 65.629zM447.112 331.01l49.942-33.562c36.935-24.822 42.31-48.249 15.224-66.451-24.798-16.665-55.49-14.453-85.851 5.95l-59.641 40.081 80.326 53.982zm176.532 35.663c37.63-25.289 42.136-48.832 13.203-68.276-28.932-19.444-64.163-15.614-104.042 11.186l-58.789 39.508 87.92 59.084 61.708-41.502z"></path></g></svg>
            </div>
            <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
                <h1 class="mb-4 text-secondary">Bootstrap</h1>
                <p class="lead">
                Build responsive, mobile-first projects on the web with the world’s most popular front-end component library.
                </p>
                <p class="lead mb-4">
                Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.
                </p>
                <div class="row mx-n2">
                <div class="col-md px-2">
                    <a href="/docs/4.4/getting-started/introduction/" class="btn btn-lg btn-outline-danger w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', 'Get started', 'Get started');">Get started</a>
                </div>
                <div class="col-md px-2">
                    <a href="/docs/4.4/getting-started/download/" class="btn btn-lg btn-outline-danger w-100 mb-3" onclick="ga('send', 'event', 'Jumbotron actions', 'Download', 'Download 4.4.1');">Download</a>
                </div>
                </div>
                <p class="text-muted mb-0">
                Currently v4.4.1
                </p>
            </div>
        </div>    
    </div>
</main>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
