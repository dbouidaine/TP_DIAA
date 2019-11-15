@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-3 col-12 mt-3 ml-md-3">
            <user-card />
        </div>
        <div class="col-md-8 col-12 mt-3 ml-md-4">
            <div>
                <add-admin />
            </div>
        </div>
    </div>
@endsection