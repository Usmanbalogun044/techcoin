<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Builder</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/css/nucleo-svg.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="./assets/css/theme.css"> --}}
       <link rel="stylesheet" href="{{asset('assets/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/loopple/loopple.css')}}">
</head>

<body class="null">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container">
            <a class="navbar-brand" href="javascript:;" rel="tooltip" title="" data-placement="bottom">
                Tech Coin
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
            <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0 ms-lg-12 ps-lg-5" id="navigation">
                <ul class="navbar-nav navbar-nav-hover w-100">
                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages1" data-bs-toggle="dropdown" aria-expanded="false">
                            Pages
                            <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                        </a>
                        <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages1">
                            <div class="d-none d-lg-block">
                                <a href="javascript:;" class="dropdown-item border-radius-md">
                                    About Us
                                </a>
                                <a href="javascript:;" class="dropdown-item border-radius-md">
                                    Contact Us
                                </a>
                                <a href="javascript:;" class="dropdown-item border-radius-md">
                                    Author
                                </a>
                                <a href="javascript:;" class="dropdown-item border-radius-md" href="{{route('login.view')}}">
                                    Sign In
                                </a>
                            </div>

                            <div class="d-lg-none">
                                <a href="javascript:;" class="dropdown-item border-radius-md">
                                    About Us
                                </a>
                                <a href="javascript:;" class="dropdown-item border-radius-md">
                                    Contact Us
                                </a>
                                <a href="javascript:;" class="dropdown-item border-radius-md">
                                    Author
                                </a>
                                <a href="javascript:;" class="dropdown-item border-radius-md">
                                    Sign In
                                </a>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                            Blocks
                            <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-animation dropdown-lg dropdown-lg-responsive p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuBlocks">
                            <div class="d-none d-lg-block">
                                <li class="nav-item dropdown dropdown-hover dropdown-subitem">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
                                                    <span class="text-sm">See all 109 sections</span>
                                                </div>

                                                <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/down-arrow.svg" alt="down-arrow" class="arrow">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu mt-0 py-3 px-2 mt-3" aria-labelledby="pageSections">
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Page Headers
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Features
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Pricing
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            FAQ
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Blog Posts
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Testimonials
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Teams
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Stats
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Call to Actions
                                        </a>
                                        <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                            Logo Areas
                                        </a>
                                    </div>
                                </li>
                            </div>

                            <div class="row d-lg-none">
                                <div class="col-md-12">
                                    <div class="d-flex mb-2">
                                        <div class="icon h-10 me-3 d-flex mt-1">
                                            <i class="ni ni-single-copy-04 text-gradient text-primary"></i>
                                        </div>
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Page Sections</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Page Headers
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Features
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Pricing
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        FAQ
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Blog Posts
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Testimonials
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Teams
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Stats
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Call to Actions
                                    </a>
                                    <a class="dropdown-item ps-3 border-radius-md mb-1" href="javascript:;">
                                        Applications
                                    </a>
                                </div>
                            </div>

                        </ul>
                    </li>

                    <li class="nav-item dropdown dropdown-hover mx-2">
                        <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                            Docs
                            <img src="https://demos.creative-tim.com/soft-ui-design-system/assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-1">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledby="dropdownMenuDocs">
                            <div class="d-none d-lg-block">
                                <li class="nav-item ">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>spaceship</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(4.000000, 301.000000)">
                                                                    <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                                    <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                                    <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                                                    <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                                                <span class="text-sm">All about overview, quick start, license and contents</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>document</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g id="document" transform="translate(154.000000, 300.000000)">
                                                                    <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                                    <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                                                <span class="text-sm">See our colors, icons and typography</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>box-3d-50</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                                                                    <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                    <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                    <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                                                <span class="text-sm">Explore our collection of fully designed components</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>switches</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(154.000000, 149.000000)">
                                                                    <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                                                                    <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                                                <span class="text-sm">Check how you can integrate our plugins</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>settings</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(304.000000, 151.000000)">
                                                                    <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                                    <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                                    <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                                                <span class="text-sm">For those who want flexibility, use our utility classes</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </div>

                            <div class="row d-lg-none">
                                <div class="col-md-12 g-0">
                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>spaceship</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(4.000000, 301.000000)">
                                                                    <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                                    <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                                    <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                                                    <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Getting Started</h6>
                                                <span class="text-sm">All about overview, quick start, license and contents</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>document</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(154.000000, 300.000000)">
                                                                    <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                                                    <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Foundation</h6>
                                                <span class="text-sm">See our colors, icons and typography</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>box-3d-50</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(603.000000, 0.000000)">
                                                                    <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                    <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                    <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Components</h6>
                                                <span class="text-sm">Explore our collection of fully designed components</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>switches</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-1870.000000, -440.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(154.000000, 149.000000)">
                                                                    <path class="color-background" d="M10,20 L30,20 C35.4545455,20 40,15.4545455 40,10 C40,4.54545455 35.4545455,0 30,0 L10,0 C4.54545455,0 0,4.54545455 0,10 C0,15.4545455 4.54545455,20 10,20 Z M10,3.63636364 C13.4545455,3.63636364 16.3636364,6.54545455 16.3636364,10 C16.3636364,13.4545455 13.4545455,16.3636364 10,16.3636364 C6.54545455,16.3636364 3.63636364,13.4545455 3.63636364,10 C3.63636364,6.54545455 6.54545455,3.63636364 10,3.63636364 Z" opacity="0.6"></path>
                                                                    <path class="color-background" d="M30,23.6363636 L10,23.6363636 C4.54545455,23.6363636 0,28.1818182 0,33.6363636 C0,39.0909091 4.54545455,43.6363636 10,43.6363636 L30,43.6363636 C35.4545455,43.6363636 40,39.0909091 40,33.6363636 C40,28.1818182 35.4545455,23.6363636 30,23.6363636 Z M30,40 C26.5454545,40 23.6363636,37.0909091 23.6363636,33.6363636 C23.6363636,30.1818182 26.5454545,27.2727273 30,27.2727273 C33.4545455,27.2727273 36.3636364,30.1818182 36.3636364,33.6363636 C36.3636364,37.0909091 33.4545455,40 30,40 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Plugins</h6>
                                                <span class="text-sm">Check how you can integrate our plugins</span>
                                            </div>
                                        </div>
                                    </a>

                                    <a class="dropdown-item py-2 ps-3 border-radius-md" href="javascript:;">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1">
                                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>settings</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(304.000000, 151.000000)">
                                                                    <polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667"></polygon>
                                                                    <path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
                                                                    <path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div>
                                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Utility Classes</h6>
                                                <span class="text-sm">All about overview, quick start, license and contents</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </ul>
                    </li>
                    <li class="nav-item ms-lg-auto my-auto ms-3 ms-lg-0 mt-2 mt-lg-0">

                        <a href="{{route('reg.view')}}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">start earning</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="">
        <div class="page-header min-vh-100">
            <div class="oblique position-absolute top-0 h-100 d-md-block d-none">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url(https://images.pexels.com/photos/546819/pexels-photo-546819.jpeg)"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                        <h1 class="text-gradient text-primary">$tech Coin</h1>
                        <h1 class="mb-4">Powering Developers with Web3</h1>
                        <p class="lead pe-5 me-5">Code, Earn, and Innovate. The future of developer rewards is here. 
                        Track coding activity, earn $tech Coin, and unlock NFT-based achievements.</p>
                        <div class="buttons">
                            <button type="button" class="btn bg-gradient-primary mt-4">Start Earning</button>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- <header class="">
    <div class="page-header min-vh-100">
        <div class="oblique position-absolute top-0 h-100 d-md-block d-none">
            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" 
                style="background-image: url(https://source.unsplash.com/1600x900/?coding,laptop);">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-7 d-flex justify-content-center flex-column">
                    <h1 class="text-gradient text-primary">$tech Coin</h1>
                    <h1 class="mb-4">Powering Developers with Web3</h1>
                    <p class="lead pe-5 me-5">
                        Code, Earn, and Innovate. The future of developer rewards is here. 
                        Track coding activity, earn $tech Coin, and unlock NFT-based achievements.
                    </p>
                    <div class="buttons">
                        <button type="button" class="btn bg-gradient-primary mt-4">Start Earning</button>
                        <button type="button" class="btn text-primary shadow-none mt-4">Learn More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header> --}}
   <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="text-gradient text-primary mb-0 mt-2">Read More About $tech Coin</h3>
                <h3>The Future of Developer Rewards</h3>
                <p>
                    $tech Coin is a Web3-powered cryptocurrency that rewards developers for coding. 
                    Using AI and blockchain, it ensures transparency, security, and fair compensation 
                    for every line of code written.
                </p>
                <a href="javascript:;" class="text-primary icon-move-right">More about $tech Coin
                    <i class="fas fa-arrow-right text-sm ms-1"></i>
                </a>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
                <div class="p-3 info-horizontal">
                    <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center">
                        <i class="fas fa-code opacity-10"></i>
                    </div>
                    <div class="description ps-3">
                        <p class="mb-0">Track your coding activity and earn rewards instantly on the blockchain.</p>
                    </div>
                </div>

                <div class="p-3 info-horizontal">
                    <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center">
                        <i class="fas fa-lock opacity-10"></i>
                    </div>
                    <div class="description ps-3">
                        <p class="mb-0">Built on blockchain for transparency, security, and decentralized governance.</p>
                    </div>
                </div>

                <div class="p-3 info-horizontal">
                    <div class="icon icon-shape rounded-circle bg-gradient-primary shadow text-center">
                        <i class="fas fa-coins opacity-10"></i>
                    </div>
                    <div class="description ps-3">
                        <p class="mb-0">Stake your $tech Coin and earn passive rewards while supporting the network.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center mb-5">
                    <span class="badge rounded-pill bg-primary mb-2">developer hub</span>
                    <h2>Explore Our Tech Innovation Spaces </h2>
                    <p>
                         From blockchain labs to AI-powered coding bootcamps, $tech Coin is building 
                    a global network of innovation hubs where developers can collaborate, code, 
                    and get rewarded for their skills.
                    </p>
                </div>
            </div>
            <div class="row min-vh-25">
                <div class="col-sm-4 col-5 mb-sm-0 mb-3">
                <div style="background-image: url('{{ asset('assets/developer.webp') }}')" class="w-100 h-100 border-radius-lg bg-cover"></div>
                </div>
                <div class="col-sm-3 col-7 mb-sm-0 mb-3">
                    <div style="background-image: url('https://www.shutterstock.com/image-photo/portrait-african-american-developer-using-600nw-2108122673.jpg')" class="w-100 h-100 border-radius-lg bg-cover"></div>
                </div>
                <div class="col-sm-5 mb-sm-0 mb-3">
                    <div style="background-image: url('https://cdn-talent-wp.arc.dev/wp-content/uploads/2022/06/coding-programming-project-ideas-1128x635.jpg')" class="w-100 h-100 border-radius-lg bg-cover"></div>
                </div>
            </div>
            <div class="row min-vh-25 mt-4">
                <div class="col-sm-3 col-7 mb-sm-0 mb-3">
                    <div style="background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20230505/pngtree-team-of-software-developers-talking-about-programming-monitor-system-engineer-developer-photo-image_51947998.jpg')" class="w-100 h-100 border-radius-lg bg-cover"></div>
                </div>
                <div class="col-sm-5 col-5 mb-sm-0 mb-3">
                    <div style="background-image: url('https://thumbs.dreamstime.com/b/software-engineer-developer-using-desktop-computer-coding-pc-software-engineer-developer-using-desktop-computer-354299197.jpg')" class="w-100 h-100 border-radius-lg bg-cover"></div>
                </div>
                <div class="col-sm-4 mb-sm-0 mb-3">
                    <div style="background-image: url('https://img.freepik.com/free-photo/software-programer-pointing-pencil-source-code-computer-screen-explaining-algorithm-coworker-standing-desk-programmers-discussing-online-cloud-computing-with-team_482257-33535.jpg?semt=ais_hybrid')" class="w-100 h-100 border-radius-lg bg-cover"></div>
                </div>
            </div>
        </div>
   
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <div class="icon icon-md">
                                    <svg width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>$techcoin</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-1720.000000, -592.000000)" fill="#923DFA" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g transform="translate(4.000000, 301.000000)">
                                                        <path d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z"></path>
                                                        <path d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z"></path>
                                                        <path d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                                        <path d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" id="color-3" opacity="0.598539807"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                              <h5>Fully Integrated</h5>
                                <p>$Tech Coin seamlessly tracks developers' coding activity, rewarding them based on time spent coding. Stay productive and earn while you build the future.</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <div class="icon icon-md">
                                    <svg width="25px" height="25px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>briefcase-24</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2170.000000, -292.000000)" fill="#923DFA" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g id="briefcase-24" transform="translate(454.000000, 1.000000)">
                                                        <path d="M26.25,31.5 L26.25,35 L15.75,35 L15.75,31.5 L1.75,31.5 L1.75,40.25 C1.75,41.216 2.534,42 3.5,42 L38.5,42 C39.466,42 40.25,41.216 40.25,40.25 L40.25,31.5 L26.25,31.5 Z"></path>
                                                        <path d="M40.25,7 L29.75,7 L29.75,1.75 C29.75,0.784 28.966,0 28,0 L14,0 C13.034,0 12.25,0.784 12.25,1.75 L12.25,7 L1.75,7 C0.784,7 0,7.784 0,8.75 L0,26.25 C0,27.216 0.784,28 1.75,28 L15.75,28 L15.75,22.75 L26.25,22.75 L26.25,28 L40.25,28 C41.216,28 42,27.216 42,26.25 L42,8.75 C42,7.784 41.216,7 40.25,7 Z M26.25,7 L15.75,7 L15.75,3.5 L26.25,3.5 L26.25,7 Z" opacity="0.6"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                               <h5>Payments Functionality</h5>
                                <p>Easily convert your earned $Tech Coin into real value. Withdraw, trade, or use it for developer tools and services—seamless and secure transactions for coders.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <div class="info">
                                <div class="icon icon-md">
                                    <svg width="25px" height="25px" viewBox="0 0 45 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>map-big</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2321.000000, -593.000000)" fill="#923DFA" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g id="map-big" transform="translate(605.000000, 302.000000)">
                                                        <polygon points="31.875 0.71625 24.375 4.46625 24.375 40.53375 31.875 36.78375"></polygon>
                                                        <polygon points="20.625 4.46625 13.125 0.71625 13.125 36.78375 20.625 40.53375"></polygon>
                                                        <path d="M9.375,0.81375 L0.909375,5.893125 C0.346875,6.230625 0,6.84 0,7.5 L0,43.125 L9.375,37.06125 L9.375,0.81375 Z" opacity="0.70186942"></path>
                                                        <path d="M44.090625,5.893125 L35.625,0.81375 L35.625,37.06125 L45,43.125 L45,7.5 C45,6.84 44.653125,6.230625 44.090625,5.893125 Z" opacity="0.70186942"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                               <h5>Prebuilt Components</h5>  
                                <p>Access ready-to-use coding components that help you build faster. Earn $Tech Coin as you integrate and contribute to the open-source ecosystem.</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info">
                                <div class="icon icon-md">
                                    <svg width="25px" height="25px" viewBox="0 0 42 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title>time-alarm</title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-2319.000000, -440.000000)" fill="#923DFA" fill-rule="nonzero">
                                                <g transform="translate(1716.000000, 291.000000)">
                                                    <g id="time-alarm" transform="translate(603.000000, 149.000000)">
                                                        <path d="M18.8086957,4.70034783 C15.3814926,0.343541521 9.0713063,-0.410050841 4.7145,3.01715217 C0.357693695,6.44435519 -0.395898667,12.7545415 3.03130435,17.1113478 C5.53738466,10.3360568 11.6337901,5.54042955 18.8086957,4.70034783 L18.8086957,4.70034783 Z" opacity="0.6"></path>
                                                        <path d="M38.9686957,17.1113478 C42.3958987,12.7545415 41.6423063,6.44435519 37.2855,3.01715217 C32.9286937,-0.410050841 26.6185074,0.343541521 23.1913043,4.70034783 C30.3662099,5.54042955 36.4626153,10.3360568 38.9686957,17.1113478 Z" opacity="0.6"></path>
                                                        <path d="M34.3815652,34.7668696 C40.2057958,27.7073059 39.5440671,17.3375603 32.869743,11.0755718 C26.1954189,4.81358341 15.8045811,4.81358341 9.13025701,11.0755718 C2.45593289,17.3375603 1.79420418,27.7073059 7.61843478,34.7668696 L3.9753913,40.0506522 C3.58549114,40.5871271 3.51710058,41.2928217 3.79673036,41.8941824 C4.07636014,42.4955431 4.66004722,42.8980248 5.32153275,42.9456105 C5.98301828,42.9931963 6.61830436,42.6784048 6.98113043,42.1232609 L10.2744783,37.3434783 C16.5555112,42.3298213 25.4444888,42.3298213 31.7255217,37.3434783 L35.0188696,42.1196087 C35.6014207,42.9211577 36.7169135,43.1118605 37.53266,42.5493622 C38.3484064,41.9868639 38.5667083,40.8764423 38.0246087,40.047 L34.3815652,34.7668696 Z M30.1304348,25.5652174 L21,25.5652174 C20.49574,25.5652174 20.0869565,25.1564339 20.0869565,24.6521739 L20.0869565,15.5217391 C20.0869565,15.0174791 20.49574,14.6086957 21,14.6086957 C21.50426,14.6086957 21.9130435,15.0174791 21.9130435,15.5217391 L21.9130435,23.7391304 L30.1304348,23.7391304 C30.6346948,23.7391304 31.0434783,24.1479139 31.0434783,24.6521739 C31.0434783,25.1564339 30.6346948,25.5652174 30.1304348,25.5652174 Z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                              <h5>Improved Platform</h5>  
                            <p>TechCoin constantly evolves with new features, ensuring a seamless experience for developers. Track your coding activity, earn rewards, and engage with the tech community effortlessly.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ms-auto">
                    <div class="card">
                        <img class="card-img-top" src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/funny.jpg">
                        <div class="position-relative overflow-hidden" style="height:50px;margin-top:-50px;">
                            <div class="position-absolute w-100 top-0 z-index-1">
                                <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                    <defs>
                                        <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                    </defs>
                                    <g class="moving-waves">
                                        <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                                        <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                        <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                                        <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                        <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                                        <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                                    </g>
                                </svg>
                            </div>
                        </div>
                      <div class="card-body">
    <h4>
        TechCoin Ecosystem
    </h4>
    <p>
        A revolutionary system that rewards developers for their coding activity. Earn $Tech based on your productivity and become part of the future of decentralized incentives.
    </p>
    <a href="javascript:;" class="text-primary icon-move-right">More about TechCoin
        <i class="fas fa-arrow-right text-xs ms-1"></i>
    </a>
</div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="py-4">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 mx-auto text-center">
                <h2>Frequently Asked Questions</h2>
                <p>Find answers to common questions about TechCoin and how it works.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="accordion" id="accordionTechCoin">
                    <div class="accordion-item mb-3">
                        <h5 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is TechCoin?
                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionTechCoin">
                            <div class="accordion-body text-dark text-sm opacity-8">
                                TechCoin is a digital reward system that allows developers to earn coins based on the time they spend coding. The more time you invest in coding, the more TechCoins you accumulate.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h5 class="accordion-header" id="headingTwo">
                            <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                How do I earn TechCoin?
                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionTechCoin">
                            <div class="accordion-body text-dark text-sm opacity-8">
                                You earn TechCoins by coding! Our system tracks your coding activity in real-time using integrations like WakaTime. The longer you actively code, the more coins you receive.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h5 class="accordion-header" id="headingThree">
                            <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I use my TechCoins?
                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionTechCoin">
                            <div class="accordion-body text-dark text-sm opacity-8">
                                TechCoins can be used for various purposes, including purchasing development tools, accessing exclusive courses, redeeming for real-world rewards, or exchanging them for other digital assets.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h5 class="accordion-header" id="headingFour">
                            <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I transfer TechCoins to someone else?
                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionTechCoin">
                            <div class="accordion-body text-dark text-sm opacity-8">
                                Yes! TechCoins can be transferred between users within the platform. You can send TechCoins as a reward, donation, or payment for services within the TechCoin ecosystem.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h5 class="accordion-header" id="headingFive">
                            <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How secure is TechCoin?
                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionTechCoin">
                            <div class="accordion-body text-dark text-sm opacity-8">
                                TechCoin transactions are secure and encrypted using the latest blockchain and cryptographic technologies. Your coins and transactions are safe within the system.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item mb-3">
                        <h5 class="accordion-header" id="headingSix">
                            <button class="accordion-button border-bottom font-weight-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How do I get started with TechCoin?
                                <i class="collapse-close fa fa-plus text-xs pt-1 position-absolute end-0 me-3"></i>
                                <i class="collapse-open fa fa-minus text-xs pt-1 position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionTechCoin">
                            <div class="accordion-body text-dark text-sm opacity-8">
                                Getting started is simple! Sign up on our platform, link your coding activity tracker (like WakaTime), and start coding. Your TechCoins will be credited automatically based on your activity.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   <section class="py-5 bg-gray-100">
    <div class="container">
        <div class="row">
            <!-- First Blog Card -->
            <div class="col-lg-8 mx-auto text-center">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/devices-table.jpg" 
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p class="text-gradient text-primary font-weight-bold text-sm text-uppercase">TechCoin Economy</p>
                        <a href="javascript:;">
                            <h4>
                                How TechCoin Rewards Developers for Their Time
                            </h4>
                        </a>
                        <p>
                            The TechCoin system ensures developers are rewarded for their coding activity. With real-time tracking, $Tech tokens are distributed based on productivity and effort, creating a decentralized incentive model.
                        </p>
                        <button type="button" class="btn bg-gradient-primary mt-3">Read more</button>
                    </div>
                </div>
            </div>
            <!-- Second Blog Card -->
            <div class="col-lg-8 mx-auto text-center mt-5">
                <div class="card card-blog card-plain">
                    <div class="position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/mic.jpg" 
                                alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                        </a>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p class="text-gradient text-warning font-weight-bold text-sm text-uppercase">Blockchain & Innovation</p>
                        <a href="javascript:;">
                            <h4>
                                The Future of Decentralized Work with TechCoin
                            </h4>
                        </a>
                        <p>
                            With blockchain technology, TechCoin is transforming the way developers get paid. No middlemen, no delays—just instant, secure, and fair compensation for coding contributions.
                        </p>
                        <button type="button" class="btn bg-gradient-warning mt-3">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   <section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto text-center pb-5">
                <div class="icon icon-shape text-center mb-3">
                    <svg class="text-info" width="40px" height="40px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <title>customer-support</title>
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                    <g transform="translate(1.000000, 0.000000)">
                                        <path class="color-background" d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z" opacity="0.59858631"></path>
                                        <path class="color-foreground" d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"></path>
                                        <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
                <h3>What Developers Say</h3>
                <p class="lead">TechCoin ($tech) is transforming how developers are rewarded for their skills and contributions to the tech ecosystem.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-plain text-center">
                    <a href="javascript:;">
                        <img class="avatar avatar-xl shadow" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-1.jpg">
                    </a>

                    <div class="card-body">
                        <h4 class="card-title">Jessica Davis</h4>
                        <h6 class="category text-info text-gradient">Blockchain Developer</h6>
                        <p class="card-description">
                            "With TechCoin, I get rewarded for my coding time. It’s an amazing way to track productivity and get incentives while building great products."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-plain text-center">
                    <a href="javascript:;">
                        <img class="avatar avatar-xl shadow" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/marie.jpg">
                    </a>

                    <div class="card-body">
                        <h4 class="card-title">Joshiah Luke</h4>
                        <h6 class="category text-info text-gradient">Full-Stack Engineer</h6>
                        <p class="card-description">
                            "Tracking my coding activity and getting rewarded with $tech has been a game-changer. It keeps me motivated to code daily."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-plain text-center">
                    <a href="javascript:;">
                        <img class="avatar avatar-xl shadow" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg">
                    </a>

                    <div class="card-body">
                        <h4 class="card-title">Andrew John</h4>
                        <h6 class="category text-info text-gradient">Tech Startup Founder</h6>
                        <p class="card-description">
                            "TechCoin bridges the gap between developers and financial rewards. It's the future of incentivizing coding efforts."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h4 class="text-gradient text-primary">Join our awesome team</h4>

                </div>
            </div>
            <div class="row mt-lg-5 mt-4">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-lg-7">
                                <h5 class="mb-2">Balogun usman </h5>
                                <span class="badge badge-sm rounded-pill mb-3 text-dark">Laravel Backend Developer</span>
                                <br>
                                <button type="button" class="btn btn-twitter btn-simple px-2 mb-0">
                                    <i class="fab fa-twitter text-lg"></i>
                                </button>
                                <button type="button" class="btn btn-dribbble btn-simple px-2 mb-0">
                                    <i class="fab fa-dribbble text-lg"></i>
                                </button>
                                <button type="button" class="btn btn-slack btn-simple px-2 mb-0">
                                    <i class="fab fa-slack text-lg"></i>
                                </button>
                            </div>
                            <div class="col-lg-5 text-end my-auto">
                                <img class="avatar avatar-xxl" src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center pb-4">
                <h3 class="text-dark">Meet the Founder</h3>
                <p class="lead">The visionary behind TechCoin, leading the way in innovation and digital transformation.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="card card-plain text-center">
                    <a href="javascript:;">
                        <img class="avatar avatar-xxl shadow-lg rounded-circle" src="{{asset('assets/ceo.jpg')}}" alt="Founder Image">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title text-dark">Balogun Usman</h4>
                        <h6 class="category text-info text-gradient">Founder & CEO, TechCoin</h6>
                        <p class="card-description">
                            "Driven by passion for technology and innovation, Usman is dedicated to empowering developers through TechCoin, a system that rewards coding time with cryptocurrency."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="features-3 py-5">
        <div class="container">

            <div class="row mt-5">
                <div class="col-lg-4 mb-lg-0 mb-4">

                    <a href="javascript:;">
                        <div class="card card-background move-on-hover mb-4">
                            <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/glass-wall.jpg')"></div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Campus 6</h4>
                                <p>Website visitors today demand a frictionless user expericence.</p>
                            </div>
                        </div>
                    </a>


                    <a href="javascript:;">
                        <div class="card card-background move-on-hover">
                            <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/vr.jpg')"></div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Virtual Office</h4>
                                <p>If you’re more passionate about founding a business than the business itself, you can fall into a ten year trap. Better to stay emotionally unattached and select the best opportunity that arises. Applies to relationships too.</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4 mb-lg-0 mb-4">

                    <a href="javascript:;">
                        <div class="card card-background move-on-hover mb-4">
                            <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/books.jpg')"></div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Cozy Spots</h4>
                                <p>If you’re more passionate about founding a business than the business itself, you can fall into a ten year trap. Better to stay emotionally unattached and select the best opportunity that arises. Applies to relationships too.</p>
                            </div>
                        </div>
                    </a>


                    <a href="javascript:;">
                        <div class="card card-background move-on-hover">
                            <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/team-members.jpg')"></div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Co-working Spaces</h4>
                                <p>Smart money is just dumb money that’s been through a crash.</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-lg-4">

                    <a href="javascript:;">
                        <div class="card card-background move-on-hover mb-4">
                            <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/window-desk.jpg')"></div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Home Office</h4>
                                <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>
                            </div>
                        </div>
                    </a>


                    <a href="javascript:;">
                        <div class="card card-background move-on-hover">
                            <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/imac.jpg')"></div>
                            <div class="card-body pt-12">
                                <h4 class="text-white">Private Space</h4>
                                <p>Technology is not only the thing that moves the human race forward, but it’s the only thing that ever has. Without technology, we’re just monkeys playing in the dirt.</p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </section>
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-dribbble"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-instagram"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        2022 Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>
     <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/soft-design-system.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/plugins/countup.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/plugins/flatpickr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/creativetimofficial/public-assets@master/soft-ui-design-system-builder/v1.0.7/assets/js/plugins/typedjs.js"></script>
    <script>
        if (document.getElementById("state1")) {
                    const countUp = new CountUp("state1", document.getElementById("state1").getAttribute("countTo"));
                    if (!countUp.error) {
                      countUp.start();
                    } else {
                      console.error(countUp.error);
                    }
                  }
                  if (document.getElementById("state2")) {
                    const countUp1 = new CountUp("state2", document.getElementById("state2").getAttribute("countTo"));
                    if (!countUp1.error) {
                      countUp1.start();
                    } else {
                      console.error(countUp1.error);
                    }
                  }
                  if (document.getElementById("state3")) {
                    const countUp2 = new CountUp("state3", document.getElementById("state3").getAttribute("countTo"));
                    if (!countUp2.error) {
                      countUp2.start();
                    } else {
                      console.error(countUp2.error);
                    };
                  }
        
         if (document.querySelector('.datepicker-1')) {
              flatpickr('.datepicker-1', {
              }); // flatpickr
            } 
        
         if (document.querySelector('.datepicker-2')) {
              flatpickr('.datepicker-2', {
              }); // flatpickr
            }
        if (document.getElementById("typed")) {
            var typed = new Typed("#typed", {
              stringsElement: "#typed-strings",
              typeSpeed: 70,
              backSpeed: 50,
              backDelay: 200,
              startDelay: 500,
              loop: true
            });
          }
    </script>
    <script src="./assets/js/loopple/loopple.js"></script>
</body>