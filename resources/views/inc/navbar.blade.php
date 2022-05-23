<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    {{--                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>--}}
                </li>
                <div id="navbar" class="collapse navbar-collapse">--}}
                    <ul class="me-auto my-2 my-lg-0 navbar-nav-scroll navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/posts') }}">Blog</a></li>
                    </ul>
                </div>
            </ul>
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll navbar-right">
                @auth()
                    <li class="nav-item"><a class="nav-link" href="{{url('/post')}}">Create Post</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('logout')}}"><i
                                class="fa fa-power-off text-white" aria-hidden="true"></i> Logout </a></li>
                @endauth
                @guest()
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @endguest
            </ul>

{{--            <li class="nav-item dropdown">--}}
{{--                <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-nav navbar-right" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                    Rebecca Cheptoek--}}
{{--                </a>--}}

{{--                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                    <a class="dropdown-item" href="http://localhost/laravelapp/public/logout"--}}
{{--                       onclick="event.preventDefault();--}}
{{--                                document.getElementById('logout-form').submit();">--}}
{{--                        Logout--}}
{{--                    </a>--}}

{{--                    <form id="logout-form" action="http://localhost/laravelapp/public/logout" method="POST" class="d-none">--}}
{{--                        <input type="hidden" name="_token" value="9gFH5puSaAFmoABugddoTjkMonxjwrSlhhj9HRV6">              --}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </li>--}}

            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll navbar-right">
                {{--                @if (Auth::guest())--}}
                {{--                @auth()--}}

                {{--                @else--}}
                {{--                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>--}}
                {{--                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>--}}
                {{--                @endauth--}}
            </ul>
            {{--            <form class="d-flex" role="search">--}}
            {{--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">--}}
            {{--                <button class="btn btn-outline-success" type="submit">Search</button>--}}
            {{--            </form>--}}
        </div>
    </div>
</nav>


{{--<nav class="navbar navbar-inverse">--}}
{{--    <div class="container">--}}
{{--        <div class="navbar-header">--}}
{{--            <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">--}}
{{--                <span class="sr-only">Toggle navigation</span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--                <span class="icon-bar"></span>--}}
{{--            </button>--}}
{{--            <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>--}}
{{--        </div>--}}
{{--        <div id="navbar" class="collapse navbar-collapse">--}}
{{--            <ul class="nav navbar-nav">--}}
{{--                <li><a href="{{ url('/') }}">Home</a></li>--}}
{{--                <li><a href="{{ url('/about') }}">About</a></li>--}}
{{--                <li><a href="{{ url('/services') }}">Services</a></li>--}}
{{--                <li><a href="{{ url('/posts') }}">Blog</a></li>--}}
{{--            </ul>--}}
{{--            <ul class="nav navbar-nav navbar-right">--}}
{{--                <li><a href="{{url('/post')}}">Create Post</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
