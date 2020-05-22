@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <passport-clients></passport-clients>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <passport-authorized-clients></passport-authorized-clients>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <passport-personal-access-tokens></passport-personal-access-tokens>
        </div>
    </div>
</div>
@endsection