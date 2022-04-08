@extends('firebase.app')

@section('content')
    <div class="container">
        <div class="card card-post shadow">
            <img src="img/black-panther.jpg" class="card-img-top">
            <div class="card-body">
                <p class="mb-2 profile">
                    <img src="img/avatar.png">
                    <a href="#"><b>fulan bin fulan</b></a>
                    <small class="text-muted float-end">5 minutes ago</small>
                </p>
                <small class="card-text post-caption ms-4">Example text caption</small>
            </div>
        </div>

        <div class="card card-post shadow">
            <img src="img/predator.jpg" class="card-img-top">
            <div class="card-body">
                <p class="mb-2 profile">
                    <img src="img/avatar.png">
                    <a href="#"><b>fulan bin fulan</b></a>
                    <small class="text-muted float-end">5 minutes ago</small>
                </p>
                <small class="card-text post-caption ms-4">Example text caption</small>
            </div>
        </div>

        <div class="card card-post shadow">
            <img src="img/dazai.png" class="card-img-top">
            <div class="card-body">
                <p class="mb-2 profile">
                    <img src="img/avatar.png">
                    <a href="#"><b>fulan bin fulan</b></a>
                    <small class="text-muted float-end">5 minutes ago</small>
                </p>
                <small class="card-text post-caption ms-4">Example text caption</small>
            </div>
        </div>
    </div>
@endsection
