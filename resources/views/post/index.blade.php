@extends('app')

@section('content')
    <div class="bannerTop">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="container">
            @forelse ($posts as $post)
                <div class="card card-post shadow">
                    <img src="{{ asset('images/' . $post->image) }}" class="card-img-top">
                    <div class="card-body">
                        <p class="mb-2 profile">
                            <img src="img/avatar.png">
                            <a href="#"><b>{{ $post->user->name }}</b></a>
                            <small class="text-muted float-end">5 minutes ago</small>
                        </p>
                        <small class="card-text post-caption ms-4">{{ $post->caption }}</small>
                    </div>
                </div>
            @empty
                <h4 class="alert alert-warning mb-2">No Post Added Yet</h4>
            @endforelse
        </div>
    </div>
@endsection
