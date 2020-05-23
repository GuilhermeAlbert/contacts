@extends('layouts.webapp.master')

@section('breadcrumbs')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Contacts</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <a href="{{ route('create_contact') }}" class="btn btn-success pull-right m-l-20 waves-effect waves-light">
            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
            Create
        </a>
        <a href="#" class="btn btn-info pull-right m-l-20 waves-effect waves-light">
            <i class="fa fa-refresh fa-fw" aria-hidden="true"></i>
            Refresh
        </a>
        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="active">Contacts</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="white-box">
        <h3 class="box-title">Contacts</h3>
        <p class="text-muted">Here you will see your contacts.</p>
    </div>
</div>
@if(count($contacts) > 0)
<list-contact-component :contacts="{{ $contacts }}"></list-contact-component>
@else
<empty-component title="Nothing to see here" description="Click at the button above to create a new contact." :show-action-button="true" button-url="/contacts/new" button-title="Create contact"> </empty-component>
@endif
@endsection

@section('javascripts')

@endsection