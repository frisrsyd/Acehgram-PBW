@extends('firebase.app')

@section('content')
<div class="container signUp">
    <div class="row">
        <div class="col-md-12 login">
            <form>
                <div class="mb-3">
                    <table class="table table-borderless">
                        <h6 class="mt-5 ms-2"><b>Nama</b></h6>
                        <td>                            
                            <input name="name" type="text" class="form-control" placeholder="Depan">                       
                        </td>
                        <td>
                            <input name="name" type="text" class="form-control" placeholder="Belakang">
                        </td>
                    </table>
                </div>
                <div class="mb-3">
                    <table class="table table-borderless">
                        <td>                            
                            <h6 class="keterangan"><b>Username</b></h6>
                            <input name="username" type="text" class="form-control" placeholder="Username">                       
                        </td>
                        <td>
                            <h6 class="keterangan"><b>Email</b></h6>
                            <input name="email" type="email" class="form-control" placeholder="Alamat Email">
                        </td>
                    </table>
                </div>
                <div class="mb-3">
                    <table class="table table-borderless">
                        <td>                
                            <h6 class="keterangan"><b>Password</b></h6>            
                            <input name="password" type="password" class="form-control" placeholder="Password">                       
                        </td>
                        <td>
                            <h6 class="keterangan"><b>No. HP</b></h6>
                            <input name="No-HP" type="number" class="form-control" placeholder="No. Hp">
                        </td>
                    </table>
                </div>
                <div class="mb-3">
                    <table class="table table-borderless">
                        <td>
                            <h6 class="keterangan"><b>Confirm Password</b></h6>
                            <input name="password_confirm" type="password" class="form-control" placeholder="Ulangi Password">
                        </td>
                        <td>
                            <h6 class="keterangan"><b>Kota Asal</b></h6>
                            <input name="kota_asal" type="text" class="form-control" placeholder="Kota Asal">
                        </td>
                    </table>
                </div>
                <div class="text-center">
                    <span>Sudah punya akun? <a href="{{url('sign-in')}}">Masuk!</a></span>
                </div>
                <button class="btn btnSignIn mb-4 float-end" style="background-color: #FF7E36;">Create Account</button>
            </form>
        </div>
    </div>
</div>

@endsection