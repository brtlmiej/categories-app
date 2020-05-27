@extends('layouts.app')

@section('content')
    <section class="container text-center">
        <h1 class="text-capitalize mb-4">
            Category <span class="text-primary">{{ $category->name }}</span>
        </h1>
        <button class="btn btn-primary">Edit Category</button>
    </section>

    <section class="container text-center text-md-left">
        <h3 class="mb-4">Category Path</h3>
        <div class="ml-md-5">
            <span class="path-item text-capitalize">
                <a href="{{ route('category.index') }}" class="text-secondary">Root</a> -> </span>
        @foreach($path as $item)
            <span class="path-item text-capitalize">
                <a class="text-dark" href="{{ route('category.show', ['category' => $item]) }}">{{ $item->name }}</a> ->
            </span>
        @endforeach
            <span class="path-item-leaf text-capitalize text-primary">{{ $category->name }}</span>
        </div>
    </section>

    <section class="container text-center text-md-left">
        <h3 class="mb-5">Subcategories</h3>

        <ul class="list-group mb-5">
        @forelse($category->subcategories as $subcategory)
            <li class="list-group-item">
                <a class="text-capitalize" href="{{ route('category.show', ['category' => $subcategory]) }}">
                    {{ $subcategory->name }}
                </a>
            </li>
        @empty
            <p class="text-muted">There're no subcategories for this category</p>
        @endforelse
        </ul>
    </section>

    <section class="container text-center text-md-left" id="create-subcat">
        <h3 class="mb-5">Create Subcategory</h3>

        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off">
                <small id="nameHelp" class="form-text text-muted">Category name must include min 3 and max 25 characters.</small>
            </div>
            @foreach ($errors->all() as $error)
                <p class="text-danger">{{ $error }}</p>
            @endforeach

            <input name="parent_id" type="hidden" value="{{ $category->id }}">

            <div class="form-group mt-5">
                <button class="btn btn-success">
                    Create Category
                </button>
            </div>
        </form>
    </section>

@endsection