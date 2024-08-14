@extends('layout')

@section('content')
    <div class="mx-auto mt-5 p-3" style="width: 50%; background: #eee; border-radius: 5px;">
        <h2>Buat post baru</h2>
        <form action="{{ route('blog.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="exampleFormControlInput1"
                    placeholder="Tulis judul di sini ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" id="exampleFormControlInput1"
                    placeholder="Tulis deskripsi di sini ">
            </div>
            <div class="mb-3">
                <label for="konten" class="form-label">Konten</label>
                <div id="summernote" name="konten" id="konten" rows="3"></div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
