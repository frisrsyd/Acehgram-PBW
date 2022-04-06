@extends('firebase.app')

@section('content')
<div class="container auth-container">
    <div class="row">
        <div class="col-md-4 login text-center">
            <a href="{{url('home')}}"><img class="mb-4" src="img/logo.png"></a>
            <form>
                <div class="mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Username/Email">
                </div>
                <div class="mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <button id="btnSignIn" class="btn  w-50 mb-4" style="background-color: #FF7E36;">Sign In</button>
            </form>
            <div class="mb-2 forgotSignUp">
                <a href="{{url('forgotPass')}}" class="forgotSignUp">Forgot Password?</a>
            </div>
            <div class="mb-2 forgotSignUp">
                <span>Don't Have An Account? <a href="{{url('sign-up')}}">Sign Up Here</a></span>
            </div>
        </div>
    </div>
</div>


@endsection