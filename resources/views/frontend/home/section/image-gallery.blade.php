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
            @forelse (images()->slice(0,7) as $info)
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

        </div>
        <!-- gallery section end -->
    </div>
    <div class="col-lg-12">
        <!-- Our Blog Footer Start -->
        <div class="our-blog-footer wow fadeInUp" data-wow-delay="0.6s">
            <a href="{{ route('image.gallery') }}" class="btn-default">See All Image</a>
        </div>
        <!-- Our Blog Footer End -->
    </div>
</div>
