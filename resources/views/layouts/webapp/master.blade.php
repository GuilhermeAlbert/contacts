<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('website/images/notebook.png') }}">
    <title>Contacts</title>

    @include('layouts.webapp.partials.styles')
    @include('layouts.webapp.partials.ie')

</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <!-- @include('layouts.webapp.partials.preloader') -->
    <div class="app" id="app">
        <!-- ============================================================== -->
        <!-- Wrapper -->
        <!-- ============================================================== -->
        <div id="wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            @include('layouts.webapp.partials.nav')
            <!-- End Top Navigation -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            @include('layouts.webapp.partials.sidebar')
            <!-- ============================================================== -->
            <!-- End Left Sidebar -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Page Content -->
            <!-- ============================================================== -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    @section('content')
                    @show

                </div>
                <!-- /.container-fluid -->
                @include('layouts.webapp.partials.footer')
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- /#wrapper -->
    </div>
    @include('layouts.webapp.partials.scripts')
    @section('javascript')
    @show

</body>

</html>