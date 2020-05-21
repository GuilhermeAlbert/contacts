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

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign in</button>

                </form>
                <div>
                    <p>
                        <a href="sign-up">
                            I already have an account
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')

@endsection