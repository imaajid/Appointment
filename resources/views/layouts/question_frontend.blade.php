<!DOCTYPE html>
    <html lang="en">

    

<head>
        
        

        @include('frontend.partials.head')
        @include('frontend.partials.css')
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        @include('frontend.partials.frontend_header')
        
        <!--end header-->
        <!-- Navbar End -->

        @yield('content')
   

        <!-- Footer Start -->
        @include('frontend.partials.footer')
      

        <!-- Modal Content Start -->
        @include('frontend.partials.modal')
        <!-- Modal Content End -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

    @include('frontend.partials.js')
    </body>


</html>