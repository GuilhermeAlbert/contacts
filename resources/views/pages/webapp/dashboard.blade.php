@extends('layouts.webapp.master')

@section('breadcrumbs')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total contacts</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash">
                        <img src="{{ asset('website/images/contacts.svg') }}" alt="Contacts" width="32px">
                    </div>
                </li>
                <li class="text-right">
                    <i class="fa fa-caret-up text-success"></i>
                    <span class="counter text-success">{{ $user_contacts_count }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total contacts today</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash2">
                        <img src="{{ asset('website/images/agenda.svg') }}" alt="Contacts" width="32px"></div>
                </li>
                <li class="text-right">
                    <i class="fa fa-caret-up text-purple"></i>
                    <span class="counter text-purple">{{ $user_contacts_today_count }}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
        <div class="white-box analytics-info">
            <h3 class="box-title">Total trashed contacts</h3>
            <ul class="list-inline two-part">
                <li>
                    <div id="sparklinedash3">
                        <img src="{{ asset('website/images/delete.svg') }}" alt="Contacts" width="32px">
                    </div>
                </li>
                <li class="text-right">
                    <i class="fa fa-caret-up text-danger"></i>
                    <span class="counter text-danger">{{ $user_trashed_contacts_count }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Dashboard</h3>
        </div>
    </div>
</div>
@endsection

@section('javascripts')

@endsection