<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="overflow-x:hidden;">
        <div id="app">
            <div><navbar-compo /></div>
            <br><br><br><br>  
            @yield('content')
        </div>
    </body>
</html>
<script type="text/javascript" src="js/app.js"></script>