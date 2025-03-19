<div class="page-gallery">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Image Gallery</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Image Gallery Of</span> geotech interiors
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->
                <div class="section-title-content">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Your journey to geotech interiors begins here. Our
                        blog offers a wealth of resources, including design tips, trend analyses.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>
        <!-- gallery section start -->
        <div class="row gallery-items page-gallery-box">
            @forelse (images() as $info)
                <div class="col-lg-4 col-6">
                    <!-- image gallery start -->
                    <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                        <a href="{{ $info->image }}">
                            <figure class="image-anime">
                                <img src="{{ $info->image }}" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- image gallery end -->
                </div>
            @empty

            @endforelse
            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-cursor-text="View">
                    <a href="images/gallery-1.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-1.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.2s" data-cursor-text="View">
                    <a href="images/gallery-2.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-2.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.4s" data-cursor-text="View">
                    <a href="images/gallery-3.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-3.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.6s" data-cursor-text="View">
                    <a href="images/gallery-4.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-4.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="0.8s" data-cursor-text="View">
                    <a href="images/gallery-5.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-5.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1s" data-cursor-text="View">
                    <a href="images/gallery-6.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-6.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.2s" data-cursor-text="View">
                    <a href="images/gallery-7.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-7.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.4s" data-cursor-text="View">
                    <a href="images/gallery-8.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-8.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>

            <div class="col-lg-4 col-6">
                <!-- image gallery start -->
                <div class="photo-gallery wow fadeInUp" data-wow-delay="1.6s" data-cursor-text="View">
                    <a href="images/gallery-9.jpg">
                        <figure class="image-anime">
                            <img src="images/gallery-9.jpg" alt="">
                        </figure>
                    </a>
                </div>
                <!-- image gallery end -->
            </div>
        </div>
        <!-- gallery section end -->
    </div>
</div>
