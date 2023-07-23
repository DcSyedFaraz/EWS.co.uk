 <nav class="navbar navbar-expand-md navbar-custom">
    <div class="container">
        <!-- <a class="navbar-brand" href="#">Essay Writing Services</a> -->
        <span class="navbar-brand"></span>
        <button class="btn-outline navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom"
            aria-controls="navbarCustom" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars fa-lg py-1"></i>
        </button>
        <div class="navbar-collapse collapse" id="navbarCustom">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item {{request()->routeIs('home')  ? "active" : "" }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item {{request()->routeIs('about')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Serivces
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Service 1</a>
                        <a class="dropdown-item" href="#">Service 2</a>
                        <a class="dropdown-item" href="#">Service 3</a>
                    </div>
                </li> --}}



                <li class="nav-item {{request()->routeIs('samples')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('samples')}}">Samples</a>
                </li>
                <li class="nav-item {{request()->routeIs('samples')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('blogs')}}">Blogs</a>
                </li>
                <li class="nav-item {{request()->routeIs('plans')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('plans')}}">Pricing Plan</a>
                </li>
                <li class="nav-item {{request()->routeIs('reviews')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('reviews')}}">Reviews</a>
                </li>
                {{-- <li class="nav-item {{request()->routeIs('blogs.index')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('blogs.index')}}">Blogs</a> --}}
                </li>
                <li class="nav-item {{request()->routeIs('contact')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item {{request()->routeIs('login')  ? "active" : "" }}">
                    <a class="nav-link" href="{{route('login')}}">
                        @if (Auth::user())
                        {{ Auth::user()->name }}
                        @else
                        Log in
                        @endif</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
