@extends('layouts.website.master')

@section('content')
<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5" style="margin-top: 50px !important;">
            <div class="col-12 text-center">
                <h2 class="section-title mb-3">Sign in</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('website/images/undraw_bookmarks_r6up.svg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 ml-auto pl-lg-5">
                <h2 class="text-black mb-4 h3 font-weight-bold">Our Mission</h2>
                <p class="mb-4">Eos cumque optio dolores excepturi rerum temporibus magni recusandae eveniet, totam omnis consectetur maxime quibusdam expedita dolorem dolor nobis dicta labore quaerat esse magnam unde, aperiam delectus! At maiores, itaque.</p>
                <ul class="ul-check mb-5 list-unstyled success">
                    <li>Laborum enim quasi at modi</li>
                    <li>Ad at tempore</li>
                    <li>Labore quaerat esse</li>
                </ul>
                <p>
                    <button type="submit" class="btn btn-primary">Learn More</button>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')

@endsection