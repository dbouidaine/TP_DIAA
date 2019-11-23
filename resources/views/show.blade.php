<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service Scolarité</title>
</head>
<body>
    <div class="col-sm-offset-4 col-sm-4" id="app">
        <br>
        <div>
                <list-compo  matricule="{!! $etudiant->matricule !!}" nom="{!! $etudiant->nom !!}" adresse="{!! $etudiant->adresse !!}" email="{!! $etudiant->email !!}" nb="{!! $etudiant->nbAbsences !!}" date="{!! $etudiant->dateNaissance !!}" groupe="{!! $etudiant->groupe !!}" moyennes="{!! $etudiant->moyennes !!}"></list-compo>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>

    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
