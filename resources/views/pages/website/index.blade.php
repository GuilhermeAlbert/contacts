@extends('layouts.website.master')

@section('content')
<div class="site-blocks-cover" style="overflow: hidden;">
    <div class="container">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-12" style="position: relative;" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('website/images/undraw_investing_7u74.svg') }}" alt="Image" class="img-fluid img-absolute">

                <div class="row mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-6 mr-auto">
                        <h1>Make your contacts safe.</h1>
                        <p class="mb-5">Save contacts and manage it right here.</p>
                        <div>
                            <a href="/sign-in" class="btn btn-primary mr-2 mb-2">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')

@endsection