@extends('admin.layouts.app')
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-shield bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Update Company Info</h5>
                        <span>Update your Company information and website settings</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        @if (isset($info))
        <form action="{{ route('company-settings.update',$info->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
        @else
        <form action="{{ route('company-settings.store') }}" method="POST" enctype="multipart/form-data">

        @endif
            @csrf

            <!-- General Information -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>General Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Company Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" value="{{ old('name', $info->name ?? '') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Short Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="short_name" class="form-control" value="{{ old('short_name', $info->short_name ?? '') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" value="{{ old('title', $info->title ?? '') }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" name="phone1" class="form-control" value="{{ old('phone1', $info->phone1 ?? '') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Video & Media Section -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Media & Branding</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Video URL</label>
                                <div class="col-sm-9">
                                    <input type="text" name="video" class="form-control" value="{{ old('video', $info->video ?? '') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Logo</label>
                                <div class="col-sm-9">
                                    <input type="file" name="logo" class="form-control">
                                    @if(isset($info->logo))
                                        <img src="{{ $info->logo }}" alt="Logo" width="100">
                                    @endif
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Banner</label>
                                <div class="col-sm-9">
                                    <input type="file" name="banner" class="form-control">
                                    @if(@$info->banner)
                                        <img src="{{ $info->banner }}" alt="Banner" width="100">
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">About Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="about_image" class="form-control">
                                    @if(@$info->banner)
                                        <img src="{{ $info->about_image }}" alt="Banner" width="100">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About & Policies -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>About & Policies</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">About</label>
                                <div class="col-sm-9">
                                    <textarea name="about" class="form-control" rows="3">{{ old('about', $info->about ?? '') }}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">Privacy Policy</label>
                                <div class="col-sm-9">
                                    <textarea name="privacy" class="form-control" rows="3">{{ old('privacy', $info->privacy ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CEO Details -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>CEO Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">CEO Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ceo_name" class="form-control" value="{{ old('ceo_name', $info->ceo_name ?? '') }}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-3 col-form-label">CEO Image</label>
                                <div class="col-sm-9">
                                    <input type="file" name="ceo_image" class="form-control">
                                    @if(isset($info->ceo_image))
                                        <img src="{{ $info->ceo_image }}" alt="CEO Image" width="100">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media Links -->
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5>Social Media Links</h5>
                        </div>
                        <div class="card-body">
                            @foreach (['facebook', 'youtube', 'linkedin', 'whatsapp', 'instagram', 'twitter'] as $social)
                                <div class="row mb-3">
                                    <label class="col-sm-3 col-form-label text-capitalize">{{ ucfirst($social) }}</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="{{ $social }}" class="form-control" value="{{ old($social, $info->$social ?? '') }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="col-md-6">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Save Settings</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <style>
        .submit-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
    </style>
@endsection
