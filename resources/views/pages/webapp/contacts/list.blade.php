@extends('layouts.webapp.master')

@section('breadcrumbs')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Contacts</h4>
    </div>
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <a href="#" class="btn btn-success pull-right m-l-20 waves-effect waves-light">
            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
            Create
        </a>
        <a href="#" class="btn btn-info pull-right m-l-20 waves-effect waves-light">
            <i class="fa fa-refresh fa-fw" aria-hidden="true"></i>
            Refresh
        </a>
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Contacts</li>
        </ol>
    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Contacts</h3>

            <p class="text-muted">Add class <code>.table</code></p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Deshmukh</td>
                            <td>prohaska@gmail.com</td>
                            <td>+556665865465</td>
                            <td>
                                <a href="#" class="btn btn-success waves-effect waves-light">
                                    <i class="fa fa-pencil fa-fw" aria-hidden="true"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-info m-l-5 waves-effect waves-light">
                                    <i class="fa fa-refresh fa-fw" aria-hidden="true"></i>
                                    Refresh
                                </a>
                                <a href="#" class="btn btn-danger m-l-5 waves-effect waves-light">
                                    <i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection

@section('javascripts')

@endsection