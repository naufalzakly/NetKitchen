<nav class="main-nav">
    <a href="index.html" class="logo">
        <img src="images/klassy-logo.png" align="klassy cafe html template">
    </a>
    <ul class="nav">
        <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
        <li class="scroll-to-section"><a href="#about">About</a></li>

        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
        <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
        @guest
            @if(Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if(Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                        class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        <!-- <li class="scroll-to-section"><a href="login">Login</a></li>  -->
    </ul>
    <a class='menu-trigger'>
        <span>Menu</span>
    </a>
    <!-- ***** Menu End ***** -->
</nav>
