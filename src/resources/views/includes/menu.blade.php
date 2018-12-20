<section id="menu">
        <div class="close">
            <div>
                <div>
                    <a title="Menu" class="menu-toggle">
                        <img src="{{asset('images/close.svg')}}" alt="Close">
                    </a>
                </div>
            </div>
        </div>
        <ul>
            <li data-background="{{asset('images/places/asia.jpg')}}">
                <a href="404">Asia</a>
            </li>
            <li data-background="{{asset('images/places/africa.jpg')}}">
                <a href="404">Africa</a>
            </li>
            <li data-background="{{asset('images/places/europe.jpg')}}">
                <a href="404">Europe</a>
            </li>
            <li data-background="{{asset('images/places/south-america.jpg')}}">
                <a href="404">America</a>
            </li>
            <hr>
            @guest
            <li>
                <a href="/login">Log In</a>
            </li>
            <li>
                <a href="/register">Sign In</a>
            </li>
            <hr>
            @else
            @if(Auth::user()->role == 'admin')
            <li>
                <a href="/admin">Admin Panel</a>
            </li>
            @endif
            <li class="nav-item dropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
            <hr>
            @endguest
        </ul>
    </section>