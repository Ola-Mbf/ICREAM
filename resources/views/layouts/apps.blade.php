<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>iCREAM - Ice Cream Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="">Support</a>
                    </div>
                </div>
                
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        @guest
                            
                                <a class="nav-link text-white pr-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                            
                            @if (Route::has('register'))
                                
                                    <a class="nav-link text-white pr-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                
                            @endif
                        @else
                            
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white pr-3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            
                        @endguest
                                               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        
                        <div class="dropdown">
                         <a class="nav-item nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Info</a>
                           <div class="dropdown-menu">
                             <a class="dropdown-item" href="{{route('create-info')}}">add info</a>
                             <a class="dropdown-item" href="{{route('index-infos')}}">All Info</a>
                           </div>
                        </div>                                                                                
                        <div class="dropdown">                                                           
                         <a class="nav-item nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Chef</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('create-chef')}}">add chef</a>
                              <a class="dropdown-item" href="{{route('index-chefs')}}">All chefs</a>
                             </div>
                        </div>
                        <div class="dropdown"> 
                         <a class="nav-item nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Product</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('create-product')}}">add produt</a>
                              <a class="dropdown-item" href="{{route('index-products')}}">All products</a>
                            </div>
                        </div>
                    <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                    <div class="navbar-nav mr-auto py-0">
                        <div class="dropdown">                       
                         <a class="nav-item nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Service</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('create-service')}}">add service</a>
                              <a class="dropdown-item" href="{{route('index-services')}}">All services</a>
                            </div>
                        </div>
                        <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Client</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('create-client')}}">add client</a>
                              <a class="dropdown-item" href="{{route('index-clients')}}">All clients</a>
                            </div>
                        </div>
                        <div class="dropdown">
                        <a class="nav-item nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Message</a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('index-messages')}}">All messages</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    @yield('content')
   

         <!-- Footer Start -->
     <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">i</span>CREAM</h1>
                    </a>
                </div>
                <div class="col-12">
                    <p class="m-0">&copy; <a href="#">Domain</a>. All Rights Reserved. Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>

    <!-- Contact Javascript File -->

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
     
</body>

</html>