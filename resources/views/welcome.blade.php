@extends('layouts.app')
@section('content')
<section class="container">
    <div class="welcome-container d-flex justify-content-center align-items-center flex-column" style="height:60vh">
        <div class="title m-b-md mb-4" style="font-size: 3em; letter-spacing: 1px;">
            Categories App
        </div>
        <div>
            <a class="btn btn-outline-primary" href = "{{ route('category.index') }}">View All Categories</a>
        </div>
    </div>
</section>
@endsection
