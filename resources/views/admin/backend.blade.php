<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>@yield('title')  &#8212; Amtech </title>

        <meta name="description" content="">
        <meta name="author" content="saroj">
        <meta name="robots" content="noindex, nofollow">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{ asset('assets/media/favicon.pn') }}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Fonts and OneUI framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet"> 
        @yield('data-table-css')

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>
        <!-- Page Container -->
       
        <div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
            <!-- Side Overlay-->
            <aside id="side-overlay" class="font-size-sm">
                <!-- Side Header -->
                <div class="content-header border-bottom">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="{{ asset('/uploads/avatars/1.png')}}" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-fw fa-times text-danger"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
                <!-- END Side Header -->

              
            </aside>
            <!-- END Side Overlay -->

           
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="javascript:void(0)">
                        <i class="fa fa-circle-notch text-primary"></i>
                        <span class="smini-hide">
                            <span class="font-w700 font-size-h5">Amtech</span> 
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                       

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Side Navigation -->
                <div class="content-side content-side-full">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link{{ request()->is('admin/dashboard') ? ' active' : '' }}" href="{{ route('home') }}">
                                <i class="nav-main-link-icon si si-speedometer"></i>
                                <span class="nav-main-link-name">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">News</li>
                        <li class="nav-main-item{{ request()->is('posts/*') ? ' open' : '' }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                <i class="nav-main-link-icon si si-note"></i>
                                <span class="nav-main-link-name">Posts</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/posts') ? ' active' : '' }}" href="{{ route('posts') }}">
                                        <span class="nav-main-link-name">All Posts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/post/create') ? ' active' : '' }}" href="{{ route('post.create') }}">
                                        <span class="nav-main-link-name">Add Post</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('admin/posts/trashed') ? ' active' : '' }}" href="{{ route('posts.trashed') }}">
                                            <span class="nav-main-link-name">Restore Post</span>
                                        </a>
                                    </li>
                            </ul>
                        </li>
                        <li class="nav-main-item open">
                                <a class="nav-main-link{{ request()->is('admin/categories') ? ' active' : '' }}" href="{{ route('categories') }}">
                                    <i class="nav-main-link-icon si si-grid"></i>
                                    <span class="nav-main-link-name">Categories</span>
                                </a>
                        </li>


                        
                        <li class="nav-main-heading">Extras</li>

                        <li class="nav-main-item{{ request()->is('product/*') ? ' open' : '' }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Product</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/product') ? ' active' : '' }}" href="{{ route('product') }}">
                                        <span class="nav-main-link-name">All Product</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/pcategory') ? ' active' : '' }}" href="{{ route('pcategory') }}">
                                        <span class="nav-main-link-name">Product Category</span>
                                    </a>
                                </li>
                
                            </ul>
                        </li>


                        <li class="nav-main-item{{ request()->is('mrp/*') ? ' open' : '' }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Mrp</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/mrp') ? ' active' : '' }}" href="{{ route('mrp') }}">
                                        <span class="nav-main-link-name">All Mrp</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/mrpcategory') ? ' active' : '' }}" href="{{ route('mrpcategory') }}">
                                        <span class="nav-main-link-name">Mrp Category</span>
                                    </a>
                                </li>
                
                            </ul>
                        </li>

                        <li class="nav-main-item open">
                            <a class="nav-main-link{{ request()->is('admin/fproduct') ? ' active' : '' }}" href="{{ route('fproduct') }}">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Featured Product</span>
                            </a>
                        </li>

                        <li class="nav-main-item open">
                            <a class="nav-main-link{{ request()->is('admin/nproduct') ? ' active' : '' }}" href="{{ route('nproduct') }}">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">New Product</span>
                            </a>
                        </li>

                        <li class="nav-main-item open">
                            <a class="nav-main-link{{ request()->is('admin/gallery') ? ' active' : '' }}" href="{{ route('gallery') }}">
                                <i class="nav-main-link-icon si si-grid"></i>
                                <span class="nav-main-link-name">Gallery</span>
                            </a>
                        </li>


                        <li class="nav-main-item{{ request()->is('job/*') ? ' open' : '' }}">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                <i class="nav-main-link-icon si si-grid "></i>
                                <span class="nav-main-link-name">Job Vacancy</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/job') ? ' active' : '' }}" href="{{ route('job') }}">
                                        <span class="nav-main-link-name">Job List</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link{{ request()->is('admin/njob') ? ' active' : '' }}" href="{{ route('njob') }}">
                                        <span class="nav-main-link-name">News PaperJob</span>
                                    </a>
                                </li>
                      
                            </ul>
                        </li>
    

                        <li class="nav-main-heading">Administration</li>

                        <li class="nav-main-item open">
                            <a class="nav-main-link{{ request()->is('admin/users') ? ' active' : '' }}" href="{{ route('users') }}">
                                <i class="nav-main-link-icon si si-users"></i>
                                <span class="nav-main-link-name">Users</span>
                            </a>
                        </li>
                     
                        <li class="nav-main-item open">
                                <a class="nav-main-link{{ request()->is('admin/user/profile') ? ' active' : '' }}" href="{{ route('user.profile') }}">
                                    <i class="nav-main-link-icon si si-user "></i>
                                    <span class="nav-main-link-name">Profile</span>
                                </a>
                            </li>
                            <li class="nav-main-item open">
                                    <a class="nav-main-link{{ request()->is('admin/settings') ? ' active' : '' }}" href="{{ route('settings') }}">
                                        <i class="nav-main-link-icon si si-settings"></i>
                                        <span class="nav-main-link-name">Settings</span>
                                    </a>
                            </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                        <button type="button" class="btn btn-sm btn-dual mr-2" >
                             <a href="{{ route('index') }}" target="_blank"> <i class="fa fa-home"> Visit Front</a></i>
                        </button>
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                            <i class="si si-magnifier"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                        <form class="d-none d-sm-inline-block" action="/admin/dashboard" method="POST">
                            {{ csrf_field() }}
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                <div class="input-group-append">
                                    <span class="input-group-text bg-body border-0">
                                        <i class="si si-magnifier"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded" src="{{ asset('/uploads/avatars/1.png')}}" alt="Header Avatar" style="width: 18px;">
                                <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }} </span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('/uploads/avatars/1.png')}}" alt="">
                                </div>
                                <div class="p-2">
                                    <h5 class="dropdown-header text-uppercase">User Options</h5>
                                
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('user.profile') }}">
                                        <span>Profile</span>
                                            <i class="si si-user ml-1"></i>
                                        </span>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('settings') }}">
                                        <span>Settings</span>
                                        <i class="si si-settings"></i>
                                    </a>

                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('password.form') }}">
                                            <span>Change Password</span>
                                            <i class="si si-lock ml-1"></i>
                                        </a>
                                
                            
                                  
                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                        <span>Log Out</span>
                                        <i class="si si-logout ml-1"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header bg-white">
                    <div class="content-header">
                        <form class="w-100" action="" method="POST">
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-fw fa-times-circle"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
              @yield('content')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="http://cubicaltechnologies.com.np" target="_blank">Cubical Technoloies</a>
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <a class="font-w600" href="#" target="_blank">Amtech</a> &copy; <span data-toggle="year-copy"><?php echo date("Y");?></span>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

      
        </div>
        <!-- END Page Container -->

        <script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>

        <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>

        <script src="{{ asset('assets/js/custom.js') }}"></script>

        <script src="{{ asset('assets/js/plugins/chart.js/Chart.bundle.min.js') }}"></script>


        <!-- Page JS Plugins -->
        <script src="{{ asset('js/toastr.min.js') }}"></script>
        <script>
                @if(Session::has('success'))
                  toastr.success("{{ Session::get('success') }}")
                @endif

                @if(Session::has('info'))
                  toastr.info("{{ Session::get('info') }}")
                @endif

                @if(Session::has('error'))
                  toastr.error("{{ Session::get('error') }}")
                @endif
              
                
        </script>

        @yield('data-table-js')
        @yield('data-table-order')
        @yield('ck-js')
        <!-- Page JS Code -->
        <script src="{{ asset('assets/js/pages/be_pages_dashboard.min.js') }}"></script>
    </body>
</html>
