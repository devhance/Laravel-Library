<nav class="white z-depth-1">
    <div class="nav-wrapper container">
        <a href="{{ url('/') }}" class="brand-logo left">{{ config('app.name', 'Laravel') }}</a>
        <a href="#" data-activates="side-nav" class="button-collapse right">
            
        </a>
        <ul class="right hide-on-med-and-down">
            @guest
                <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @endif
            @else 
                @can('admin')
                <li><a href="/admin/users">User Management</a></li>
                <li><a href="/admin/books">Book Mangement</a></li>
                <li><a href="/admin/rented">Rented</a></li>
                @endcan
                @can('user')
                <li><a href="/user/rented">Dashboard</a></li>
                <li><a href="/user/books">Rent Books</a></li>
                @endcan
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>

