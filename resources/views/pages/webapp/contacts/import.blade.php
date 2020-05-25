@extends('layouts.webapp.master')

@section('breadcrumbs')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Contacts</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <a href="#" class="btn btn-info pull-right m-l-20 waves-effect waves-light">
            <i class="fa fa-download fa-fw" aria-hidden="true"></i>
            Download model
        </a>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="active">Import Contacts</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="white-box">
        <h3 class="box-title">Contacts</h3>
        <p class="text-muted">Here you can import some contacts from a CSV file. <a href="{{ route('import_contacts') }}">You can download the file model clicking here.</a></p>
    </div>
</div>

<import-contacts-component></import-contacts-component>
@endsection

@section('javascripts')

@endsection