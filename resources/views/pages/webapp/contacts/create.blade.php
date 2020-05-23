@extends('layouts.webapp.master')

@section('breadcrumbs')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create contact</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

        <ol class="breadcrumb">
            <li><a href="{{ route('contacts') }}">Contacts</a></li>
            <li class="active">Create contact</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Create contact</h3>
        </div>
    </div>
</div>
<create-contact-component></create-contact-component>
@endsection

@section('javascripts')

@endsection