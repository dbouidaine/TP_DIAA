<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="overflow-x:hidden;">
        <div id="app">
            <div><navbar-compo v-bind:url="'rech'"></navbar-compo></div>
            <br><br><br><br>
    <div class="row">
        <div class="col-md-3 col-12 mt-3 ml-md-3">
            <user-card></user-card>
        </div>
        <div class="card col-md-8 col-12 mt-3 ml-md-4 p-4">
            <div style="block: justify-content-center">
             <div id="tb">

                 <data-table url={{url ('/supp')}} v-bind:etudiants={!!json_encode( $etudiants) !!}></data-table>
            </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/app.js"></script>

</body>
</html>
