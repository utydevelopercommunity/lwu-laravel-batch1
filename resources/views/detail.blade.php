@extends('layout')

@section('content')
    <div class="mx-auto mt-5 p-3" style="width: 50%; background: #eee; border-radius: 5px;">
        <h2>{{ $title }}</h2>
        <small style="color: rgb(125, 125, 125)">
            {{ $description }}
        </small>
        <p class="mt-2">{{ $content }}</p>
    </div>
@endsection
