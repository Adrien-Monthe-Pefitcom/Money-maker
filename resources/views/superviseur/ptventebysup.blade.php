
   @extends('layouts.dash')
   @section('content')

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
        <form role="form" action="{{route('process-ptvente-by-superviseur')}}" method="POST" id="msform" enctype="multipart/form-data" class="login-box">
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

            <!--ptvente -->
            <input class="form-control" type="hidden" name="num_ptvente_sup" id="num_ptventesup" placeholder="">           
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
<div class="row">
</div>

<style>
    .form{
        padding-left: 5rem;
    }
</style>
<script type="text/javascript" src="{{ URL::asset('complement/ptvente.js') }}"></script>
<script>
    let numptventesup = Math.floor(Math.random() *(90100000100 - 10100000100) + 90100000100);
    $('#num_ptventesup').val(numptventesup);
</script>
@endsection;