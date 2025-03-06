@extends('frontend.layouts.app')
@section('content')
    <!-- Hero Section Start -->
    @include('frontend.home.section.hero')
    <!-- Hero Section End -->

    <!-- About Us Section Start -->
    @include('frontend.home.section.about')
    <!-- About Us Section End -->

    <!-- Why Choose Us Section Start -->
    @include('frontend.home.section.choose')
    <!-- Why Choose Us Section End -->

    <!-- Our Services Section Start -->
    @include('frontend.home.section.service')
    <!-- Our Services Section End -->

    <!-- Intro Video Section Start -->
    @include('frontend.home.section.video')
    <!-- Intro Video Section End -->

    <!-- Our Project Start -->
    @include('frontend.home.section.our-project')
    <!-- Our Project End -->

    <!-- How We Work Start -->
    @include('frontend.home.section.work')
    <!-- How We Work End -->

    <!-- Our Skill Start -->
    @include('frontend.home.section.skill')
    <!-- Our Skill End -->

    <!-- Our Testimonial Start -->
    @include('frontend.home.section.testimonial')
    <!-- Our Testimonial End -->

    <!-- Our Blog Section Start -->
    @include('frontend.home.section.blog')
    <!-- Our Blog Section End -->
@endsection
