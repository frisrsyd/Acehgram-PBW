@extends('app')
@section('content')
    <div class="banner mb-3">
        <div class="cover-image shadow-sm"></div>
        <div class="profile-image shadow"></div>
        <div class="profile-info text-center mt-2 mb-2">
            <h4 class="name fw-bold">{{ auth()->user()->username }}
                <a href="{{ url('edit-profile/' . auth()->user()->id) }}"><small><i
                            class="bi bi-pencil-fill"></small></i></a>
            </h4>
            <span class="text-muted">{{ auth()->user()->email }}</span>
        </div>
        <div class="row detailTable">
            <div class="col-md-3">
                <details class="text-center">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <h6 class=""><b>Nama</b></h6>
                                </td>
                                <td>
                                    <h6 class="">{{ auth()->user()->name }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class=""><b>No. HP</b></h6>
                                </td>
                                <td>
                                    {{ auth()->user()->phone }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6 class=""><b>Kota Asal</b></h6>
                                </td>
                                <td>
                                    {{ auth()->user()->kota_asal }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </details>
            </div>
        </div>
    </div>

    <!-- card post -->
    <div class="container">
        @if (session('status'))
            <h4 class="alert alert-warning mb-2">{{ session('status') }}</h4>
        @endif
        <div class="row">
            @forelse ($post_image as $item)
                <div class="col-md-4 card card-post shadow">
                    <div class="post-nav mb-1 text-center mt-3">
                        <a href="{{ url('delete-post/' . $item->id) }}" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure want to delete this photo?')"><i
                                class="bi bi-trash"></i> Hapus</a>
                        <a href="{{ url('edit-post/' . $item->id) }}" class="btn btn-outline-primary"><i
                                class="bi bi-pencil-fill"></i> Edit</a>
                    </div>
                    <img src="images/{{ $item['image'] }}" class="card-img-top">
                    <div class="card-body">
                        <p class="mb-2 profile">
                            <img src="img/avatar.png">
                            <a href="#"><b>fulan bin fulan</b></a>
                            <small class="text-muted float-end">5 minutes ago</small>
                        <div class="row">
                            <small class="card-text post-caption">{{ $item['caption'] }}</small>
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
