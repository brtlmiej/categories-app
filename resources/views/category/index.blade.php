@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="mb-5 text-center">List Of Categories</h1>

        <categories-list v-bind:categories_data='{{ json_encode($categories) }}'></categories-list>
        
        <div class="text-center text-md-right mr-md-4">
            <a href="{{ route('category.create') }}" class="btn btn-success mt-5">Create Category</a>
        </div>
    </section>
@endsection