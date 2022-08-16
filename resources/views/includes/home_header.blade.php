 <!-- xxx Loader Start xxx -->
 <div class="preloader bg-orange">
     <div class="content">
         <img src="images/logo_anim.svg" alt="">
         <div class="nk-preloader-spinner"></div>
     </div>
 </div>
 <!-- xxx End xxx -->

 <!-- xxx Header Start xxx -->
 <header class="fixed-top header-fullpage bordered-nav wow fadeInDown">
     <div class="top-bar-right d-flex align-items-center text-md-left">
         <div class="container-lg">
             <div class="row align-items-center">
                 <div class="col d-flex">
                     <div class="top-text">
                         <small class="txt-black">Address</small>
                         254 Street Avenue, LA US
                     </div>
                     <div class="top-text">
                         <small class="txt-black">Emaii Us</small>
                         <a href="#">support@stableincome.uk</a>
                     </div>
                     <div class="top-text">
                         <small class="txt-black">Phone Number</small>
                         +88 (0) 202 0000 001
                     </div>
                 </div>
                 <div class="col-md-auto hide-on-small">

                     <!-- Topbar Language Dropdown Start -->
                     <div class="dropdown d-inline-flex lang-toggle shadow-sm ">
                         <a href="{{ route('user.login') }}" class="btn" 
                             data-animations="slideInUp slideInUp slideInUp slideInUp">Login</a>
                     </div>
                     <!-- Topbar Language Dropdown End -->

                     <div class="d-inline-flex request-btn ml-2">
                         <a class="btn-theme icon-left bg-orange no-shadow d-none d-lg-inline-block align-self-center"
                             href="{{ route('user.register') }}" role="button">Register</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Main Navigation Start -->
     <nav class="navbar navbar-expand-lg bdr-nav bg-transparent">
         <div class="container-lg text-nowrap px-0">
             <div class="d-flex mr-auto">
                 <a class="navbar-brand" href="{{ route('app.home') }}">
                     <img src="{{ asset('assets/images/stableincome.png') }}" alt="">
                 </a>
             </div>
             
             <!-- Topbar Request Quote Start -->
             <span class="order-lg-last d-inline-flex request-btn">
                 <a class="nav-link ml-auto" href="#" id="search_home"><i class="icofont-search"></i></a>
             </span>
             <!-- Toggle Button Start -->
             <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse"
                 data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                 aria-label="Toggle navigation">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>


             <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown"
                 data-animations="slideInUp slideInUp slideInUp slideInUp">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item nav-link">
                         <a class="nav-link " href="{{ route('app.home') }}">Home </i></a>
                     </li>
                     <li class="nav-item nav-link">
                         <a class="nav-link " href="{{ route('about') }}">About US</a>
                     </li>
                     <li class="nav-item nav-link">
                         <a class="nav-link" href="{{ route('investmentplans') }}">Plans </i></a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle-mob" href="" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">Services <i
                                 class="icofont-rounded-down"></i></a>
                         <ul class="dropdown-menu">
                             <li><a class="dropdown-item" href="{{ route('stocks') }}">Stocks</a></li>
                             <li><a class="dropdown-item" href="{{ route('forex') }}">Forex</a></li>
                             <li><a class="dropdown-item" href="{{ route('shares') }}">Shares</a></li>
                             <li><a class="dropdown-item" href="{{ route('precious_metal') }}">Precious Metals</a>
                             </li>
                             <li><a class="dropdown-item" href="{{ route('energies') }}">Energies</a></li>
                             <li><a class="dropdown-item" href="{{ route('indices') }}">Indices</a></li>
                         </ul>
                     </li>
                     <li class="nav-item nav-link">
                         <a class="nav-link" href="{{ route('user.contact') }}">Contact US </i></a>
                     </li>
                     <li class="nav-item nav-link">
                         <a class="nav-link" href="{{ route('user.faq') }}" >FAQs</i></a>
                     </li>
                     <li class="nav-item nav-link">
                        <a class="nav-link" href="{{ route('user.login') }}">Login </i></a>
                    </li>
                    <li class="nav-item nav-link">
                        <a class="nav-link" href="{{ route('user.register') }}" >Register</i></a>
                    </li>
                 </ul>
                 <!-- Main Navigation End -->
             </div>


         </div>
     </nav>
     <!-- Main Navigation End -->
 </header>
 <!-- xxx Header End xxx -->
