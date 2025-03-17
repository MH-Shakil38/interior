<header class="main-header">
    <div class="header-sticky">
        <nav class="container">
            <div class="navbar navbar-expand-lg">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('logo.png')}}" height="60" alt="Logo">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item submenu"><a class="nav-link" href="{{ url('/') }}">Home</a>
                                {{-- <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}index.html">Home - Image</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}index-video.html">Home - Video</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}index-slider.html">Home - Slider</a></li>
                                </ul> --}}
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('/')}}about.html">About Us</a>
                            <li class="nav-item"><a class="nav-link" href="{{asset('/')}}services.html">Services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('/')}}projects.html">Projects</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('/')}}blog.html">Blog</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="{{asset('/')}}#">Pages</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}service-single.html">Service Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}project-single.html">Project Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}blog-single.html">Blog Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}image-gallery.html">Image Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}faqs.html">FAQs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{asset('/')}}404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Header Btn Start -->
                    <div class="header-btn d-inline-flex">
                        <a href="{{ route('contact') }}" class="btn-default">get in touch</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
