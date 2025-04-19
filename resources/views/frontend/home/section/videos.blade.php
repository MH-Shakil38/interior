<div class="page-gallery">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-6">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Video Gallery</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque"><span>Video Gallery Of</span> geotech interiors
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
            @forelse (videos()->slice(0,9) as $info)
                <div class="col-lg-6 col-sm-12">
                    <!-- video gallery start -->
                    <div class="photo-gallery" data-cursor-text="View">
                            <figure class="">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $info->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </figure>
                    </div>
                    <!-- video gallery end -->
                </div>
            @empty

            @endforelse

        </div>
        <!-- gallery section end -->
    </div>
    <div class="col-lg-12">
        <!-- Our Blog Footer Start -->
        <div class="our-blog-footer wow fadeInUp" data-wow-delay="0.6s">
            <a href="{{ route('image.gallery') }}" class="btn-default">See All Video</a>
        </div>
        <!-- Our Blog Footer End -->
    </div>
</div>
