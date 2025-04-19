@extends('admin.layouts.app')
@section('content')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .feature-box {
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            color: #333;
            transition: all 0.3s ease-in-out;
        }

        .feature-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .feature-box img {
            width: 50px;
            margin-bottom: 10px;
        }
    </style>

    <div class="container mt-5">
        <div class="row g-3">
            <!-- ফিচার আইটেম -->
            <div class="col-md-3 col-sm-6 col-lg-3">
                <a href="{{ route('company-settings.index') }}">
                    <div class="feature-box bg-info text-white">
                        <img src="https://cdn-icons-png.flaticon.com/128/3081/3081059.png" alt="compoany setting">
                        <h5>Company setting</h5>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-box bg-primary text-white">
                    <img src="https://cdn-icons-png.flaticon.com/128/3081/3081055.png" alt="Sales">
                    <h5>Project</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="feature-box bg-warning text-white">
                    <img src="https://cdn-icons-png.flaticon.com/128/3081/3081095.png" alt="Parties">
                    <h5>Report</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="feature-box bg-success text-white">
                    <img src="https://cdn-icons-png.flaticon.com/128/3081/3081081.png" alt="Purchase">
                    <h5>Income</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="feature-box bg-secondary text-white">
                    <img src="https://cdn-icons-png.flaticon.com/128/3081/3081066.png" alt="Products">
                    <h5>Expense</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="feature-box bg-danger text-white">
                    <img src="https://cdn-icons-png.flaticon.com/128/3081/3081071.png" alt="Due List">
                    <h5>Image Gallery</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="feature-box bg-dark text-white">
                    <img src="https://cdn-icons-png.flaticon.com/128/3081/3081075.png" alt="Income">
                    <h5>Video Gallery</h5>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="feature-box bg-danger text-white">
                    <img src="https://cdn-icons-png.flaticon.com/128/3081/3081079.png" alt="Expense">
                    <h5>Blog</h5>
                </div>
            </div>


        </div>
    </div>
@endsection
