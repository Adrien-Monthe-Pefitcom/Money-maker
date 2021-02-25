
   @extends('layouts.dash')
   @section('content')

   <style>
    .error_form {
        font-size: 15px;
        font-family: Arial;
        color: #FF0052;
    }
    </style>
 <!-- App Capsule -->
 <div id="appCapsule">
   <div class="section mt-2 text-center">
     <h1>Nouveau Point de Vente</h1>
     <h4>Terminer le processus d'enregistrement</h4>
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
<div class="row form">
    <div class="col-md-6 form">
        <form role="form" action="{{route('process-nv-ptvente')}}" method="POST" id="msform" enctype="multipart/form-data" class="login-box">
            @csrf
            <div class="form-group">
                <label for="owner">Candidature par: *</label>
                
                <select name="owner" class="form-control">
                    @foreach($validusers as $validuser)
                        <option value="{{$validuser->no_compte_carte_virtuelle}}">{{$validuser->name}}</option>
                    @endforeach
                </select>
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Numero d'enregistrement RCCM *</label>
                <input type="text" class="form-control" id="rccm" aria-describedby="emailHelp" name="rccm" placeholder="">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Depot Initial *</label>
                <input type="text" class="form-control" id="initialdepot" aria-describedby="emailHelp" name="initialdepot" placeholder="">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="copierccm">Copie RCCM *</label>
                <input type="file" class="form-control" id="copierccm" aria-describedby="emailHelp" id="rccm" name="copierccm" placeholder="">
                <small id="emailHelp" class="form-text text-muted"></small>
                <span class="error_form" id="rccm_error_message"></span>
            </div>
            <div class="form-group">
                <label for="contribuable">Copie carte de contribuable*</label>
                <input type="file" class="form-control" name="contribuable" id="contribuable">
                <small id="emailHelp" class="form-text text-muted"></small>
                <span class="error_form" id="contribuable_error_message"></span>
            </div>
            <div class="form-group">
                <label for="copieredevance">Copie non redevance*</label>
                <input type="file" class="form-control"  name="copieredevance" id="redevance">
                <span class="error_form" id="redevance_error_message"></span>
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
                <label for="localisation">Localisation Point de Vente *</label>
                <input type="text" class="form-control" id="localisation" aria-describedby="emailHelp" placeholder="API Geolocalisation" name="localisation">
                <small id="emailHelp" class="form-text text-muted"></small>
            </div>            
            <ul class="list-inline pull-right">
                <li><input type="reset" id="cancel2" name ="cancel_save" value="Annuler" class="btn" style="background: #424145; color: white "></li> 
                <li><input type="submit" value="Valider" name="regist" class="btn" style="background: #efaa1e; color: white;"></li>                                       
            </ul>
    </form>
    </div>
    <div class="col-md-6">
        <img src="/complement/assets/img/bus.jpg">
    </div>
</div>
<style>
    .form{
        padding-left: 5rem;
    }
</style>
<script type="text/javascript" src="{{ URL::asset('complement/ptvente.js') }}"></script>
<script>
$(document).ready(function () {
    // alert('gg');
});
    var error_rccm = true;
var error_contribuable = true;
var error_redevance = true;

$('#rccm').change(function() {
    check_size_rccm();
    
});

$('#contribuable').change(function() {
    check_size_contribuable();
    
});

$('#redevance').change(function() {
    check_size_redevance();
    
});

function check_size_rccm() {
    let size =  document.getElementById('rccm').files[0].size;
     alert(size);

    if (size < 1000000) {
        $('#rccm_error_message').hide();
        error_rccm = false;
    } else {
        $('#rccm_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
        $('#rccm_error_message').show();
        error_rccm = true;
    }
  }

  function check_size_contribuable() {
    let size =  document.getElementById('contribuable').files[0].size;
    // alert(t);

    if (size < 1000000) {
        $('#contribuable_error_message').hide();
        error_contribuable = false;
    } else {
        $('#contribuable_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
        $('#contribuable_error_message').show();
        error_contribuable = true;
    }
  }

  function check_size_redevance() {
    let size =  document.getElementById('redevance').files[0].size;
    // alert(t);

    if (size < 1000000) {
        $('#redevance_error_message').hide();
        error_redevance = false;
    } else {
        $('#redevance_error_message').html('Taille du Fichier depassee!! Taille requise: 1Mo');
        $('#redevance_error_message').show();
        error_redevance = true;
    }
  }
</script>
@endsection