@extends('layouts.webapp.master')

@section('breadcrumbs')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Trash</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

        <a href="#" class="btn btn-danger pull-right m-l-20 waves-effect waves-light">
            <i class="fa fa-trash fa-fw" aria-hidden="true"></i>
            Empty trash
        </a>

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

@if(count($contacts) > 0)
<list-trashed-contact-component :contacts="{{ $contacts }}"></list-trashed-contact-component>
@else
<empty-component title="Nothing to see here" description="Click at the button above to create a new contact." :show-action-button="true" button-url="/contacts/new" button-title="Create contact"> </empty-component>
@endif

@endsection

@section('javascripts')

@endsection