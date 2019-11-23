<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="overflow-x:hidden;">
        <div id="app">
            <div><navbar-compo v-bind:url="'rech'" /></div>
            <br><br><br><br>
    <div class="row">
        <div class="col-md-3 col-12 mt-3 ml-md-5">
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
            <div>
                <!--rech-compo @research_data="research_data" v-bind:url_admin="'etudiants'" /-->
                <div class="panel-body">
                    {!! Form::open(['route' => 'storeEtudiant']) !!}
                    <div class="form-group {!! $errors->has('matricule') ? 'has-error' : '' !!}">
                        {!! Form::text('matricule', null, ['class' => 'form-control', 'placeholder' => 'Matricule étudiant']) !!}
                    </div>
                    {!! Form::submit('Chercher', ['class' => 'btn btn-primary pull-right', 'dusk' => 'chercher']) !!}
                    {!! Form::close() !!}
                </div>
                <a href="http://localhost/TP_DIAA-master/public/etudiants" class="btn btn-primary">
                    <span class="glyphicon"></span> Plus d'options
                </a>
            </div>
            <br>
            <!--div>
                <list-compo  v-bind:info="resultData"></list-compo>
            </div-->
            <br><br>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/app.js">
</script>
</body>
</html>
