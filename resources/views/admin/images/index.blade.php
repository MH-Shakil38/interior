@extends('admin.layouts.app')
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-shield bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Add Image</h5>
                        <span>Add Your project image</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                        <li> @include('admin.images.create-modal')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            @forelse ($images as $info)
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <img src="{{ $info->image }}" class="card-img-top" alt="Hollywood Sign on The Hill" />
                        <div class="card-body">

                            <p class="card-text">
                                {{ $info->title }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('delete.record', ['model' => 'ImageGallery', 'id' => $info->id]) }}"
                                class="btn btn-sm btn-danger" onclick="return confirmDelete(event, this)">
                                <i class="feather icon-trash"></i>
                            </a>
                            <button class="btn btn-sm btn-primary"> <i class="feather icon-edit"></i> </button>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    <script>
        function confirmDelete(event, element) {
            event.preventDefault(); // ডিফল্ট লিংক অ্যাকশন বন্ধ করে দেবে
            if (confirm('Are You Sure You Want to delete this record?')) {
                window.location.href = element.href; // ব্যবহারকারী "OK" চাপলে ডিলিট প্রক্রিয়া চালু হবে
            }
        }
    </script>
@endsection
