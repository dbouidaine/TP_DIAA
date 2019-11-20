<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div id="app">
                <div class="row mt-4 col-12 justify-content-center">
                        <div class="col-8 p-4 col-md-5 col-sm-10" style="height:400px;">
                            <title>Sign In</title>
                            <br><br>
                            <div class="justify-content-center">
                            <login-compo url_webmaster="{{url('/WebMaster')}}" url_admin="{{url('/rech')}}" />
                            </div>
                        </div>
                </div>
            </div>
    </body>
</html>
<script type="text/javascript" src="js/app.js"></script>
