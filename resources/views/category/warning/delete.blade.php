@extends('layouts.app')

@section('content')
    <section class="container d-flex flex-column justify-content-center align-items-center text-center">
        <div class="jumbotron">
            <h2>Are you sure you want to delete <span class="text-danger">{{ $category->name }}</span> category ?</h2>
            <p class="mb-5">By deleting this category you will also delete its 
                <span class="text-danger">all subcategories</span>
            </p>
            <form method="POST" action="{{ route('category.destroy', ['category' => $category]) }}">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-lg" type="submit">
                    Yes, delete it
                </button>
            </form>

            <a class="btn btn-primary btn-lg mt-3" href="{{ route('category.show', ['category' => $category]) }}" role="button">No, go back</a>
          </div>
    </section>
@endsection