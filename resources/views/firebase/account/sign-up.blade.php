@extends('firebase.app')

@section('content')
<div class="container signUp">
    <div class="row">
        <div class="col-md-6 login">   
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
                            <input name="no-hp" type="text" class="form-control" placeholder="No. Hp">
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
                            <select id="city" name="kota_asal" class="form-select form-control">
                                <option selected >Choose a City</option>
                                <option value="acehbarat">Aceh Barat</option>
                                <option value="abdya">Aceh Barat Daya</option>                               
                                <option value="acehbesar">Aceh Besar</option>                               
                                <option value="acehjaya">Aceh Jaya</option>
                                <option value="acehselatan">Aceh Selatan</option>
                                <option value="acehsingkil">Aceh Singkil</option>
                                <option value="acehtamiang">Aceh Tamiang</option>
                                <option value="acehtengah">Aceh Tengah</option>
                                <option value="acehtenggara">Aceh Tenggara</option>
                                <option value="acehtimur">Aceh Timur</option>
                                <option value="acehutara">Aceh Utara</option>
                                <option value="benermeriah">Bener Meriah</option>
                                <option value="bireun">Bireuen</option>
                                <option value="gayolues">Gayo Lues</option>
                                <option value="naganraya">Nagan Raya</option>
                                <option value="pidie">Pidie</option>
                                <option value="pidiejaya">Pidie Jaya</option>
                                <option value="simeulue">Simeulue</option>
                                <option value="bandaaceh">Banda Aceh</option>
                                <option value="langsa">Langsa</option>
                                <option value="lhokseumawe">Lhokseumawe</option>
                                <option value="sabang">Sabang</option>
                                <option value="subulussalam">Subulussalam</option>

                            </select> 
                        </td>
                    </table>
                </div>
                <div class="ms-2 forgotSignUp mb-3 text-center">
                    <span>Sudah punya akun? <a href="{{url('sign-in')}}">Masuk!</a></span>
                </div>
                <div class="text-center">
                    <button class="btn btnSignIn mb-4" style="background-color: #FF7E36;">Create Account</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection