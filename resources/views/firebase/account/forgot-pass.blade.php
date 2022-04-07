@extends('firebase.app')

@section('content')
<div class="container auth-container">
    <div class="row">
        <div class="col-md-4 login">
            <form>
                <div class="mb-3">
                    <h6 class="keterangan"><b>Email</b></h6>
                    <input name="email" type="text" class="form-control" placeholder="Enter your Email">
                </div>
                <div class="text-center">
                    <button class="btn  w-50 mb-4 btnSignIn">Forgot Password</button>
                </div>
            </form>
            <div class="mb-2 forgotSignUp text-center">
                <a href="{{url('sign-in')}}" class="forgotSignUp">Login Here!</a>
            </div>
            <div class="mb-2 forgotSignUp text-center">
                <span>Don't Have An Account? <a href="{{url('sign-up')}}">Sign Up Here</a></span>
            </div>
        </div>
    </div>
</div>


@endsection