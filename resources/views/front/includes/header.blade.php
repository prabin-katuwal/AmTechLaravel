<section id="underheader" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 topWrap ">
                        <div class="usermenu_area">
                            <div class="menuUsItem pull-right">
                                <div class="contact_area">
                                    <i class="icon-mail icon-rounded"></i>amtechmed55@gmail.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <header id="header" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 topWrap">
                        <div class="logo logo_left">
                            <a class="navbar-brand " href="{{ route('index') }}">
                                <img class="logo_main" src="{{ asset('front/images/logo.png') }}" alt="Amtech logo">
                               
                            </a>
                        </div>
                       <div class="bottomWrap">
                        <div class="search" title="Open/close search form">
                            <div class="searchForm">
                                <form role="search" method="get" class="search-form" action="#">
                                    <input type="text" class="searchField" placeholder="" value="" name="s" title="Search for:">
                                    <button type="submit" class="searchSubmit" title="Start search"><span class="icoSearch"></span></button>
                                </form>
                            </div>
                            <div class="ajaxSearchResults"></div>
                        </div>
                        <a href="#" class="openResponsiveMenu icon-menu"></a>
                        <nav id="mainmenu_wrapper" class="menuTopWrap topMenuStyleLine text-center">
                            <ul id="mainmenu" class="nav sf-menu inited ">
                                <li class="menu-item-has-children custom_view_item {{ request()->is('/') ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('index') }}">Home <span class="caret"></span></a>
                                </li>
                                <li class="menu-item-type-custom menu-item-has-children">
                                    <a href="#" >ABOUT US<span class="caret"></span></a>
                                    <ul class="sub-menu fadeInUp animated">

                                    <li class="menu-item-type-custom {{ request()->is('overview') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('overview')}}">OverView</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about.html" data-toggle="modal" data-target="#myModal">Mission/Vision</a>
                                        </li>

                                        <li class="menu-item-type-custom {{ request()->is('team') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('team')}}">Bod Member</a>
                                        </li>
                                        <!-- The Modal -->
                                          <div class="modal fade" id="myModal">
                                               <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
      
                                                     <!-- Modal Header -->
                                                        <div class="modal-header">
                                                             <h4 class="modal-title">Mission/Vision</h4>
                                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>
         
                                                      <!-- Modal body -->
                                                    <div class="modal-body">
                                                    
                                                <h6> MISSION: </h6>
                                                    Add vitality to life by bringing quality products at affordable price. <br>
                                                    
                                                    <h6> VISION: </h6>
                                                    Become a dominant player in Nepalese pharmaceutical sector.

                                                    </div>
        
                                                                <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                    </div>
                                </div>
  
                    

                                         
                                        <li class="menu-item">
                                            <a href="typography.html" data-toggle="modal" data-target="#myModal3">Future Plan</a>
                                        </li>

                                         <div class="modal fade" id="myModal3">
                                               <div class="modal-dialog modal-dialog-centered">
                                                  <div class="modal-content">
      
                                                     <!-- Modal Header -->
                                                        <div class="modal-header">
                                                             <h4 class="modal-title">Future Plan</h4>
                                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          </div>
         
                                                      <!-- Modal body -->
                                          <div class="modal-body">
                                         1. Eye & Ear Drop Preparations
                                         2. Small Volume Parenteral
                                         </div>
        
                                                                <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                            </div>
                                    </div>
                                </div>


                                          <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-dialog-centered">
                                 <div class="modal-content">
      
                                    <!-- Modal Header -->
                                       <div class="modal-header">
                               <h4 class="modal-title">Future Plan</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                1. Eye & Ear Drop Preparations
                            2. Small Volume Parenteral
                                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>
                                        <li class="menu-item">
                                            <a href="{{ route('guiding_policies') }}">Guiding Policies</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="menu-item-type-custom menu-item-has-children">
                                    <a href="#">PRODUCTS <span class="caret"></span></a>
                                    <ul class="sub-menu fadeInUp animated">
                                        <li class="menu-item {{ request()->is('new_product') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('new_product') }}">New Products</a>
                                        </li>
                                        <li class="menu-item {{ request()->is('product') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('product1') }}">Products Database</a>
                                        </li>
                                        <li class="menu-item {{ request()->is('mrp') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('mrp1')}}">MRP</a>
                                        </li>
                                        <li class="menu-item {{ request()->is('distributor') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('distributor')}}">Disributor</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-type-custom {{ request()->is('gallery') ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('gallery1')}}" class="">Gallery</a>
                                </li>
                                <li class="menu-item-type-custom menu-item-has-children">
                                    <a href="#">Department <span class="caret"></span></a>
                                    <ul class="sub-menu fadeInUp animated">

                                        <li class="menu-item {{ request()->is('qad') ? 'current-menu-item' : '' }} ">
                                            <a href="{{ route('qad') }}">QAD</a>
                                        </li>
                                        <li class="menu-item {{ request()->is('qcd') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('qcd') }}">QCD</a>
                                        </li>

                                         <li class="menu-item {{ request()->is('production') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('production') }}">Production Department</a>
                                        </li>

                                        <li class="menu-item {{ request()->is('research') ? 'current-menu-item' : '' }}">
                                            <a href="{{ route('research') }}">Research Department</a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="menu-item-type-custom {{ request()->is('vacancy') ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('vacancy')}}" class="">Job Vacancy</a>
                                </li>
                                <li class="menu-item-type-custom {{ request()->is('news') ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('news') }}">NEWS</a>
                                </li>
                                <li class="menu-item-type-custom {{ request()->is('contact') ? 'current-menu-item' : '' }}">
                                    <a href="{{ route('contact') }}">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    </div>
                </div>
            </div>
        </header>



        