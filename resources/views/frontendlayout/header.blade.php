
<header class="header1">
        <div class="header-top-bar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="header-left">
                            <address>4809 Argonne Street, Suite 155, Denver CO 80249.</address>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="headr-bar-right">
                            <a href="tel:720 583 2110"> Phone: 720 583 2110</a>
                            <a href="tel:720 583 2110"> Fax: 720 583 0326
                            </a>
                            <div class="serch-fl">
                                <a class="ccdda" href="#"><i class="fas fa-search"></i></a>
                            </div>
                            <a href="#"><i class="fas fa-shopping-cart"></i></a>
                        </div>
                        <div class="searchh ccfdf">
                            <form id="search"><input type="text" placeholder="Search"><button type="submit"
                                    class="sbtn">Search Now</button>
                                <a href="javascript:void(0)" class="srch"><i class="far fa-search"></i></a></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="main-navigation-wrapper"
            class="navbar navbar-default header-middle header-area header-middle position-relative">
            <div class="container">
                <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 navbar-header">
                    <div class="header-logo">
                         <a href="{{ url('/') }}"><img src="{{ asset('frontendassets/assets/img/homepage2/tksphlogo.png') }}" alt="logo"></a>
                    </div>
                    <button type="button" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false"
                        class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span
                            class="icon-bar"></span><span class="icon-bar"></span><span
                            class="icon-bar"></span></button>
                </div>
                <div id="main-navigation" class="col-xl-9 col-lg-12 col-md-12 collapse navbar-collapse "><ul class="nav navbar-nav">
                        <li class="dropdown ">
                            <a href="{{ url('/') }}" class="active">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">TKS Pharmacy</a><i class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                <!--<li><a href="about.php">About us</a></li>
                                <li><a href="about-v-2.html">About us-2</a></li>
                                <li class="submenu_child">
                                    <a href="doctors.html">Our Doctor</a><i class="fa fa-chevron-down"></i>
                                    <ul class="dropdown-submenu second_submenu">
                                        <li><a href="doctors-details.html">Doctor's Detail</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="{{ url('newpatient') }}">New Patient</a></li>
                                <li><a href="{{ url('refill') }}">Refill Prescription</a></li>
                                <li><a href="{{ url('transferpatient') }}">Transfer Prescription</a></li>
                                <li><a href="#">Help</a></li>
                                
                                <!--<li><a href="comingsoon.html">Com</a></li>
                                <li><a href="maintenance.html">Mai</a></li>
                                <li><a href="404.html">404 Page</a></li>-->
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Our Services</a><i class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                <li class="submenu_child">
                                    <a href="{{ url('pcs') }}">Pharmaceutical Community Services</a></li>
                                   
                                </li>
                                <li class="submenu_child">
                                    <a href="{{ url('dme') }}">Durable Medical Equipment</a>
                                    </li>
                                <li class="submenu_child">
                                    <a href="{{ url('cc') }}">Custom Compounding</a></li>
                                   <li class="submenu_child">
                                    <a href="{{ url('mtm') }}"> Medication Therapy Management</a></li>
                                    <li class="submenu_child">
                                    <a href="{{ url('mpc') }}"> Pharmacy Medical Consultation</a></li>
                                    <li class="submenu_child">
                                    <a href="{{ url('fmd') }}">Free Medication Delivery</a></li> 
                                     <li class="submenu_child">
                                        <a href="{{ url('tcs') }}">TKS Clinical Services</a></li>
                                    <li class="submenu_child">
                                    <a href="{{ url('tc') }}"> Travel Consultation</a></li>
                                    <!--<ul class="dropdown-submenu second_submenu">
                                        <li><a href="services-d
                                        etails.v.3.html"></a></li>
                                    </ul>-->
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#">Online Request</a><i class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                <li><a href="#">TKS PAY</a></li>
                                
                            </ul>
                        </li>
                        <!--<li class="dropdown">
                            <a href="blog-list.html">Blog</a><i class="fa fa-chevron-down"></i>
                            <ul class="dropdown-submenu">
                                <li><a href="blog-grid.html">Blog-Grid</a></li>
                                <li><a href="blog-left.html">Blog-List-Left</a></li>
                                <li><a href="blog-right.html">Blog-List-Right</a></li>
                                <li><a href="blog-details.html">Blog-details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="shop-detail.html">Shop</a></li>-->
                        <li class="dropdown"><a href="{{ url('contact') }}">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>