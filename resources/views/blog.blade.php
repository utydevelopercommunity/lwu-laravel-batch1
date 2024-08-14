@extends('layout')

@section('content')
    <section>
        <div class="d-flex justify-content-between align-items-center">
            <h2>Blogs</h2>
            <a href="{{ route('blog.create') }}" class="btn btn-primary px-3">Buat post</a>
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success mt-3">
                {{ Session::get('success') }}
            </div>
        @endif
        <div class="d-flex blog-container mt-4">
            @foreach ($posts as $post)
                <div class="card blog-card flex-grow-1">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="{{ route('blog.detail', $post->id) }}" class="btn btn-primary">Baca</a>
                        <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('blog.remove', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
    </section>
@endsection
