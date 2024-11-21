@extends('app')

@section('content')
<div class="container mt-4">
    <h1>Welcome to the MY INSTITUTE</h1>

    <!-- Image slider -->
    <div id="dashboardCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#dashboardCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#dashboardCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br>

    <!-- Example navigation links -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Institutes</h5>
                    <p class="card-text">Manage institutes in the system.</p>
                    <a href="{{ route('institutes.index') }}" class="btn btn-primary">Go to Institutes</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Branches</h5>
                    <p class="card-text">Manage branches of institutes.</p>
                    <a href="{{ route('branches.index') }}" class="btn btn-primary">Go to Branches</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">Manage student information.</p>
                    <a href="{{ route('students.index') }}" class="btn btn-primary">Go to Students</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection