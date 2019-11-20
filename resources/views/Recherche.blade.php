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
        <div class="col-md-3 col-12 mt-3 ml-md-3">
            <user-card />
        </div>
        <div class="col-md-8 col-12 mt-3 ml-md-4">
            <div>
                <rech-compo v-bind:url_admin="'Administratif'" />
            </div>
            <div>
                <list-compo />
            </div>
            <br><br>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/app.js">
</script>
</body>
</html>
