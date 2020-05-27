@extends('layouts.app')

@section('content')

    <section class="container">
        <h1 class="mb-5 text-center text-md-left">Create Category</h1>

        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off">
                <small id="nameHelp" class="form-text text-muted">Category name must include min 3 and max 25 characters.</small>
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group mt-5">
                <label for="parent_id">Parent Category</label>
                <select class="form-control" id="parent_id" name="parent_id">
                    <option value="">Root</option>
                @foreach($categories as $category)
                    <option {{ old('parent_id') == $category->id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>
                <small id="nameHelp" class="form-text text-muted">
                    Choose parent for this category. If you choose Root category will be main category.
                </small>
            </div>
            @error('parent_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group text-center text-md-left mt-5">
                <button class="btn btn-primary">
                    Create Category
                </button>
            </div>
        </form>
    </section>

@endsection