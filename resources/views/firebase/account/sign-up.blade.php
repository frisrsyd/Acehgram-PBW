@extends('firebase.app')

@section('content')
<div class="container signUp">
    <div class="row">
        <div class="col-md-4 login">
            <h6 class="my-2"><b>Nama</b></h6>
            <form>
                <div class="mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Depan">
                </div>
                <div class="mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Belakang">
                </div>
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Alamat Email">
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Masukkan Password">
                </div>
                <div class="mb-3">
                    <input name="password_confirm" type="password" class="form-control" placeholder="Ulangi Password">
                </div>
                <button class="btn btn-primary w-100 mb-4">DAFTAR</button>
            </form>
            <div class="text-center">
                <span>Sudah punya akun? <a href="#">Masuk!</a></span>
            </div>
        </div>
    </div>
</div>

@endsection