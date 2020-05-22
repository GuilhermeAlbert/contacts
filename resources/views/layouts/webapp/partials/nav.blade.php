<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <div class="top-left-part">
            <!-- Logo -->
            <a class="logo" href="{{ route('dashboard') }}">
                <!-- Logo icon image, you can use font-icon also -->
                <b>
                    <!--This is dark logo icon-->
                    <img src="{{ asset('website/images/notebook.png') }}" alt="home" class="dark-logo" width="33px" />

                    <!--This is light logo icon-->
                    <img src="{{ asset('website/images/notebook.png') }}" alt="home" class="light-logo" width="33px" />
                </b>
                <!-- Logo text image you can use text also -->
                <span class="hidden-xs">
                    <!--This is dark logo text-->
                    <img src="{{ asset('website/images/contacts-brand.png') }}" alt="home" class="dark-logo" />

                    <!--This is light logo text-->
                    <img src="{{ asset('website/images/contacts-brand.png') }}" alt="home" class="light-logo" width="133px" />
                </span>
            </a>
        </div>
        <!-- /Logo -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li>
                <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
            </li>
            <li>
                <a class="profile-pic" href="{{ route('profile') }}">
                    <b class="hidden-xs">
                        {{ Auth::user()->name }}
                    </b>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>