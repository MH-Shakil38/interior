@php
    $company = company();
@endphp
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Footer Header Start -->
                <div class="footer-header">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <!-- Footer Logo Start -->
                            <div class="footer-logo">
                                <img src="{{ asset('logo.png') }}" height="60px" alt="">
                            </div>
                            <!-- Footer Logo End -->
                        </div>

                        <div class="col-md-6">
                            <!-- Footer Social Link Start -->
                            <div class="footer-social-links">
                                <div class="footer-social-link-title">
                                    <h3>follow our socials</h3>
                                </div>
                                <ul>
                                    <li><a href="{{ @$company->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="{{ @$company->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Footer Social Link End -->
                        </div>
                    </div>
                </div>
                <!-- Footer Header End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Footer Links Start -->
                 <div class="footer-links">
                    <h3>information</h3>
                    <ul>
                        <li><a href="{{asset('/')}}about.html">about our company</a></li>
                        <li><a href="{{asset('/')}}services.html">view our service</a></li>
                        <li><a href="{{asset('/')}}#">careers at company</a></li>
                        <li><a href="{{asset('/')}}blog.html">read our blog</a></li>
                        <li><a href="{{asset('/')}}projects.html">our latest projects</a></li>
                    </ul>
                 </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Footer Links Start -->
                 <div class="footer-links">
                    <h3>portfolio</h3>
                    <ul>
                        <li><a href="{{asset('/')}}project-single.html">luxury home design</a></li>
                        <li><a href="{{asset('/')}}project-single.html">residential interior design</a></li>
                        <li><a href="{{asset('/')}}project-single.html">commercial space design</a></li>
                        <li><a href="{{asset('/')}}project-single.html">residential interior design</a></li>
                        <li><a href="{{asset('/')}}project-single.html">renovation and restoration design</a></li>
                    </ul>
                 </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Footer Contact Box Start -->
                <div class="footer-contact-box footer-links">
                    <h3>contact us</h3>
                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="footer-contact-content">
                            <p>{{ $company->phone1 }}</p>
                        </div>
                    </div>
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="footer-contact-content">
                            <p>{{ $company->phone2 }}</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="footer-contact-content">
                            <p>{{ @$company->email }}</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->

                    <!-- Footer Contact Item Start -->
                    <div class="footer-contact-item">
                        <div class="icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="footer-contact-content">
                            <p>{{ $company->address }}</p>
                        </div>
                    </div>
                    <!-- Footer Contact Item End -->
                </div>
                <!-- Footer Contact Box End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Footer Newsletter Form Start -->
                <div class="footer-latest-news footer-links">
                    <h3>get the latest trending news</h3>

                    <div class="footer-newsletter-form">
                        <p>Your Dream Space Starts Here Get Exclusive Design Straight Your Inbox!</p>

                        <form id="newslettersForm" action="#" method="POST">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control"  id="mail" placeholder="Enter your email" required>
                                <button type="submit"><i class="fa-solid fa-arrow-right-long"></i> </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Footer Newsletter Form End -->
            </div>
        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row">
                <div class="col-md-12">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright ©geotechinteriordesign 2024 All Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright End -->

                     <!-- Footer Copyright Start -->
                     <div class="footer-copyright-text">
                        <p>Develop By : <a href="https://www.facebook.com/maynuddin.shakil">Maynuddin Hasan Shakil.</a> </p>
                    </div>
                    <!-- Footer Copyright End -->
                </div>
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>
