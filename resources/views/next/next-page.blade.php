
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Ouvrez un compte aujour&#039;hui :: Money Maker </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/socicon@3.0.5/css/socicon.min.css">
    <script src="{{ URL::asset('assets/js/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('complement/assets/js/global2.js') }}"></script>
     <!-- <link rel="icon" href="https://app.noupia.com/assets/img/favicon/favicon.ico" > -->
     <link rel="icon" type="image/jpg" sizes="192x192" href="{{ URL::asset('complement/assets/img/logo.jpg') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('complement/assets/css/global3.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('complement/assets/css/flexbox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('complement/assets/css/app.css') }}" />



    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
<meta name="theme-color" content="#039be5">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="/assets/img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon/favicon-16x16.png"> -->
<link rel="manifest" href="/assets/img/favicon/manifest.json"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/socicon@3.0.5/css/socicon.min.css">
<meta name="msapplication-TileColor" content="#039be5">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="description" content="Money Maker- Mobile Money to Credit Card Service. Online Payments Made Simple & Accessible for Everyone.">
<meta name="keywords" content="noupia,cameroon,credit card,mobile money,mtn,orange money,africa,online">

<noscript>
    <meta http-equiv="Refresh" content="0; url='https://google.com/search?q=enable+javascript'" />
</noscript>

<script src="/assets/js/lib/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="https://app.noupia.com/assets/js/global2.js" ></script>
<!-- <link rel="icon" href="https://app.noupia.com/assets/img/favicon/favicon.ico" > -->
<link rel="stylesheet" type="text/css" href="https://app.noupia.com/assets/components/global/global3.css" />
<link rel="stylesheet" type="text/css" href="https://app.noupia.com/assets/components/global/flexbox.css" />
<link rel="stylesheet" type="text/css" href="https://app.noupia.com/assets/css/app.css" />
<script>
    setInterval(function () {
        
        const online = navigator.onLine
        const isVerifPage = window.location.href.indexOf('verify') > -1
        if (isVerifPage) {
            
            $.ajax({
                type : 'GET',
                url : '/verify',
                data : {
                    check_reload_required : true,
                },
                success : function (data) {
                    data = JSON.parse(data)
                
                    if(data.reload_required == 'yes'){
                        window.location = '?reload=true'
                        return false
                    }
                }
            })
        }

    }, 3000)

    window.PLAYER_ID = 'EMPTY'
</script>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        $(function () { 
            window.OneSignal = window.OneSignal || [];
            OneSignal.push(function() {
                OneSignal.init({
                    appId: "c54e1140-83bd-4827-925d-c4483624cca2",
                    notifyButton: {
                        enable: true,
                    },
                })
                OneSignal.showNativePrompt()  
            }) 
            window.OneSignal.isPushNotificationsEnabled(function(isEnabled) {
                  if (isEnabled) {
                      OneSignal.getUserId( function(userId) {
                          //console.log('player_id is : ' + userId); 
                          window.PLAYER_ID = userId
                      })
                  }
            })
        })
      
    </script>
</head>

<body class="bg-white">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('complement/assets/css/sweetalert.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css"
      integrity="sha512-yye/u0ehQsrVrfSd6biT17t39Rg9kNc+vENcCXZuMz2a+LWFGvXUnYuWUW6pbfYj1jcBb/C39UZw2ciQvwDDvg=="
      crossorigin="anonymous" />
<style>
    #modal-phone-input {
        width: 100% !important;

        font-size: 20px !important;

    }

    .iti.iti--allow-dropdown,
    .iti input {
        width: 100% !important;
        padding: 15px !important;
        height: auto !important;
        border-radius: 5px !important;
        border: 0px solid white !important;
        outline: 0px solid white !important;
        background-color: white !important;
    }

    .iti__country-list * {
        z-index: 2000 !important;
    }

    .iti--allow-dropdown {
        background-color: transparent !important;
    }

    .iti__selected-flag {
        background-color: white !important;
    }
</style>
<script src="{{ URL::asset('assets/js/intltelinput.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
<script>
    $(function () {

        function __() {

            $('.swal2-container').remove()

            Swal.fire({
                    //ttitle: `<i class="material-icons center text-extra-large">phone</i>`,
                    html: `

                 <p class="alert text with-icon no-radius" style="background:  #efaa1e;">
                  <i class="material-icon socicon-whatsapp white-text" style="margin-top:5px!important;"></i> Entrez votre numéro de téléphone WhatsApp ci-dessous..
                 </p>
                 `,
                    input: 'number',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: true,
                    showCloseButton: true,
                    confirmButtonText: `<span class="text with-icon"><i class="material-icons" style="background:  #efaa1e;"></i>Suivant</span>`,
                    inputAttributes: {
                        id: 'modal-phone-input',
                    },
                    onClose: function (input) {

                        
                    },
                    inputValidator: (value) => {
                    if (!value) {

                    }
        }
        }).then(function (info) {

                if (info.dismiss == 'close') {

                    $('body').html(`<style>

                        body {
                            background: #fff!important;
                            overflow: hidden;
                        }

                        body:before {
                            content: '';
                            position: absolute;
                            top: 0;
                            right: 0;
                            width: 50%;
                            height: 100%;
                            background:  #efaa1e;
                            -webkit-transform-origin: 100% 0;
                            -ms-transform-origin: 100% 0;
                            transform-origin: 100% 0;
                            -webkit-transform: skewX(-10deg);
                            -ms-transform: skewX(-10deg);
                            transform: skewX(-10deg);
                            z-index: -1;
                            transform-origin: bottom;
                        }</style>`)
                    window.location = '/next-page2'
                    return false
                }

                let data = $('#modal-phone-input').val()
                data = data.split(' ').join('')

                if(data.length == 0){

                }
                else if (!iti.isValidNumber()) {
                    alert("The Phone Number is not Valid")
                    __()
                }
                else {
                    
                }
            })


            let input = document.querySelector("#modal-phone-input")

            const iti = window.intlTelInput(input, {
                initialCountry: "cm",
                nationalMode: true,
                customContainer: 'no-border no-outline',
                preferredCountries: ["cm","us"],
                autoPlaceholder: "off",
                separateDialCode: true,
                geoIpLookup: function (callback) {
                    $.get('https://ipinfo.io', function () { }, "jsonp").always(function (resp) {
                        let countryCode = (resp && resp.country) ? resp.country : ""
                        callback(countryCode)

                        let city = resp.city ? resp.city.toUpperCase() : ""

                        $('#city').val(city)

                    })
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js?1590403638580", // just for formatting/placeholders etc
            })

            $("#modal-phone-input").addClass('no-border no-outline nospace no-shadow').css({
                textAlign: 'right'
            })
            $('.iti').addClass('center no-radius z-depth-0 hoverable')
            $('.swal2-confirm').addClass('hoverable bg z-depth-0').css({
                position: 'absolute',
                right: '15px',
                marginTop: '70px',
                paddingTop: '25px',
                paddingBottom: '25px',
                border: '2px solid lightgrey',
                zIndex: '-10100',
                borderRadius: '5px',
            })

            $('.swal2-input, .iti__selected-dial-code, .iti__flag-container, .iti__selected-flag')
                .addClass('no-border no-outline ')

            $('.iti__country-list').addClass('no-border color')

            $('.swal2-input').addClass('no-space')
            $('.swal2-input').css({
                'color': 'grey'
            })

        }

        __()

        setInterval(function () {

            const input = $('.swal2-input')
            if (input.length > 0) {

                let placeholder = input.attr('placeholder')
                let length = placeholder.length

                //input.attr('maxlength', length)
                //input.attr('size', length)

                //console.log(length)

                $('#length').val(length)
            }


            let elm = $('div.iti__selected-dial-code')

            if (elm.length > 0) {

                let code = elm.text()
                //console.log(code)
                $('#ccode').val(code)

            }

        }, 500)

    })
</script>


<!-- App Header -->
<div class="appHeader text-light" style="background:  #efaa1e; border-color:  #efaa1e;">
    <div class="left">
                    <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <i class="material-icons">apps</i>
            </a>
         
    </div>
    <div class="pageTitle">
        <img src="{{ URL::asset('complement/assets/img/logo.png') }}" width="120rem">
    </div>
    </div>
<!-- * App Header -->
 
     <!-- App Capsule -->
     <div>  
        <div>
            <style>
                .page-holder {
                    height: 100vh;
                    }
                .center{
                    display: flex;
                    align-items: center;
                    justify-content: center;                                       
                }
                .bg-cover {
                    background-size:contain;
                    background-repeat: no-repeat;                    
                    }
                .front{
                    background-color: rgba(0, 0, 0, .5);
                    width: 1100vw;
                    height: 100vh;
                    padding-left: 50rem;
                    padding-right:50rem;
                    
                }
            </style>
            <div style="background: url(assets/images/pretttybg.jpg)" class="page-holder bg-cover center">

                <div class="container py-5 front">
                </div>
                <header class="text-center text-white py-5" style="position: absolute; text-align: center; padding: 2rem;">
                        <h1 class="display-3 font-weight-bold mb-4" style="color:  white;@media">Bienvenue sur Money Maker</h1>
                        <h1 class="display-6 font-weight-bold mb-4" style="color:  white;">L'appli pour toutes vos transactions financieres</h1>
                        
                </header>
                <div class="carousel-button-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href="{{route('register')}}" class="btn btn-outline-secondary btn-lg btn-block">
                            S&#039;inscrire                        </a>
                        </div>
                        <div class="col-6">
                            <a href="/signin" class="btn btn-lg btn-block" style="background:  #efaa1e; color: white;">
                                Se Connecter                        </a>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

        

    </div>
    <!-- * App Capsule -->
        


<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <i class="material-icons">apps</i>
                    </div>
                    <div class="in">
                        <strong> Money Maker</strong>
                        <div class="text-muted">Money MakerHQ </div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-dismiss="modal">
                        <i class="material-icons">close</i>
                    </a>
                </div>
                <br>
                <!-- * profile box -->

                

                <!-- others -->

                <ul class="listview flush transparent no-line image-listview">
                    
                    <li>
                        <a href="/faqs" class="item">
                            <div class="icon-box" style="background:  #efaa1e; border-color:  #efaa1e;">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="in">
                                Questions
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="/assistance" class="item">
                            <div class="icon-box" style="background:  #efaa1e; border-color:  #efaa1e;">
                                <i class="material-icons">support_agent</i>
                            </div>
                            <div class="in">
                                Assistance
                            </div>
                        </a>
                    </li>
                                        <li>
                        <a href="/language" class="item">
                            <div class="icon-box" style="background:  #efaa1e; border-color:  #efaa1e;">
                                <i class="material-icons">language</i>
                            </div>
                            <div class="in">
                                Langue                            </div>
                        </a>
                    </li>
                    


                    
                    <li>
                        <a href="/terms" class="item">
                            <div class="icon-box" style="background:  #efaa1e; border-color:  #efaa1e;">
                                <i class="material-icons">info</i>
                            </div>
                            <div class="in">
                                Termes                            </div>
                        </a>
                    </li>

                                        <li>
                        <a href="/signin" class="item">
                            <div class="icon-box" style="background:  #efaa1e; border-color:  #efaa1e;">
                                <i class="material-icons">account_circle</i>
                            </div>
                            <div class="in">
                                Connexion                            </div>
                        </a>
                    </li>
                                    </ul>
                <!-- * others -->

                <!-- send money -->
                <div class="listview-title mt-1">&copy; 2020 Money Maker. </div>
                <!--
                    <ul class="listview image-listview flush transparent no-line">
                        <li>
                            <a href="#" class="item">
                                <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Artem Sazonov</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Sophie Asveld</div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="item">
                                <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                                <div class="in">
                                    <div>Kobus van de Vegte</div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    -->
                <!-- * send money -->

            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->

<!-- ///////////// Js Files ////////////////////  -->

<!-- Bootstrap-->
<script src="/assets/js/lib/popper.min.js"></script>
<script src="/assets/js/lib/bootstrap.min.js"></script>
<!-- Ionicons -->
<!--<script src="assets/ionicons/ionicons.js"></script> -->
<!-- Owl Carousel -->
<script src="/assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
<!-- Base Js File -->
<script src="/assets/js/base.js"></script>


<!-- Feedback Action Sheet -->
<div class="modal fade action-sheet" id="feedbackActionSheet" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    Comment améliorer Money Maker?                </h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form method="POST" action="/feedback">
                        <input type="hidden" name="sendFeedback" value="true">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="account3"></label>
                                <select class="form-control custom-select" id="account3">
                                    <option disabled selected value="0" selected> </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <label class="label"> Dites-nous quelque chose</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input145555"> </span>
                                </div>
                                <textarea name="message" class="form-control form-control-lg" placeholder=""
                                    minlength="10" required></textarea>
                            </div>
                        </div>
                        <div class="form-group basic">
                            <button type="submit" class="btn btn-primary btn-block btn-lg" -data-dismiss="modal">
                                Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Feedback Action Sheet -->





<!-- Bootstrap-->
<!-- Required Fremwork -->
<script src="{{ URL::asset('bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
<!-- Required Fremwork -->
<script href="{{ URL::asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Ionicons -->
<!--<script src="assets/ionicons/ionicons.js"></script> -->
<!-- Owl Carousel -->
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Base Js File -->
<script src="{{ URL::asset('assets/js/base.js') }}"></script>
</body>

</html>