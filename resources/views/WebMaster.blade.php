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
    <div><navbar-compo /></div>
    <br><br><br><br>
    <div class="row">
        <div class="col-md-3 col-12 mt-3 ml-md-3">
            <user-card />
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
            <div>
                <!--add-admin url={{url('/Admin')}} csrf_token={{csrf_token()}} errors={!! json_encode($errors) !!}/-->
                <div class="panel-body">
                    {!! Form::open(['route' => 'storeAdministratif']) !!}
                    <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                        {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Nom']) !!}
                    </div>
                    <div class="form-group {!! $errors->has('datNaissance') ? 'has-error' : '' !!}">
                        {!! Form::date('dateNaissance', null, ['class' => 'form-control', 'placeholder' => 'Date de naissance']) !!}
                    </div>
                    <div class="form-group {!! $errors->has('adresse') ? 'has-error' : '' !!}">
                        {!! Form::text('adresse', null, ['class' => 'form-control', 'placeholder' => 'Adresse']) !!}
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                    </div>
                    <div class="form-group {!! $errors->has('login') ? 'has-error' : '' !!}">
                        {!! Form::text('login', null, ['class' => 'form-control', 'placeholder' => 'Nom utilisateur']) !!}
                    </div>
                    <div class="form-group {!! $errors->has('motPasse') ? 'has-error' : '' !!}">
                        {!! Form::text('motPasse', null, ['class' => 'form-control', 'placeholder' => 'Mot de passse']) !!}
                    </div>
                    {!! Form::submit('Ajouter', ['class' => 'btn btn-primary pull-right', 'dusk' => 'ajouter']) !!}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/app.js">
</script>
</body>
</html>
