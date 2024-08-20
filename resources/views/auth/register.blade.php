@extends('auth/layout')

@section('content')
    <div class="p-5 col-md-4 rounded" style="background: #fff;">
        <h2 class="text-center">Selamat Datang</h2>
        <div class="mt-5" style="width: 100%;">
            <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap">
            </div>
            <div class="form-group mt-3">
                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
            <div class="form-group mt-3">
                <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi">
            </div>
            <button type="button" class="btn btn-primary mt-3" style="width: 100%;">Masuk</button>
            <small>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></small>
        </div>
    </div>
@endsection
