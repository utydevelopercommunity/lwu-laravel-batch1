@extends('layout')

@section('content')
    <section>
        <div class="d-flex justify-content-between align-items-center">
            <h2>Blogs</h2>
            <button class="btn btn-primary px-3">Buat post</button>
        </div>
        <div class="d-flex blog-container mt-4">
            @foreach ($posts as $post)
                <div class="card blog-card flex-grow-1">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="" class="btn btn-primary">Baca</a>
                    </div>
                </div>
            @endforeach
            <div class="card blog-card flex-grow-1">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="" class="btn btn-primary">Baca</a>
                </div>
            </div>
            <div class="card blog-card flex-grow-1">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="" class="btn btn-primary">Baca</a>
                </div>
            </div>
            <div class="card blog-card flex-grow-1">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="" class="btn btn-primary">Baca</a>
                </div>
            </div>
            <div class="card blog-card flex-grow-1">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="" class="btn btn-primary">Baca</a>
                </div>
            </div>
            <div class="card blog-card flex-grow-1">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->description }}</p>
                    <a href="" class="btn btn-primary">Baca</a>
                </div>
            </div>
    </section>
@endsection
