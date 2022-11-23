<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
        <img src="{{url('/frontend/images/logo.jpg')}}" alt="Bds logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">BDS UET KSK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item menu-open">
                    <li class="nav-item">
                        <a href="{{url('/donor')}}" class="nav-link ">
                            <i class="fa-brands fa-wpforms"></i>
                            <p>Register Donor</p>
                        </a>
                    </li>
               </li>
            @if (!is_null(session('role')))
               @if (session('role')!='docs')
                    <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="{{url('/dashboard')}}" class="nav-link ">
                                <i class="fa-solid fa-droplet"></i>
                                <p>Search Blood</p>
                            </a>
                        </li>
                    </li>
               @endif
               @if (session('role')!='manager')
                <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="{{url('/case')}}" class="nav-link ">
                                <i class="fa-solid fa-square-plus"></i>
                                <p>Regester New Case</p>
                            </a>
                        </li>
                    </li>
                    <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="{{url('/case-all')}}" class="nav-link ">
                                <i class="fa-solid fa-book"></i>
                                <p>Case Book</p>
                            </a>
                        </li>
                    </li>
               @endif
               @if (session('role')=='admin')
                    <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="{{url('/report')}}" class="nav-link ">
                                <i class="fa-solid fa-chart-line"></i>
                                <p>Repeorts</p>
                            </a>
                        </li>
                    </li>
                    <li class="nav-item menu-open">
                        <li class="nav-item">
                            <a href="{{url('/user')}}" class="nav-link ">
                                <i class="fa-solid fa-user"></i>
                                <p>Users</p>
                            </a>
                        </li>
                    </li>
                @endif
                <li class="nav-item menu-open">
                    <li class="nav-item">
                        <a href="{{url('/logout')}}" class="nav-link ">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </li>
            @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>