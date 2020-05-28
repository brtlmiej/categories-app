@extends('layouts.app')

@section('content')

    <section class="container">
        <h1 class="mb-5 text-center text-md-left">Edit <span class="text-capitalize text-primary">{{ $category->name }}</span></h1>

        <form method="POST" action="{{ route('category.update', ['category' => $category]) }}">
            @method('put')
            @include('category.form', ['category' => $category, 'categories' => $categories])

            <div class="form-group text-center text-md-left mt-5">
                <button class="btn btn-primary">
                    Edit Category
                </button>
            </div>
        </form>
    </section>

@endsection