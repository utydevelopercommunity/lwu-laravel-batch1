@extends('auth/layout')

@section('content')
    <div class="p-5 col-md-4 rounded" style="background: #fff;">
        <h2 class="text-center">Login</h2>
        <div class="mt-5" style="width: 100%;">
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
            <div class="form-group mt-3">
                <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi">
            </div>
            <button type="button" class="btn btn-primary mt-3" style="width: 100%;">Masuk</button>
            <small>Belum punya akun? <a href="{{ route('register') }}">Buat akun</a></small>
        </div>
    </div>
@endsection
