@extends('app')
@section('content')
    <div class="banner mb-3">
        <div class="cover-image shadow-sm"></div>
        <div class="profile-image shadow"></div>
        <div class="profile-info text-center mt-2">
            <h4 class="name fw-bold">Fulan bin Fulan</h4>
            <span class="text-muted">fulan@gmail.com</span>
        </div>
    </div>

    <!-- card post -->
    <div class="container">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>            
        @endif
        <div class="row">
            @forelse ($post_image as $key => $item)
                <div class="col-md-4 card card-post shadow">
                    <img src="images/{{$item['image']}}" class="card-img-top">
                    <div class="card-body">
                        <p class="mb-2 profile">
                            <img src="img/avatar.png">
                            <a href="#"><b>fulan bin fulan</b></a>
                            <small class="text-muted float-end">5 minutes ago</small>
                        <div class="row">
                            <small class="card-text post-caption">{{$item['caption']}}</small>
                            <div class="post-nav mb-2 text-end">
                                <a href="{{ url('delete-post/'.$key) }}" class="btn btn-outline-danger" onclick="return confirm('Are you sure want to delete this photo?')"><i class="bi bi-trash"></i> Hapus</a>
                                <a href="{{url('edit-post/'.$key)}}" class="btn btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
                @if ($loop->iteration % 3 == 0)    
                    <div class="w-100 d-none d-md-block"></div>
                @endif
            @empty
                
            @endforelse
        </div>
    </div>
@endsection
