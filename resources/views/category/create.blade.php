@extends('layouts.app')

@section('content')

    <section class="container">
        <h1 class="mb-5 text-center text-md-left">Create Category</h1>

        <form method="POST" action="{{ route('category.store') }}">
            @include('category.form', ['categories' => $categories])

            <div class="form-group text-center text-md-left mt-5">
                <button class="btn btn-primary">
                    Create Category
                </button>
            </div>
        </form>
    </section>

@endsection