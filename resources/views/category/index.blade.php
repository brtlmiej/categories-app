@extends('layouts.app')

@section('content')
    <section class="container">
        <h1 class="mb-5 text-center">List Of Categories</h1>
        <ul class="list-group">
        @forelse ($categories as $category)
            <li class="list-group-item">
                <div class="float-left">
                    <a href="{{ route('category.show', ['category' => $category]) }}" class="text-capitalize">
                        {{ $category->name }}
                    </a>
                </div>
                <div class="float-right">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Show Subcategories
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <p class="ml-2"><b>Sorted By</b></p>
                            <a class="dropdown-item" href="#">Category Name</a>
                            <a class="dropdown-item" href="#">Pub Date</a>
                        </div>
                      </div>
                </div>
            </li>
        @empty
            <p>There's no categories</p>
        @endforelse
        </ul>
        
        <div class="text-center text-md-right mr-md-4">
            <a href="{{ route('category.create') }}" class="btn btn-success mt-5">Create Category</a>
        </div>
    </section>
@endsection