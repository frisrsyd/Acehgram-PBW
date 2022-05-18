@extends('app')

@section('content')
    <div class="container">
        <div class="bannerTop">
            @if (session('status'))
                <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
            @endif
            {{-- @forelse ($post_image as $item) --}}
            <div class="card card-post shadow">

                <img src="" class="card-img-top">
                <div class="card-body">
                    <p class="mb-2 profile">
                        <img src="img/avatar.png">
                        <a href="#"><b>fulan bin fulan</b></a>
                        <small class="text-muted float-end">5 minutes ago</small>
                    </p>
                    <small class="card-text post-caption ms-4"></small>
                </div>
            </div>
            {{-- @empty
            @endforelse --}}
        </div>
    </div>
@endsection
