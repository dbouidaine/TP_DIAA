@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-3 col-12 mt-3 ml-md-3">
            <user-card />
        </div>
        <div class="card col-md-8 col-12 mt-3 ml-md-4 p-5">
            <div style="justify-content-center">
                <h2 color="gray">La liste des etudiants:</h2>
                <br>
                <data-table />
            </div>
        </div>
    </div>
@endsection