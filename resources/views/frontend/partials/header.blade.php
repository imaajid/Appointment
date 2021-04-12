<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="index.html">
            <img src="{{ asset('frontend/images/logo/01.webp') }}" height="50" class="logo-light-mode" alt="">
          
        </a>
        <div class="buy-button">
            <a href="{{asset('login')}}" target="_blank" class="btn btn-primary">Login</a>
        </div><!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->   
            <ul class="navigation-menu">
                <li>
                    <a href="index.html" class="sub-menu-item">Home</a>
                </li>
                <li>
                    <a href="{{asset('about')}}" class="sub-menu-item">About</a>
                </li>
               

              
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">TREATMENTS</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{asset('erectile_dysfunction')}}" class="sub-menu-item">ERECTILE DYSFUNCTION</a></li>
                        <li><a href="{{asset('hair_loss')}}" class="sub-menu-item">HAIR LOSS</a></li>
                        <li><a href="{{asset('premature_ejaculation')}}" class="sub-menu-item">PREMATURE EJACULATION</a></li>
                       
                    </ul>
                </li>
                <li>
                    <a href="{{asset('projects')}}" class="sub-menu-item">Our Projects</a>
                </li>
                <li>
                    <a href="{{asset('blog')}}" class="sub-menu-item">Blog</a>
                </li>
                <li>
                    <a href="{{asset('faq')}}" class="sub-menu-item">FAQ</a>
                </li>
            </ul><!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="{{asset('login')}}" target="_blank" class="btn btn-primary">Login</a>
            </div><!--end login button-->
        </div><!--end navigation-->
    </div><!--end container-->
</header>