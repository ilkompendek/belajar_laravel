<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}">Yliopisto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            
            @if (!empty($halaman) && $halaman == 'mahasiswa')
            <li class="nav-item active">
                <a class="nav-link" href="{{url('mahasiswa')}}">Mahasiswa<span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('mahasiswa')}}">Mahasiswa</a>
            </li>
            @endif
            
            @if (Auth::check())
            @if (!empty($halaman) && $halaman == 'prodi')
            <li class="nav-item active">
                <a class="nav-link" href="{{url('prodi')}}">Program Studi<span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('prodi')}}">Program Studi</a>
            </li>
            @endif
            @endif
            
            @if (!empty($halaman) && $halaman == 'about')
            <li class="nav-item active">
                <a class="nav-link" href="{{url('about')}}">About<span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('about')}}">About</a>
            </li>
            @endif
            
            @if (Auth::check() && Auth::user()->level=='admin')
            @if (!empty($halaman) && $halaman == 'user')
            <li class="nav-item active">
                <a class="nav-link" href="{{url('user')}}">User<span class="sr-only">(current)</span></a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{url('user')}}">User</a>
            </li>
            @endif
            @endif
            
        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @if (Auth::check())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endif
    </ul>

</div>
</nav>