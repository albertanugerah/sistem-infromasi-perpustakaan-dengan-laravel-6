<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                               aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- User Account Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- User Account Icon -->
                    <div class="media">
                       <span class="fa-stack fa-2x ">
                           <i class="fas fa-circle fa-stack-2x" style="color: #00CED1"></i>
                            <i class="fas fa-user-cog fa-stack-1x fa-inverse"></i>
                        </span>

                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                {{  auth()->user()->name }}
                            </h3>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"
                               class=" btn btn-block btn-outline-secondary">Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>

            </div>
        </li>
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" data-widget="fullscreen" href="#" role="button">--}}
        {{--                <i class="fas fa-expand-arrows-alt"></i>--}}
        {{--            </a>--}}
        {{--        </li>--}}
        {{--        <li class="nav-item">--}}
        {{--            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">--}}
        {{--                <i class="fas fa-th-large"></i>--}}
        {{--            </a>--}}
        {{--        </li>--}}
    </ul>
</nav>
<!-- /.navbar -->
