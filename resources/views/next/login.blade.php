    <!-- notify js Fremwork -->

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/pnotify/dist/pnotify.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/pnotify/dist/pnotify.brighttheme.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/pnotify/dist/pnotify.buttons.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/pnotify/dist/pnotify.history.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('bower_components/pnotify/dist/pnotify.mobile.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/pages/pnotify/notify.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">



    @extends('layouts.layout2')

    @section('content')





    <!-- App Capsule -->

    <div id="appCapsule" class="bg-white">



      <div class="section mt-2 text-center">

          <h1>Bonjour</h1>

          <h4>Connectez-vous pour la suite.</h4>

      </div>



      @if(Session::has('message'))



      <div class="section mt-2 text-center">

          <button type="button" class="close"

              data-dismiss="alert" aria-label="Close">

              <i

                  class="icofont icofont-close-line-circled"></i>

          </button>

          <p style="color: #efaa1e; font-size: 2rem;"><strong>{{ Session::get('message') }}</p>

      </div>



      @endif





  </div>



  <div class= "row">

        <div class="col-md-6"  style="padding: 1rem;">

        <form  role="form" onsubmit="return SignUp()" id="msform" style="padding-left: 5rem;">

              <!-- fake fields are a workaround for chrome autofill getting the wrong fields -->





            <div class="input-wrapper" style="position: absolute;top: -20000px;">

                <label class="label " >Email or Phone</label>



                <i class="clear-input"><ion-icon name="close-circle"></ion-icon></i>
            </div>







              <div class="form-group basic">

                  <div class="input-wrapper">


                      <label class="label" for="tel">Numero de Telephone ( +2376xxxxxxxx) </label>

                      <input required name="tel" type="text" data-max="25" class="form-control except"

                      id="phone" placeholder="Numéro de téléphone">

                      <i class="clear-input">



                      </i>

                  </div>

              </div>



              <div class="form-group basic">

                  <div class="input-wrapper">

                      <label class="label" for="pin">Code Pin <i class="fa fa-eye" id="togglePassword" onclick="togglePasswordFieldClicked()"></i></label>

                      <input  required name="pin" type="password"

                            class="form-control mixed nospace" id="pin" name="pin"

                            placeholder="Code PIN" minlength="8">

                      <i class="clear-input material-icon">



                      </i>

                  </div>

              </div>

              <div class="form-links mt-2">

                  <div>

                    <a href="{{route('register')}}" class="text with-icon" style="color:  #efaa1e;">

                      <i class="material-icons" style="color:  #efaa1e;">account_circle</i> Vous n'avez pas de compte ?, <u>Créez-en un ici.</u>                    </a>

                  </div>

                  <div><!-- <a href="/assistance" class="text-muted">Forgot PIN?</a> --></div>

              </div>



              <div class="form-button-group">

                  <button type="submit" class="btn btn-block btn-lg" style="color: white; background: #efaa1e; border-color:#efaa1e; ">Se connecter</button>

              </div>



          </form>

        </div>

        <div class="col-md-6"  style="padding: 1rem;">

            <div>

                <image src="{{ URL::asset('complement/assets/img/form2.jpg') }}" style="width: 70%; padding-left: 10rem; padding-bottom: 3rem;">

            </div>

        </div>

  </div>

  <!-- * App Capsule -->



  <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.desktop.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.buttons.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.confirm.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.callbacks.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.animate.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.history.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.mobile.js')}}"></script>

    <script type="text/javascript" src="{{ URL::asset('bower_components/pnotify/dist/pnotify.nonblock.js')}}"></script>





  <script>

    function SignUp() {

    event.preventDefault();

    PNotify.removeAll();

    var info = {};

    var errors = [];

      $("#msform")

      .find("input")

      .each(function() {

        $(this).css("border", "1px solid #ccc");

        if ($(this).val() == "" || $(this).val() == null) {

          $(this).css("border", "1px solid #f77575");

          errors.push($(this).attr("name"));

        }

        info[$(this).attr("name")] = $(this).val();

      });





    // console.log(info);

    login(info);



}



function login(info) {

    $.ajax({



        headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

         },



        type:'POST',



        data:info,



        url: '{{route('process-user-login')}}',



        success:function(response){



            if(response.status=='success'){

                   if (response.code==1) {

                     window.location.href="{{route('user-recap')}}";

                    }

                    if (response.code==2) {

                      window.location.href="{{route('user-recap')}}";

                    }

                    if (response.code==3) {

                      window.location.href="{{route('dashboard-commercial')}}";

                    }

                    if (response.code==4) {

                      window.location.href="{{route('user-recap')}}";

                    }

                    if (response.code==5) {

                      window.location.href="{{route('user-recap')}}";

                    }

                    /*new PNotify({

                        text: response.message,

                        animate_speed: 'fast',

                        type: 'success'

                    });*/

                }



            if(response.status=='info'){

                new PNotify({

                    text: response.message,

                    icon: 'icofont icofont-info-square',

                    animate_speed: 'fast',

                    delay: 1500,

                    type: 'info'

                });

            }



        },



        error:function(response){

                new PNotify({

                    text: 'Error occurred , try again later',

                    icon: 'icofont icofont-info-square',

                    animate_speed: 'fast',

                    delay: 1500,

                    type: 'info'
                });

        }



    });

}

  </script>

    <script>
        function togglePasswordFieldClicked() {

            //  alert('hh');
            var passwordField = document.getElementById('pin');
            var value = passwordField.value;

            if(passwordField.type == 'password') {
                passwordField.type = 'text';
            }
            else {
                passwordField.type = 'password';
            }

            passwordField.value = value;

        }
    </script>

  @endsection
