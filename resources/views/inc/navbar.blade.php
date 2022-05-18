<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #FFEFD9;">
    <div class="container">
        <a class="navbar-brand" href="/home">
            <img src="{{ asset('img/brand-light.png') }}" height="44" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto shadow" style="background-color: #E9ECEF;" id="fitur_bg">
                <div class="navbar-nav m-auto" id="fitur">
                    <a class="btn btn-grey " href="{{ url('home') }}"><i class="bi bi-house-door-fill me-1"
                            style="color: black"></i>Home</a>

                    @auth
                        <a href="{{ url('createpost') }}" class="btn me-3" style="color: black"><i
                                class="bi bi-plus"></i> Create Post</a>
                        <a href="{{ url('profile') }}" class="btn me-3" style="color: black"><i
                                class="bi bi-person"></i> My Profile</a>
                        <form action="/logout" method="POST" class="btn btn-grey me-2" style="color: black"><i
                                class="bi bi-box-arrow-right me-1"></i>
                            @csrf
                            <button type="submit" class="logoutBtn btn-grey">Logout</button>
                        </form>
                    @else
                        <a class="btn bg-gradient-primary" href="{{ url('sign-in') }}"><i
                                class="bi bi-box-arrow-in-left me-1"></i>Sign In</a>
                    @endauth

                </div>
            </div>
        </div>
    </div>
</nav>
