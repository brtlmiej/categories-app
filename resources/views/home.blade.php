@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>You are logged in!</h1>
                    <div class="mt-4">
                        <a class="btn btn-outline-primary btn-lg" href = "{{ route('category.index') }}">View All Categories</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
