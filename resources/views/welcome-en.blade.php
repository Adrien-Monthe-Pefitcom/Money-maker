<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from Money Maker.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2021 06:35:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <meta name="google-site-verification" content="yVjKc5-6saeh-C1E2-tZaA0BqjmkMqyfUqQ3hTRUEsk" />
    <title> Make More Moneu With Money Maker </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#039be5">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<link rel="apple-touch-icon" sizes="57x57" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('complement/assets/img/favicon/apple-icon-180x180.png') }}"> -->
    <link rel="icon" type="image/jpg" sizes="192x192" href="{{ URL::asset('complement/assets/img/logo.jpg') }}">
    <!--<link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('complement/assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ URL::asset('complement/assets/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('complement/assets/img/favicon/favicon-16x16.png') }}"> -->
    <link rel="manifest" href="{{ URL::asset('complement/assets/img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#039be5">
    <meta name="msapplication-TileImage" content="ms-icon-144x144.html">
    <meta name="description"
          content="Money Maker - Mobile Money to Credit Card Service. Get a virtual card, Shop online, boost your Facebook Ads, Add to your PayPal, Google Wallet, Apple Pay.">
    <meta name="keywords" content="Money Maker,cameroon,credit card,mobile money,mtn,orange money,africa,online">



    <noscript>
        <meta http-equiv="Refresh" content="0; url=%27https_/google.com/search9fee.html?q=enable+javascript'" />
    </noscript>
    <script type="text/javascript" src="{{ URL::asset('complement/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('complement/assets/js/global.js') }}" ></script>
    <!-- <link rel="icon" href="{{ URL::asset('complement/assets/img/favicon/favicon.ico') }}" > -->

    <script>
        $(function () {

            var TxtRotate = function (el, toRotate, period) {
                this.toRotate = toRotate;
                this.el = el;
                this.loopNum = 0;
                this.period = parseInt(period, 10) || 2000;
                this.txt = '';
                this.tick();
                this.isDeleting = false;
            };

            TxtRotate.prototype.tick = function () {
                var i = this.loopNum % this.toRotate.length;
                var fullTxt = this.toRotate[i];

                if (this.isDeleting) {
                    this.txt = fullTxt.substring(0, this.txt.length - 1);
                } else {
                    this.txt = fullTxt.substring(0, this.txt.length + 1);
                }

                this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

                var that = this;
                var delta = 200 - Math.random() * 100;

                if (this.isDeleting) { delta /= 2; }

                if (!this.isDeleting && this.txt === fullTxt) {
                    delta = this.period;
                    this.isDeleting = true;
                } else if (this.isDeleting && this.txt === '') {
                    this.isDeleting = false;
                    this.loopNum++;
                    delta = 500;
                }

                setTimeout(function () {
                    that.tick();
                }, delta);
            };

            window.onload = function () {
                var elements = document.getElementsByClassName('txt-rotate');
                for (var i = 0; i < elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-rotate');
                    var period = elements[i].getAttribute('data-period');
                    if (toRotate) {
                        new TxtRotate(elements[i], JSON.parse(toRotate), period);
                    }
                }
                // INJECT CSS
                var css = document.createElement("style");
                css.type = "text/css";
                css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #667 }";
                document.body.appendChild(css);
            };
        })
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-175004988-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-175004988-1');
    </script>
    <!-- Styles -->
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('complement/socicon.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('complement/assets/css/marketing.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('complement/assets/components/global/global.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('complement/assets/components/global/flexbox.css') }}" />
    <!-- Scripts -->
    <!--<script dsrc="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script> -->
    <script src="{{ URL::asset('complement/TweenMax-latest-beta.js') }}"></script>
    <script src="{{ URL::asset('complement/MorphSVGPlugin.min.js') }}"></script>

    <link href="{{ URL::asset('complement/aos.css') }}" rel="stylesheet">
    <style type="text/css">
        #back1 {
            background-image: url("{{ URL::asset('complement/assets/img/mycard.jpg') }}");
            background-size: 428px 242px; background-position: top right -100px;
            width: 428px;
            height: 242px;
        }
        #back2 {
            background-image: url("{{ URL::asset('complement/assets/img/mycard.jpg') }}");
            background-size: 500px; background-position: center;
            width: 559px;
            height: 700px;
            transform: skew(0deg);
        }
        #back3 {
            background-image: url("{{ URL::asset('complement/assets/img/Money Maker-pay.jpg') }}");
            height: 300px;
            transform:rotate(10deg);
            margin-top:70px;
            background-size:cover;
            border-radius:5px;
            width:300px;
            margin-left: 50px;
        }
        #back4 {
            background-image: url("{{ URL::asset('complement/assets/img/logo512.png') }}");
            background-size: 200px 200px;
            background-position: center;
            height: 200px;
        }
        #back5 {
            background-image: url('https://d2n6cmh8j179w8.cloudfront.net/e3e37384-c0e7-49c6-bf0e-7c482f11fc5c/svg/footer-background.svg');
            background-size: 664px 462px;
        }
        #back6 {
            /*background-image: url("{{ URL::asset('complement/assets/img/logo512.png') }}");*/
            background-size: 400px 400px;
            background-position: top right;
            width: 400px;
            height: 400px;
            top: -35px;
            right: -150px;
            border-radius: 5px;
            border: 1px solid white;
        }
    </style>

</head>

<body class="font-sans antialiased text-gray-900">
<!-- Hero Section -->
<div id="hero" class="relative px-5 pb-12 lg:pb-20 max-w-xl mx-auto md:max-w-2xl lg:max-w-5xl">
    <svg id="hero-svg" class="absolute inset-0 h-full w-full" viewBox="0 0 950 513"
         xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin slice">
        <defs>
            <linearGradient id="heroGrad" data-name="New Gradient Swatch 6" x1="475.23" y1="661" x2="475.23"
                            gradientUnits="userSpaceOnUse">
                <stop offset="0.25" stop-color="#3c3429" />
                <stop offset="0.32" stop-color="#3c3429" />
                <stop offset="0.41" stop-color="#3c3429" />
                <stop offset="0.49" stop-color="#3c3429" />
                <stop offset="0.58" stop-color="#3c3429" />
                <stop offset="0.67" stop-color="#3c3429" />
                <stop offset="0.77" stop-color="#3c3429" />
                <stop offset="0.87" stop-color="#3c3429" />
                <stop offset="1" stop-color="#3c3429" />
            </linearGradient>

        </defs>
        <g class="whole">
            <g class="allComets">
                <g class="cometGroup1" fill="#fcec34 ">
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                </g>
                <g class="cometGroup2" fill="#fcec34 ">
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                </g>
                <g class="cometGroup3" fill="#fcec34 ">
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                </g>
                <g class="cometGroup4" fill="#fcec34 ">
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                    <ellipse cx="0" cy="0" rx="5" ry="2" />
                </g>
            </g>
            <g opacity="0.2">
                <line class="midLine" x1="158.74" y1="330.5" x2="791.71" y2="330.5" fill="none" stroke="#3c3429"
                      stroke-linecap="round" stroke-linejoin="round" />
                <path class="dataPath1" d="M950,.5l-316.48,660L317,.5l-158.24,330L.5.5" fill="none"
                      stroke-linecap="round" stroke-linejoin="round" stroke="url(#heroGrad)" />
                <path class="dataPath2" d="M.5,660.5l158.24-330L317,660.5,633.47.5,950,660.5" fill="none"
                      stroke-linecap="round" stroke-linejoin="round" stroke="url(#heroGrad)" />

            </g>
        </g>
    </svg>
    <style>
        html,
        body {
            overflow-x: hidden;
        }
    </style>
    <script>
        let select = (s) => {
            return document.querySelector(s);
        },
        selectAll = (s) => {
            return document.querySelectorAll(s);
        },
        allCometCircles1 = selectAll('#hero-svg .cometGroup1 ellipse'),
            allCometCircles2 = selectAll('#hero-svg .cometGroup2 ellipse'),
            allCometCircles3 = selectAll('#hero-svg .cometGroup3 ellipse'),
            allCometCircles4 = selectAll('#hero-svg .cometGroup4 ellipse'),
            cometDuration1 = 20,
            cometDuration2 = 24,
            cometDuration3 = 21,
            cometDuration4 = 23,
            stagger = 0.045;

        TweenMax.set('svg', {
            visibility: 'visible'
        })

        let cometPath1 = MorphSVGPlugin.pathDataToBezier('M950,.5l-316.48,660L317,.5l-158.24,330L.5.5', {
            offsetX: 0,
            offsetY: 0
        });
        let cometPath2 = MorphSVGPlugin.pathDataToBezier('M.5,660.5l158.24-330L317,660.5,633.47.5,950,660.5', {
            offsetX: 0,
            offsetY: 0
        });

        TweenMax.set('ellipse', {
            transformOrigin: '50% 50%'
        })

        let allCometsTl = new TimelineMax();

        let comet1Tl = new TimelineMax({ repeat: -1 });
        comet1Tl.staggerFromTo(allCometCircles1, cometDuration1, {
            cycle: {
                scale: function (i, target) {
                    return 1 - ((i / allCometCircles1.length))
                },
                alpha: function (i, target) {
                    return 1 - ((i / allCometCircles1.length))
                }
            }
        }, {
            bezier: {
                type: "cubic",
                values: cometPath1,
                autoRotate: true
            },
            ease: Linear.easeNone
        }, stagger).seek(41);

        let comet3Tl = new TimelineMax({ repeat: -1 });
        comet3Tl.staggerFromTo(allCometCircles3, cometDuration3, {
            cycle: {
                scale: function (i, target) {
                    return 1 - ((i / allCometCircles3.length))
                },
                alpha: function (i, target) {
                    return 1 - ((i / allCometCircles3.length))
                }
            }
        }, {
            bezier: {
                type: "cubic",
                values: cometPath1,
                autoRotate: true
            },
            ease: Linear.easeNone
        }, stagger).seek(28);

        let comet2Tl = new TimelineMax({ repeat: -1 });
        comet2Tl.staggerFromTo(allCometCircles2, cometDuration2, {
            cycle: {
                scale: function (i, target) {
                    return 1 - ((i / allCometCircles2.length))
                },
                alpha: function (i, target) {
                    return 1 - ((i / allCometCircles2.length))
                }
            }
        }, {
            bezier: {
                type: "cubic",
                values: cometPath2,
                autoRotate: true
            },
            ease: Linear.easeNone
        }, stagger).seek(60);

        let comet4Tl = new TimelineMax({ repeat: -1 });
        comet4Tl.staggerFromTo(allCometCircles4, cometDuration4, {
            cycle: {
                scale: function (i, target) {
                    return 1 - ((i / allCometCircles4.length))
                },
                alpha: function (i, target) {
                    return 1 - ((i / allCometCircles4.length))
                }
            }
        }, {
            bezier: {
                type: "cubic",
                values: cometPath2,
                autoRotate: true
            },
            ease: Linear.easeNone
        }, stagger).seek(23);

        allCometsTl.add(comet1Tl)
            .add(comet2Tl, 0)
            .add(comet3Tl, 0)
            .add(comet4Tl, 0)

        allCometsTl.seek(100);

        allCometsTl.timeScale(3)
    </script>

    <div class="absolute inset-0 "
         dstyle="background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 1))">
    </div>

    <div class=" gradient-1-">
        <div class="items-center justify-between py-3">
            <div class="row">
                <div class="col-md-6">
                <a href="/">
                    <img src="{{ URL::asset('complement/assets/img/logo.png') }}" width="120rem">
                </a>
                </div>
                <div class="col-md-6 text-center" style="align-text: right">
                    <a href="{{ route('page-next-en') }}" class="inline-block px-4 py-3 leading-none rounded  bg text-white font-medium no-radius hoverable z-depth-1">
                         Start Now.
                    </a>
                </div>
            </div>
            <!--<div>
                                    <a class="flex items-center color text with-icon" href="/signin">
                    <i class="material-icons" style="margin-top: 2px!important;">account_circle</i>
                    &nbsp;
                    Connexion                    </a>
                                </div> -->
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 force-left ">
                <div class="mt-10 lg:mt-20 lg:text-center lg:max-w-xl lg:mx-auto">
                    <br>
                    <div class="typewriter-">
                        <h1 class="text-3xl font-headline tracking-tight font-bold
                                    text-gray-900 leading-tight sm:text-4xl md:text-5xl text-cyan-500
                                     color" style="font-size: 50px!important;">
                           <span style="font-size: 4.5rem;"> Money Maker </span><br>Make <span class="text-shadow">More Profit...</span><br> with <span class="text-shadow">Your Money!</span>                            </h1>
                    </div>
                    <br>
                    <h1 class="text-3xl font-headline tracking-tight font-bold
                                text-gray-900 leading-tight sm:text-4xl md:text-5xl text-shadow-"
                        style="min-height: 120px;">
                            <span class="txt-rotate" data-period="3000"
                                  data-rotate='[ "Recharge you credit card via Mobile Mone",  "Online Payments, QR code Payments, and Online Video Games Challenges."]'>
                            </span>
                    </h1>
                    <br>
                    <table style="margin-left: -10px!important;">
                        <tr>
                            <td>
                                <a target="_blank"
                                   href="#">
                                    <img src="{{ URL::asset('complement/assets/img/playstorefr.png') }}" width="180">
                                </a>
                            </td>
                            <td>
                                &nbsp;
                            </td>
                            <!--td>
                                <a target="_blank" href="https://app.Money Maker.com/">
                                    <img src="{{ URL::asset('complement/assets/img/webapp.svg') }}" width="180">
                                </a>
                            </td-->
                        </tr>
                    </table>
                    <br>
                    <!--<center>
                            <a href="#learn-more"
                            class="ml-4  px-4 py-3 leading-none rounded bg-gray-200 text-gray-900 no-radius z-depth-1">
                            Learn More</a>
                        </center>-->
                    <!--<p class="mt-3 text-lg text-gray-700">
                        Online Payments Made Accessible to Everyone.                        </p>-->
                    <div class="mt-6">
                    </div>
                </div>
                <br>
                <!--<img src="https://play-lh.googleusercontent.com/PugeJlUVfzCqzJuDbJgk10CNZdFBEJZS0kqAxwtbQZN_yui_6Uc2uORWdkAwO_hWsbM=w1536-h734-rw"
                    class="center hoverable z-depth-2"
                    style="border-radius: 10px;margin-top: 10px;transform: rotate(-45deg);" width="200"
                    data-aos="fade-right">-->
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4" data-aos="fade-left" data-aos-delay="200">
                <!-- <img src="https://Money Maker.com/assets/img/wallet.png"  class="center hoverable- z-depth-5"
                     style="transform: rotate(-10deg);border-radius: 5px;"> -->
                <br>
                <img src="{{ URL::asset('complement/assets/img/galaxys8.jpg') }}" class="center" style="transform: rotate(15deg);border-radius: 10px;margin-top: 90px!important;" width="300">
               <div style="display: inline;"> <img src="{{ URL::asset('complement/assets/img/momo.png') }}" style="transform: skew(25deg);border-radius: 0px;margin-top: 10px;" width="180">
                <img src="{{ URL::asset('complement/assets/img/uba.png') }}" style="transform: skew(25deg);border-radius: 0px;margin-top: 10px;" width="110"></div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section 1 -->
<div class="lg:overflow-hidden" id="learn-more">
    <div class="relative pt-4 md:pt-8 lg:pt-16" style="background-color: #f4f6f8">
        <div class="absolute inset-0 bg-top" style="">
        </div>

        <div class="absolute inset-0"
             style="background-image: linear-gradient(rgba(255, 255, 255, 0) 60%, rgba(255, 255, 255, 1))">
        </div>

        <div class="relative -mt-16 bg-no-repeat md:hidden"
             dstyle="https://play-lh.googleusercontent.com/PugeJlUVfzCqzJuDbJgk10CNZdFBEJZS0kqAxwtbQZN_yui_6Uc2uORWdkAwO_hWsbM=w1536-h734-rw">
            <br>
            <br>
            <!--<center>
                <a target="_blank" href="https://play.google.com/store/apps/details?id=com.Money Maker.app">
                    <img src="/assets/img/playstore.jpg" width="250">
                </a>
            </center>-->
            <br>
            <br>
        </div>

        <div class="hidden absolute -mt-16 bg-no-repeat md:block lg:hidden right-0" id="back1">
        </div>

        <div class="relative px-5 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
            <div class="hidden absolute -mt-16 bg-no-repeat lg:block right-0 lg:-mr-32 lg:z-10" id="back2">
                <!-- https://d2n6cmh8j179w8.cloudfront.net/cdd99149-a95f-42d6-aabe-85679e0b5439/img/desktop-cubes-stacked.png -->
                <br>
                <br>
                <br>
                <!--<center>
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.Money Maker.app">
                        <img src="/assets/img/playstore.jpg" width="200">
                    </a>
                </center>-->
                <br>
            </div>


            <div dclass="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                </div>
                <div dclass="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                    <div class="lg:w-1/2">
                        <!-- Features Section 1 Heading -->
                        <div class="md:w-3/5 lg:w-full" data-aos="fade-down-right">
                            <h2 class="text-2xl lg:text-3xl font-headline tracking-tight text-gray-900
                             leading-snug">

                                From <span class="color bold"> Mobile to Mobile </span> through your
                                <span class="color bold"> Credit Card </span>                                </h2>
                            <p class="mt-3 text-lg text-gray-700" style="text-align: justify">
                                Create a Money Maker Account, Obtain a Virtual Debit Card, Recharge your account with Mobile Money
                                <u class="color">Instantly</u> from everywhere.                                </p>
                        </div>

                        <div class="md:flex md:-mx-4 lg:block">
                            <!-- Databases -->
                            <!--<div class="md:px-4 md:w-1/2 lg:w-full lg:flex lg:mt-12" data-aos="flip-left"
                                data-aos-dduration="300">
                                <div class="mt-10 lg:mt-0 lg:flex-shrink-0">
                                    <i class="material-icons color text-large">account_circle</i>
                                </div>
                                <div class="mt-4 lg:mt-0 lg:ml-6">
                                    <h2 class="text-lg text-gray-900 font-medium color">
                                        Créer un compte gratuit                                        </h2>

                                    <p class="mt-2 text-normal text-gray-700">
                                        Vous obtenez une carte de crédit virtuelle émise à votre nom, après avoir créé un compte et vérifié votre identité.                                        </p>
                                </div>
                            </div>-->
                            <div class="md:px-4 md:w-1/2 lg:w-full lg:flex lg:mt-12" -data-aos="flip-right"
                                 data-aos-duradtion="300">
                                <div class="mt-10 lg:mt-0 lg:flex-shrink-0">
                                    <i class="material-icons color text-large">credit_card</i>
                                </div>
                                <div class="mt-4 lg:mt-0 lg:ml-6">
                                    <h2 class="text-lg text-gray-900 font-medium color">
                                        Recharge your Credit Card in Real Time                                     </h2>

                                    <p class="mt-2 text-normal text-gray-700" style="text-align: justify">
                                        There is no paperwork to do. You do not need to go and make a bank deposit yourself. Lying in your bed recharge your Money Maker account with a Mobile Money Deposit,
                                        Validate the Transaction with your and That's it!                                       </p>
                                </div>
                            </div>
                            <div class="md:px-4 md:w-1/2 lg:w-full lg:flex lg:mt-12" -data-aos="fade-up">
                                <div class="mt-10 lg:mt-0 lg:flex-shrink-0">
                                    <i class="material-icons color text-large">timeline</i>
                                </div>
                                <div class="mt-4 lg:mt-0 lg:ml-6">
                                    <h2 class="text-lg text-gray-900 font-medium color">
                                        Buy online and inplace with your Virtual Credit Card                                      </h2>

                                    <p class="mt-2 text-normal text-gray-700" style="text-align: justify">

                                        Your balance is available in real time for online transactions. Enjoy all the advantages of an instantly recharged virtual credit card.                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-- bg-gradient---">
        <br>
        <br>
        <center>
            <h1 class="text-2xl lg:text-3xl font-headline tracking-tight text-gray-900 text-shadow
                             leading-snug color" style="font-family:sans-serif!important;">


                Make Online Payments with Money Maker, <strong>Everywhere</strong>
            </h1>
        </center>
        <br>
        <table align="center" class="">
            <tr>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/facebook.svg"
                         style="padding:20px;">
                </td>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/netflix.svg"
                         style="padding:20px;">
                </td>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/apple-music.svg"
                         style="padding:20px;">
                </td>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/spotify.svg"
                         style="padding:20px;">
                </td>
            </tr>
            <tr>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/google.svg" style="padding:20px;">
                </td>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/amazon.svg" style="padding:20px;">
                </td>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/udemy.svg" style="padding:20px;">
                </td>
                <td>
                    <img width="120" src="https://tryginger.app/assets/img/brands/coursera.svg"
                         style="padding:20px;">
                </td>
            </tr>
        </table>
        <br>
    </div>
    <!-- Cloud Graphic https://d2n6cmh8j179w8.cloudfront.net/cdd99149-a95f-42d6-aabe-85679e0b5439/svg/cloud-web.svg -->
    <div class="z-depth-5 relative bg-center bg-no-repeat lg:hidden center" ddata-aos="zoom-in-up" data-aos-delay="10" id="back3">

    </div>

    <!-- Features Section 2 -->
    <div class="relative px-5 pt-4 pb-20 lg:pt-48 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto"
         style="margin-top:-2px!important;">
        <!-- Desktop Cloud Graphic -->
        <div -data-aos="zoom-in-up" data-aos-delay="10"
             class="z-depth-5 hidden absolute bg-left bg-no-repeat lg:block"
             style="transform:translate(-100px);z-index:1000;">

            <img src="{{ URL::asset('complement/assets/img/noupia-pay.jpg') }}" class="center hoverable z-depth-2"
                 style="transform: rotate(-15deg);border-radius: 7px;" width="400">

            <div class="absolute inset-0">
            </div>
        </div>

        <div class="relative lg:w-1/2 lg:ml-auto lg:mr-0 " --data-aos="fade-left" data-aos-delay="10">
            <br>
            <!-- Features Section 2 Heading -->
            <h3 class="text-2xl lg:text-3xl font-headline tracking-tight text-gray-900 leading-snug" style="font-size:2rem">


                <strong class="color"> Money Maker - </strong> <br>
                is also the easiest way to pay in stores with its QR code payment.
                <u> Without Coins </u>                </h3>
            <!--<p class="mt-3 text-lg text-gray-700 md:max-w-lg">  Are you in need of  </p> -->
            <div class="md:flex md:-mx-4 lg:block">
                <div class="md:px-4 md:w-1/2 lg:w-full lg:flex lg:mt-12">
                    <div class="mt-10 lg:mt-0 lg:flex-shrink-0">
                        <i class="material-icons text-large color">phone_android</i>
                    </div>
                    <div class="mt-4 lg:mt-0 lg:ml-6">
                        <h2 class="text-lg text-gray-900 font-medium color">
                            Just scan the QR code and pay
                            </h2>
                        <p class="mt-2 text-normal text-gray-700">
                            It's that simple. Pay in stores or wherever Money Maker is accepted. </p>
                    </div>
                </div>
                <div class="md:px-4 md:w-1/2 lg:w-full lg:flex lg:mt-12">
                    <div class="mt-10 lg:mt-0 lg:flex-shrink-0">
                        <i class="material-icons text-large color">child_care</i>
                    </div>
                    <div class="mt-4 lg:mt-0 lg:ml-6">
                        <h2 class="text-lg text-gray-900 font-medium color">
                            Withdrawal to Mobile Money
                        </h2>
                        <p class="mt-2 text-normal text-gray-700">
                            Withdraw your money to your Mobile Money account in real time.                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Dark Features Section -->
    <div class="pt-4 lg:pt-32 pb-12 bg-gray-900 bg">
        <div class="relative -mt-20 bg-no-repeat lg:hidden bg" id="back4">
        </div>

        <div class="lg:relative px-5 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
            <div class="hidden absolute -mt-20 bg-no-repeat lg:block lg:right-0 z-depth-2 bg2 hoverable" id="back6"  style="display: flex; align-items:center; justify-content: center;">
                <img src="{{ URL::asset('complement/assets/img/logo.jpg') }}">
            </div>

            <!-- Dark Features Section Heading -->
            <div class="md:max-w-lg">
                <h2 class="text-2xl lg:text-3xl font-headline tracking-tight text-white leading-snug text-shadow" style="text-align: justify ;">
                    <u>Money Maker</u> is above all - A robust and secure platform that makes digital payment a breeze.
                <p class="mt-3 text-lg" style="text-align: justify ;">
                    We work smart to simplify the way you pay. Know how and where you are spending. Pay cashless, pay easily,
                    track your spending habits to get more of your money.                    </p>
            </div>

            <div class="md:flex md:-mx-4 lg:mt-16">
                <div class="md:px-4 md:w-1/3">
                    <div class="mt-10 lg:mt-0 text-white">
                        <i class="material-icons text-large white-text">admin_panel_settings</i>
                    </div>

                    <h2 class="mt-4 text-lg text-white font-medium bold text-shadow">
                        Privacy and Security                       </h2>
                    <p class="mt-2" style="text-align: justify ;">
                        We support you. Your data is encrypted, well protected and secure. What little information we collect from you is for regulatory process use ONLY.                        </p>
                </div>

                <div class="md:px-4 md:w-1/3">
                    <div class="mt-10 lg:mt-0 text-white">
                        <i class="material-icons text-large white-text">accessibility_new</i>
                    </div>

                    <h2 class="mt-4 text-lg text-white font-medium bold text-shadow">
                        Ease of puse
                    </h2>
                    <p>
                        We believe in simplicity, which is why we have reduced all the complicated steps for opening an account. Getting started is as easy as the ABCs.
                    </p>
                </div>

                <div class="md:px-4 md:w-1/3">
                    <div class="mt-10 lg:mt-0 text-white">
                        <i class="material-icons text-large white-text">check_circle</i>
                    </div>

                    <h2 class="mt-4 text-lg text-white font-medium bold text-shadow">
                        Reduced transaction fees                       </h2>
                    <p>


                        Transparency is the key! There are never any hidden costs. We have fixed fee rates for successful transactions ONLY.                        </p>
                </div>
            </div>

            <div class="hidden md:block md:mt-12 md:-mb-32" ddata-aos="zoom-out-up" ddata-aos-delay="0">
                <img class="rounded-lg" src="{{ URL::asset('complement/assets/img/banner4.png') }}" width="1412">
            </div>
        </div>
    </div>

    <div class="px-5 pt-12 md:pt-32 pb-12 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
        <div class="md:flex md:-mx-4">
            <!-- Environments -->
            <div class="md:px-4 md:w-1/3">
                <div>
                    <i class="material-icons text-large color">dashboard</i>
                </div>

                <h2 class="mt-4 text-lg text-gray-900 font-medium">
                    Easy to use platform
                                     </h2>

                <p class="mt-2 text-normal text-gray-700">
                    An intuitive, easy to use application.                  </p>
            </div>

            <!-- Rollbacks -->
            <div class="md:px-4 md:w-1/3">
                <div class="mt-10 md:mt-0">
                    <i class="material-icons text-large color">timeline</i>
                </div>

                <h2 class="mt-4 text-lg text-gray-900 font-medium">
                    You have access to all your transactions                   </h2>

                <p class="mt-2 text-gray-700">
                    See how you spend. All the details concerning every transaction you made are made available.                    </p>
            </div>

            <!-- CI Friendly -->
            <div class="md:px-4 md:w-1/3">
                <div class="mt-10 md:mt-0">
                    <i class="material-icons text-large color">account_balance_wallet</i>
                </div>
                <h2 class="mt-4 text-lg text-gray-900 font-medium">
                    Virtual Debit card Available                   </h2>

                <p class="mt-2 text-gray-700">
                    You have access to your virtual card number, its expiration and the Card Validation Code (CVC).                    </p>
            </div>
        </div>
    </div>

    <div class="px-5 pb-16 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
        <div class="md:flex md:-mx-4">
            <!-- Infinite Deployments -->
            <div class="md:px-4 md:w-1/3">
                <div>
                    <i class="material-icons text-large color">account_circle</i>
                </div>
                <h2 class="mt-4 text-lg text-gray-900 font-medium">
                    Manage your Account                   </h2>
                <p class="mt-2 text-normal text-gray-700">
                    Keep your account under control. Manage your PIN code, phone number and other account information.                    </p>
            </div>
            <div class="md:px-4 md:w-1/3">
                <div class="mt-10 md:mt-0">
                    <i class="material-icons text-large color">help</i>
                </div>
                <h2 class="mt-4 text-lg text-gray-900 font-medium">
                    Questions and Answers                    </h2>

                <p class="mt-2 text-gray-700">
                    For all the questions you may have, you will find suitable answers in our Frequently Asked Questions (FAQ) section.                   </p>
            </div>

            <!-- Bring Your Own AWS -->
            <div class="md:px-4 md:w-1/3">
                <div class="mt-10 md:mt-0">
                    <i class="material-icons text-large color">support_agent</i>
                </div>
                <h2 class="mt-4 text-lg text-gray-900 font-medium">
                    24 hour live support                    </h2>
                <p class="mt-2 text-gray-700">
                    Ask someone to help you through our live support, or leave us a message and we will help you in no time.                    </p>
            </div>
        </div>
    </div>
</div>

<!-- Pricing Table -->
<div class="lg:overflow-hidden">
    <div class="sm:pb-16 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
        <div class="lg:max-w-xl lg:text-center lg:mx-auto px-5 pb-10
                     border-b-2 border-gray-100 sm:border-0">
            <div class="mt-16 text-2xl lg:text-3xl font-headline tracking-tight leading-snug text-gray-900">

                <span class="text-cyan-500 font-medium"> Fixed </span> Transaction Fees
            </div>

            <div class="mt-4 text-gray-700">
                You are charged ONLY for what you have spent successfully.               </div>
        </div>

        <div class="lg:relative sm:px-5 lg:flex lg:-mx-4">
            <!--img class="hidden lg:block absolute"
                 src="{{ URL::asset('complement/assets/img/pricing-cubes.png') }}"
                 style="width: 230px; height: 295px; right: -110px; top: -100px;"-->
            <div class="lg:w-1/2 lg:px-4 lg:flex lg:flex-col" -data-aos="fade-right">
                <div
                        class="flex flex-col lg:flex-1 lg:justify-between sm:border-2 sm:border-gray-100 sm:rounded-lg z-depth-4 hoverable">
                    <div class="px-5 pt-8 sm:pt-6">
                        <div class="text-lg text-gray-900 font-medium">
                            Deposit via Mobile Money                            </div>
                        <div class="mt-2 text-gray-700">
                            The Mobile Money deposit is automatic and instantaneous. !                            </div>
                    </div>
                    <div class="">
                        <div class="px-5 pb-8">
                            <div class="mt-6 px-4 py-4 bg-gray-100 rounded-lg">
                                <div class="flex items-center">

                                    <span> <span class="ml-3 font-medium">Successful</span> Deposit </span>
                                </div>
                            </div>
                        </div>

                        <div class="px-5 pt-5 pb-5 border-t-2 border-gray-100">
                            <div class="flex justify-between items-center">
                                    <span class="font-headline tracking-tight text-5xl">1%
                                        <span style="font-size: 50%!important;"> </span>
                                    </span>
                            </div>

                            <div class="text-gray-500 text-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 lg:px-4 lg:flex lg:flex-col" -data-aos="flip-left" data-aos-delay="400"
                 data-aos-duratio>
                <div class="flex flex-col lg:justify-between lg:flex-1 bg-cyan-900 sm:rounded-lg sm:mt-6 lg:mt-0">
                    <div class="px-5 pt-8 sm:pt-6">
                        <div class="text-lg text-white font-medium">
                            Withdrawal                            </div>

                        <div class="mt-2 text-gray-300">
                            We apply a fixed fee of 1% for each withdrawal to Mobile Money.                            </div>
                    </div>

                    <div>
                        <div class="px-5 pb-8">
                            <div class="mt-6 px-4 py-4 bg-gray-300-05 rounded-lg">
                                <div class="flex items-center text-gray-300">
                                    <span><span class="ml-3 text-cyan-500 font-medium">Mobile Money</span> Withdrawal </span>                                    </div>
                            </div>
                        </div>

                        <div class="px-5 pt-5 pb-5 border-t-2 border-gray-300-05">
                            <div class="flex justify-between items-center">
                                    <span class="font-headline tracking-tight text-5xl text-cyan-500">
                                        3%
                                    </span>
                            </div>

                            <div class="text-gray-500 text-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/2 lg:px-4 lg:flex lg:flex-col" -data-aos="fade-right">
                <div
                        class="bg-gradient flex flex-col lg:flex-1 lg:justify-between sm:border-2 sm:border-gray-100 sm:rounded-lg z-depth-4 hoverable">
                    <div class="px-5 pt-8 sm:pt-6">
                        <div class="text-lg text-gray-900 font-medium">
                            Pay by Mobile Money
                        </div>
                        <div class="mt-2">
                            For easy, convenient and fast payments in local stores.
                        </div>
                    </div>
                    <div class="">
                        <div class="px-5 pb-8">
                            <div class="mt-6 px-4 py-4 bg-gray-100 rounded-lg">
                                <div class="flex items-center">
                                    Successful Payment
                                </div>
                            </div>
                        </div>

                        <div class="px-5 pt-5 pb-5 border-t-2 border-gray-100">
                            <div class="flex justify-between items-center">
                                <span class="font-headline tracking-tight text-5xl">7 CFA</span>
                            </div>

                            <div class="text-gray-500 text-sm">


                                Fees are subject to change in the future.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Call To Action -->
<div class="pt-12 pb-12 bg-gray-100 border-b border-gray-200">
    <div class="px-5 max-w-xl mx-auto">
        <div class="text-2xl lg:text-3xl font-headline tracking-tight text-center leading-snug text-gray-900">

            <p class="mt-2 font-semibold">
                Create your account and experience it yourself               </p>
        </div>

        <!--                 <div class="mt-4 text-lg text-gray-700 text-center">
                Deploying your first serverless application has never been easier. There’s no need to spend weeks pouring over documentation and blog posts.
            </div> -->

        <div class="mt-8 text-center">
            <a href="{{ route('page-next-en') }}"
               class="inline-block px-4 py-3 leading-none rounded  bg text-white font-medium no-radius hoverable z-depth-1">
                Start Now                </a>
        </div>
    </div>
</div>

<!-- Links -->
<div class="relative pt-12 pb-12 bg-gray-100 bg-no-repeat bg-top border-b border-gray-200" id="back5">
    <div class="absolute inset-0" style="background-image: linear-gradient(rgba(255, 255, 255, 0), 25%, #f4f6f8)">
    </div>

    <div class="relative flex px-5 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
        <!-- Ecosystem Links -->
        <div class="w-1/2 lg:w-1/4 px-2">
            <h4 class="font-medium">
                About                </h4>

            <ul class="mt-4 text-gray-700">
                <li><a class="about-trigger" href="#about">Money Maker</a></li>
                <li class="mt-1"><a href="https://fb.com/Money Makerhq"> Contact Us </a></li>
            </ul>
        </div>


        <div class="w-1/2 lg:w-3/4 px-2">

        </div>

        <div class="w-1/2 lg:w-1/4 px-2">
            <h4 class="font-medium">Plus</h4>

            <ul class="mt-4 text-gray-700">
                <li><a href="https://fb.com/Money Makerhq">Direct Support</a></li>

            </ul>
        </div>

    </div>
</div>

<!-- Copyright -->
<div class="pt-6 pb-6 bg-gray-100 text-gray-500">
    <div class="flex items-center justify-between px-5 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
        <div>
            © Money Maker - 2021
        </div>

        <div>
            <a target="_blank" href="#" class="">
                <i class="socicon-facebook color text-shadow"></i>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a target="_blank" href="#">
                <i class="socicon-twitter color text-shadow"></i>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a target="_blank" href="#">
                <i class="socicon-linkedin color text-shadow"></i>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a target="_blank" href="#">
                <i class="socicon-instagram color text-shadow"></i>
            </a>
            &nbsp;&nbsp;&nbsp;
            <a target="_blank" href="#">
                <i class="socicon-youtube color text-shadow"></i>
            </a>

        </div>
    </div>
</div>
<script src="{{ URL::asset('complement/aos.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/components/sweetalert/sweetalert.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    // https://michalsnik.github.io/aos/

    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 600, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
    })

    $('.feedback-trigger').click(function (e) {

        e.preventDefault()

        Swal.fire({
            title: `Send Feedback`,
            html: `
                    <p class="center">
                        Any suggestion is meaningful and helpful.                    </p>
                    <form method="post" action="/dashboard" onsubmit="this.style.display='none'">
                        <input type="hidden" name="send_feedback" value="true">
                        <textarea placeholder="" class="swal2-textarea" required name="message"></textarea>
                        <button class="swal2-confirm swal2-styled" style="float:right!important;"
                        >
                            <span class="text with-icon">
                                <i class="material-icons">send</i>
                                Envoyer                            </span>
                        </button>
                    </form>
                `,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false,
            allowOutsideClick: false,
            footer: ``
        })
    })

    $('.about-trigger').click(function (e) {

        e.preventDefault()

        Swal.fire({
            title: `À propos`,
            icon: 'info',
            html: `
                     <div class="z-depth-2">
                            <p class="center">
                                Version 1.5
                            </p>
                            <p class="center color text-shadow">

                            </p>
                            <p class="center">
                                NOV 2020
                            </p>
                     </div>
                `,
            showCloseButton: true,
            showCancelButton: false,
            showConfirmButton: false,
            focusConfirm: false,
            allowOutsideClick: false,
            footer: ``
        })
    })
</script>
<style>
.botui-app-container {
    height: auto;
    width: 700px;
    overflow-y: auto;
}

.botui-message-content.text {
    background-color: #fff;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    color: #4a4a4a;
    font-family: 'Lato', sans-serif;
    border-radius: 4px;
    font-size: 18px;
}

.botui-message-content.loading {
    background-color: #fff;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    color: #4a4a4a;
    border-radius: 4px;
}

.botui-actions-buttons {
    text-align: center;
}

button.botui-actions-buttons-button {
    outline: none !important;
    font-family: 'Lato', sans-serif;
    font-size: 18px;
    border-radius: 4px;
    background-color: #5a46ff;
}

.botui-message-content.human {
    background-color: #5a46ff;
    color: #fff;
}

#sy-whatshelp {
  right: 25px;
  bottom: 25px;
  position: fixed;
  z-index: 9999;
}

#sy-whatshelp a {
  position: relative;
}

#sy-whatshelp a.sywh-open-services {
  background-color: #129bf4;
  color: #fff;
  line-height: 55px;
  margin-top: 10px;
  border: none;
  cursor: pointer;
  font-size: 23px;
  width: 55px;
  height: 55px;
  text-align: center;
  box-shadow: 2px 2px 8px -3px #000;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  display: inline-block;
}

#sy-whatshelp a.sywh-open-services i {
  line-height: 55px;
}

#sy-whatshelp a.sywh-open-services i.fa-times {
  display: none;
}

#sy-whatshelp .sywh-services {
  width: 55px;
  height: auto;
}

#sy-whatshelp .sywh-services a {
  display: none;
}

#sy-whatshelp .sywh-services a i {
  background-color: #129bf4;
  color: #fff;
  line-height: 55px;
  margin-top: 10px;
  border: none;
  cursor: pointer;
  font-size: 23px;
  width: 55px;
  height: 55px;
  text-align: center;
  box-shadow: 2px 2px 8px -3px #000;
  border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
}

#sy-whatshelp .sywh-services a.email i {
  background-color: #b92b27;
}

#sy-whatshelp .sywh-services a.instagram i {
  background-color: #e4405f;
}

#sy-whatshelp .sywh-services a.messenger i {
  background-color: #0084ff;
}

#sy-whatshelp .sywh-services a.whatsapp i {
  background-color: #25d366;
}

#sy-whatshelp .sywh-services a.call i {
  background-color: #ff6600;
}

a[data-tooltip] {
  position: relative;
}

a[data-tooltip]::before,
a[data-tooltip]::after {
  position: absolute;
  display: none;
  opacity: 0.85;
  transition: all 0.3s ease-in-out;
}

a[data-tooltip]::before {
  content: attr(data-tooltip);
  background: #000;
  color: #fff;
  font-size: 13px;
  padding: 7px 11px;
  border-radius: 5px;
  white-space: nowrap;
  text-decoration: none;
}

a[data-tooltip]::after {
  width: 0;
  height: 0;
  border: 6px solid transparent;
  content: "";
}

a[data-tooltip]:hover::before,
a[data-tooltip]:hover::after {
  display: block;
}

a.sywh-open-services[data-tooltip]::before,
a.sywh-open-services[data-tooltip]::after {
  display: block;
}

a.data-tooltip-hide[data-tooltip]::before,
a.data-tooltip-hide[data-tooltip]::after {
  display: none !important;
}

a.sywh-open-services[data-tooltip][data-placement="left"]::before {
  top: 11px;
}

a[data-tooltip][data-placement="left"]::before {
  top: -7px;
  right: 100%;
  line-height: normal;
  margin-right: 10px;
}

a[data-tooltip][data-placement="left"]::after {
  border-left-color: #000;
  border-right: none;
  top: 50%;
  right: 100%;
  margin-top: -6px;
  margin-right: 4px;
}

a[data-tooltip][data-placement="right"]::before {
  top: -7px;
  left: 100%;
  line-height: normal;
  margin-left: 10px;
}

a[data-tooltip][data-placement="right"]::after {
  border-right-color: #000;
  border-left: none;
  top: 50%;
  left: 100%;
  margin-top: -6px;
  margin-left: 4px;
}

a[data-tooltip][data-placement="top"]::before {
  bottom: 100%;
  left: 0;
  margin-bottom: 10px;
}

a[data-tooltip][data-placement="top"]::after {
  border-top-color: #000;
  border-bottom: none;
  bottom: 100%;
  left: 10px;
  margin-bottom: 4px;
}

a[data-tooltip][data-placement="bottom"]::before {
  top: 100%;
  left: 0;
  margin-top: 10px;
}

a[data-tooltip][data-placement="bottom"]::after {
  border-bottom-color: #000;
  border-top: none;
  top: 100%;
  left: 10px;
  margin-top: 4px;
}

</style>




<div id="sy-whatshelp">
  <div class="sywh-services">
    <a href="" class="messenger" data-tooltip="Livechat" data-placement="left" target="_blank">
      <i class="fa fa-comments"></i>
    </a>
    <a href="" class="whatsapp" data-tooltip="WhatsApp" data-placement="left" target="_blank">
      <i class="fa fa-whatsapp"></i>
    </a>
    <a href="" class="call" data-tooltip="Call" data-placement="left">
      <i class="fa fa-phone"></i>
    </a>
  </div>
  <a class="sywh-open-services" data-tooltip="Contact Us" data-placement="left">
				<i class="fa fa-comments"></i>
    <i class="fa fa-times"></i>
  </a>
</div>

 <script>

jQuery(function ($) {
  $('a.sywh-open-services').click(function () {
    if ($('.sywh-services').hasClass('active')) {
      $('.sywh-services').removeClass('active');
      $('a.sywh-open-services i.fa-times').hide();
      $('a.sywh-open-services i.fa-comments').show();
      $('a.sywh-open-services').removeClass('data-tooltip-hide');
      $('.sywh-services a:nth-child(1)').delay(0).fadeOut();
      $('.sywh-services a:nth-child(2)').delay(100).fadeOut();
      $('.sywh-services a:nth-child(3)').delay(200).fadeOut();
      $('.sywh-services a:nth-child(4)').delay(300).fadeOut();
      $('.sywh-services a:nth-child(5)').delay(400).fadeOut();
    } else {
      $('.sywh-services').addClass('active');
      $('a.sywh-open-services i.fa-comments').hide();
      $('a.sywh-open-services i.fa-times').show();
      $('a.sywh-open-services').addClass('data-tooltip-hide');
      $('.sywh-services a:nth-child(5)').delay(0).fadeIn();
      $('.sywh-services a:nth-child(4)').delay(100).fadeIn();
      $('.sywh-services a:nth-child(3)').delay(200).fadeIn();
      $('.sywh-services a:nth-child(2)').delay(300).fadeIn();
      $('.sywh-services a:nth-child(1)').delay(400).fadeIn();
    }
  });
});

 </script>

</body>


<!-- Mirrored from Money Maker.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Jan 2021 06:35:51 GMT -->
</html>
