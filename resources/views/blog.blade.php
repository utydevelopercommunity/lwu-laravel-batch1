@extends('layout')

@section('content')
    <section style="padding: 50px">
        <h1>Blog</h1>

        <ol style="margin-top: 10px;">
            @foreach ($posts as $post)
                <li>
                    <a href="">{{ $post->title }}</a>
                </li>
            @endforeach
        </ol>
    </section>
@endsection
