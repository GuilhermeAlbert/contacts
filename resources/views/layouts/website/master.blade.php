<!DOCTYPE html>
<html lang="en">

<head>
    <title>imagine &mdash; Onepage Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="codepixer">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.website.partials.fonts')
    @include('layouts.website.partials.styles')

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <!-- start overlayer Area -->
    <!-- @include('layouts.website.partials.overlayer') -->
    <!-- end overlayer Area -->

    <div id="app" class="app">
        <div class="site-wrap" id="home-section">
            <!-- start mobile Area -->
            @include('layouts.website.partials.mobile-menu')
            <!-- end mobile Area -->

            <!-- start header Area -->
            @include('layouts.website.partials.header')
            <!-- end header Area -->

            @section('content')
            @show

            <!-- Start Footer Area -->
            @include('layouts.website.partials.footer')
            <!-- End Footer Area -->
        </div>
    </div>
    <!-- .site-wrap -->

    @include('layouts.website.partials.scripts')
    @section('javascript')
    @show
</body>

</html>