<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="logo">
            <a class="navbar-brand" href="#">My Website</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                @if(session()->has('message'))
                    <li class="nav-item">
                        <span class="nav-link">{{ session()->get('message') }}</span>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registration') }}">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
