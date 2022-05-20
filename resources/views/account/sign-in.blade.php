@extends('app')

@section('content')
    <div class="bannerTop">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="container auth-container">
            <div class="row">
                <div class="col-md-4 login text-center">
                    <a href="{{ url('home') }}"><img class="mb-4" src="img/logo.png"></a>
                    <form action="/sign-in" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input name="email" type="text" class="form-control" placeholder="Username/Email">
                        </div>
                        <div class="mb-3">
                            <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn  w-50 mb-4 btnSignIn shadow">Sign In</button>
                    </form>
                    <div class="mb-2 forgotSignUp">
                        <a href="{{ url('forgotPass') }}" class="forgotSignUp">Forgot Password?</a>
                    </div>
                    <div class="mb-2 forgotSignUp">
                        <span>Don't Have An Account? <a href="{{ url('sign-up') }}">Sign Up Here</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
