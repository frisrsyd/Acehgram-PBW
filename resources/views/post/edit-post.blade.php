@extends('app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form method="POST" action="{{ url('update-post/' . $posts->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <textarea id="caption" placeholder="Masukkan Caption" class="form-control" name="caption" cols="30"
                            rows="10"></textarea>
                    </div>
                    <button class="btn btnSignIn mb-md-5" type="submit">Update Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
