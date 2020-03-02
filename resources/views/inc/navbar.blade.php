<div class="navbar container is-primary">
    <div class="navbar-brand">
        @guest
            <a href="/" class="navbar-item">Laravel</a>
        @else
            <a href="/home" class="navbar-item">Laravel</a>
        @endguest
    </div>
    <div class="navbar-menu">
        <div class="navbar-end">
            @guest
                <a href="/login" class="navbar-item">Log In</a>
                @if (Route::has('register'))
                    <a href="/register" class="navbar-item">Register</a>
                @endif
            @else
                <li class="navbar-item has-dropdown is-hoverable">
                    <a id="navbarDropdown" class="navbar-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="navbar-dropdown is-boxed" aria-labelledby="navbarDropdown">
                        <a class="navbar-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </div>
    </div>
</div>
