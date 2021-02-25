@extends('layouts.layout1')
    @section('content')
<div class="col-md-6 design">
    <form role="form" action="/urecap" class="login-box">
        <div class="tab-pane" role="tabpanel" id="step4">
                                    <h4 class="text-center">Mise à  jour de vos informations</h4>
                                    <div class="all-info-container">
                                        <div class="list-content">
                                            <a href="#listone" data-toggle="collapse" aria-expanded="false" aria-controls="listone">Vos informations de base <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listone">
                                                <div class="list-box">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>First and Last Name *</label>
                                                                <input class="form-control" type="text"  name="name" value="{{Auth::user()->name}}" placeholder="" disable="true">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Phone Number *</label>
                                                                <input class="form-control" type="text" name="name" placeholder="" value="{{Auth::user()->phone}}" disable >
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Email *</label>
                                                                <input class="form-control" type="email" placeholder="" value="{{Auth::user()->email}}" disable>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Mot de Passe *</label>
                                                                <input class="form-control" type="password" placeholder="" value="{{Auth::user()->password}}" disable >
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listtwo" data-toggle="collapse" aria-expanded="false" aria-controls="listtwo">Informations complementaires 1 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listtwo">
                                                <div class="list-box">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Identifiant Unique du pays</label>
                                                                <input class="form-control" type="text" placeholder="" value="{{Auth::user()->identifiant_unique}}" disable>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>ville</label>
                                                                <input class="form-control" type="text" name="name" placeholder="" value="{{Auth::user()->ville}}" disable >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Pays</label>
                                                                <select name="country2" class="form-control" id="country2" >
                                                                    <option value="NG" selected="selected">Cameroun</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                </select>
                                                            </div>
                                                        </div>



                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Profession</label>
                                                                <input class="form-control" type="text" name="name" placeholder="" value="{{Auth::user()->profession}}" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <a href="#listthree" data-toggle="collapse" aria-expanded="false" aria-controls="listthree">Information Complementaire 2 <i class="fa fa-chevron-down"></i></a>
                                            <div class="collapse" id="listthree">
                                                <div class="list-box">
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Date de Naissance</label>
                                                                <input class="form-control" type="date" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Numero de compte bancaire</label>
                                                                <input class="form-control" type="text" name="name" placeholder="" value="{{Auth::user()->num_compte_bancaire}} ">
                                                            </div>
                                                        </div>


                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Numero de piece</label>
                                                                <input class="form-control" type="text" name="name" placeholder="" value="{{Auth::user()->num_piece}}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Nom de la Banque</label>
                                                                <input class="form-control" type="text" name="name" placeholder="" value="{{Auth::user()->nom_banque}}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Referé par</label>
                                                                <input class="form-control" type="text" name="name" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Copie de CNI</label>
                                                                <img src="">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Copie passport</label>
                                                                <img src="">
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <ul class="list-inline pull-right">
                                        <li><a href="/urecap" class="btn" style="background: #424145; color: white ">Annuler Operation</a></li>
                                        <li><input type="submit" value="Enregistrer" class="btn" style="background:  #efaa1e; color: white"></li>
                                    </ul>
                            </form>
</div>

<div class="col-md- design">
    <img src="{{ URL::asset('complement/assets/img/check.jpg') }}" class="img">
</div>

<style>


        .design{
            margin: 10rem;
        }

        .img{
            width: 40rem;
            position: fixed;
            top: 5rem;
            left: 60rem;
        }


    </style>


    @endsection
