<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Us Images Start -->
                <div class="about-us-images">
                    <!-- About Image 1 Start -->
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="{{asset('/')}}geotech/img-1.jpg" alt="">
                        </figure>
                    </div>
                    <!-- About Image 1 End -->

                    <!-- About Image 2 Start -->
                    <div class="about-img-2">
                        <figure class="image-anime reveal">
                            <img src="{{asset('/')}}geotech/img-2.jpg" alt="">
                        </figure>

                        <!-- Feedback Counter Start -->
                        <div class="experience-counter">
                            <h3><span class="counter">15</span>+</h3>
                            <p>Years of experience</p>
                        </div>
                        <!-- Feedback Counter End -->
                    </div>
                    <!-- About Image 2 End -->

                    <!-- Feedback Counter Start -->
                    <div class="feedback-counter">
                        <p><span class="counter">95</span>%</p>
                        <h3>positive feedback</h3>
                    </div>
                    <!-- Feedback Counter End -->
                </div>
                <!-- About Us Images End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Our passion for design, your <span>vision realized</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Our dedicated team of designers works closely with you to understand your vision and bring it to life with thoughtful attention to detail. Whether it's transforming a single room or an entire home.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Content Body Start -->
                    <div class="about-us-content-body">
                        <!-- About Content Info Start -->
                        <div class="about-us-content-info">
                            <!-- About Us Content List Start -->
                            <div class="about-us-content-list wow fadeInUp" data-wow-delay="0.4s">
                                <ul>
                                    <li>creative expertise</li>
                                    <li>client-centered approach</li>
                                </ul>
                            </div>
                            <!-- About Us Content List End -->

                            <!-- About Us Content Button Start -->
                            <div class="about-us-content-btn wow fadeInUp" data-wow-delay="0.6s">
                                <a href="{{asset('/')}}about.html" class="btn-default">read more</a>
                            </div>
                            <!-- About Us Content Button End -->
                        </div>
                        <!-- About Content Info End -->

                        <!-- About Content List Start -->
                        <div class="about-us-contact-list">
                            <!-- About Contact Item Start -->
                            <div class="about-contact-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="about-contact-content">
                                    <p>need any help?</p>
                                    <h3>{{ $company->phone1 }}</h3>
                                </div>
                            </div>
                            <!-- About Contact Item End -->

                            <!-- About Contact Item Start -->
                            <div class="about-contact-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <figure class="image-anime">
                                        <img src="{{$company->ceo_image}}" alt="">
                                    </figure>
                                </div>
                                <div class="about-contact-content">
                                    <h3>{{$company->ceo_name}} </h3>
                                    <p>co founder</p>
                                </div>
                            </div>
                            <!-- About Contact Item End -->
                        </div>
                        <!-- About Content Info End -->
                    </div>
                    <!-- About Us Content Body End -->
                </div>
                <!-- About Us Content End -->
            </div>
        </div>
    </div>
</div>
