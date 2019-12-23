<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body style="overflow-x:hidden;">
<div id="app">
    <div><navbar-compo></navbar-compo></div>
    <br><br><br><br>
    <div class="row">
        <div class="col-md-3 col-12 mt-3 ml-md-3">
            <user-card></user-card>
        </div>
        <div class="col-md-8 col-12 mt-3 ml-md-4">
            @if ($errors->any())
                <div id="alertt" class="alert alert-danger successs">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div id="alertt" class="alert alert-success alert-block sucesss">
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="col-12">
                <div class="card elegant-text grey lighten-4">
                    <h2 class="card-header p-4">Ajouter Administratif</h2>
                    <div class="card-body white">
                        <!--add-admin url={{url('/Admin')}} csrf_token={{csrf_token()}} errors={!! json_encode($errors) !!}/-->
                        <div class="panel-body">
                                {!! Form::open(['route' => 'storeAdministratif']) !!}
                                <div class="md-form col-6 float-left {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                    <h6>Nom:</h6>
                                    {!! Form::text('nom', null, ['class' => 'form-control','required', 'placeholder' => 'Votre Nom']) !!}
                                </div>
                                <div class="md-form col-6 float-right {!! $errors->has('datNaissance') ? 'has-error' : '' !!}">
                                        <h6>Date de naissance:</h6>
                                    {!! Form::date('dateNaissance', null, ['class' => 'form-control', 'required','placeholder' => 'Date de naissance']) !!}
                                </div>
                                <div class="md-form col-6 float-left {!! $errors->has('adresse') ? 'has-error' : '' !!}">
                                        <h6>Adresse:</h6>
                                    {!! Form::text('adresse', null, ['class' => 'form-control', 'required','placeholder' => 'Votre Adresse']) !!}
                                </div>
                                <div class="md-form col-6 float-right {!! $errors->has('email') ? 'has-error' : '' !!}">
                                        <h6>E-Mail:</h6>
                                    {!! Form::email('email', null, ['class' => 'form-control', 'required','placeholder' => 'Votre Email']) !!}
                                </div>
                                <div class="md-form col-6 float-left {!! $errors->has('login') ? 'has-error' : '' !!}">
                                        <h6>Login:</h6>
                                    {!! Form::text('login', null, ['class' => 'form-control', 'required','placeholder' => 'Nom utilisateur']) !!}
                                </div>
                                <br>
                                <div class="md-form col-6 float-right {!! $errors->has('motPasse') ? 'has-error' : '' !!}">
                                        <h6>Mot de passe:</h6>
                                    {!! Form::text('motPasse', null, ['class' => 'form-control', 'required', 'placeholder' => 'Mot de passse']) !!}
                                </div>
                                {!! Form::submit('Ajouter', ['class' => 'btn btn-lg lg btn-primary mt-3 col-12', 'dusk' => 'ajouter']) !!}
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/app.js">
</script>
</body>
</html>
