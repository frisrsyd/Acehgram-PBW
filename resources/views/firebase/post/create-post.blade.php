@extends('firebase.app')

@section('content')
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form enctype="multipart/form-data">
                    <div class="mb-3">
                        <small style="color: gainsboro;" for="image">Upload gambar</small>
                        <input id="image" name="image" type="file" class="form-control mt-2" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <textarea id="caption" placeholder="Masukkan Caption" class="form-control" name="caption" cols="30"
                            rows="10"></textarea>
                    </div>

                    <button class="btn btnSignIn mb-md-5">Create Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection
