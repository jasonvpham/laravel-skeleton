@extends('layouts.header')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Example</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('/images/profile160x160.png')}}" class="user-image" alt="User Image">
                    <span class="hidden-xs">User</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-unlock-alt"></i>
                                Update password
                            </a>
                        </div>
                        <div class="row">
                            <a href="#" class="">
                                <i class="fa fa-sign-out"></i>
                                Sign out
                            </a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar  -->
    @extends('layouts.sidenav')

    <!-- Main content -->
    @yield('content')

</div>
<!-- /.content-wrapper -->

    <!-- Main footer -->
    @extends('layouts.footer')

</body>
</html>
