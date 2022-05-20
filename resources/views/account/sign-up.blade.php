@extends('app')

@section('content')
    <div class="bannerTop">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="container signUp">
            <div class="row">
                <div class="col-md-6 login">
                    <form action="/sign-up" method="POST">
                        @csrf
                        <div class="mb-3">
                            <table class="table table-borderless">
                                <h6 class="mt-5 ms-2"><b>Nama</b></h6>
                                <td>
                                    <input name="name_depan" type="text" class="form-control" placeholder="Depan"
                                        autofocus>
                                </td>
                                <td>
                                    <input name="name_belakang" type="text" class="form-control" placeholder="Belakang">
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
                                    <input name="phone" type="text" class="form-control" placeholder="No. Hp">
                                </td>
                            </table>
                        </div>
                        <div class="mb-3">
                            <table class="table table-borderless">
                                <td>
                                    <h6 class="keterangan"><b>Confirm Password</b></h6>
                                    <input name="password_confirm" type="password" class="form-control"
                                        placeholder="Ulangi Password">
                                </td>
                                <td>
                                    <h6 class="keterangan"><b>Kota Asal</b></h6>
                                    <select id="city" name="kota_asal" class="form-select form-control">
                                        <option selected>Choose a City</option>
                                        <option value="Aceh Barat">Aceh Barat</option>
                                        <option value="Abdya">Aceh Barat Daya</option>
                                        <option value="Aceh Besar">Aceh Besar</option>
                                        <option value="Aceh Jaya">Aceh Jaya</option>
                                        <option value="Aceh Selatan">Aceh Selatan</option>
                                        <option value="Aceh Singkil">Aceh Singkil</option>
                                        <option value="Aceh Tamiang">Aceh Tamiang</option>
                                        <option value="Aceh Tengah">Aceh Tengah</option>
                                        <option value="Aceh Tenggara">Aceh Tenggara</option>
                                        <option value="Aceh Timur">Aceh Timur</option>
                                        <option value="Aceh Utara">Aceh Utara</option>
                                        <option value="Bener Beriah">Bener Meriah</option>
                                        <option value="Bireun">Bireuen</option>
                                        <option value="Gayo Lues">Gayo Lues</option>
                                        <option value="Nagan Raya">Nagan Raya</option>
                                        <option value="Pidie">Pidie</option>
                                        <option value="Pidie Jaya">Pidie Jaya</option>
                                        <option value="Simeulue">Simeulue</option>
                                        <option value="Banda Aceh">Banda Aceh</option>
                                        <option value="Langsa">Langsa</option>
                                        <option value="Lhokseumawe">Lhokseumawe</option>
                                        <option value="Sabang">Sabang</option>
                                        <option value="Subulussalam">Subulussalam</option>

                                    </select>
                                </td>
                            </table>
                        </div>
                        <div class="ms-2 forgotSignUp mb-3 text-center">
                            <span>Sudah punya akun? <a href="{{ url('sign-in') }}">Masuk!</a></span>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btnSignIn mb-4 shadow"
                                style="background-color: #FF7E36;">Create
                                Account</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
