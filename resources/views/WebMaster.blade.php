<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style="overflow-x:hidden;">
        <div id="app">
            <div><navbar-compo v-bind:url="'WebMaster'" /></div>
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
                <add-admin url={{url('/Admin')}} csrf_token={{csrf_token()}} errors={!! json_encode($errors) !!}/>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/app.js">
</script>
</body>
</html>
