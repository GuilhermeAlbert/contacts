@extends('layouts.webapp.master')

@section('breadcrumbs')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Trash</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="active">Trash</li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="white-box">
        <h3 class="box-title">Trash</h3>
        <p class="text-muted">Here you will see your trashed contacts.</p>
    </div>
</div>
<list-trashed-contact-component :contacts="{{ $contacts }}"></list-trashed-contact-component>
@endsection

@section('javascripts')

@endsection