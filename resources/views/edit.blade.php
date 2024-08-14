@extends('layout')

@section('content')
    <div class="mx-auto mt-5 p-3" style="width: 50%; background: #eee; border-radius: 5px;">
        <h2>Edit Post for: {{ $title }}</h2>
        <form action="{{ route('blog.update', $id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" value="{{ $title }}" name="judul" id="title"
                    placeholder="Tulis judul di sini ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" value="{{ $description }}" name="deskripsi" id="description"
                    placeholder="Tulis deskripsi di sini ">
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <textarea class="form-control" name="konten" id="konten" rows="3">
                    {{ $content }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
