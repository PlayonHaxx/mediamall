<nav class="navbar navbar-inverse navbar-static-top mm-nav">
    <div class="container">
        <div class="navbar-header mm-header">
            <button type="button" class="navbar-toggle collapsed mm-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" style="max-width: 250px" alt="Mediamall Logo" class="img-responsive"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right mm-navbar-nav">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/vision') }}">Vision</a></li>
                    <li><a href="{{ url('/business') }}">Our Business</a></li>
                    <li><a href="{{ url('/academy') }}">Academy</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>

                    {{--<li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>--}}
                @else
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                    <li><a href="{{ route('tags.index') }}">Tags</a></li>
                    <li><a href="{{ url('/posts') }}">Posts</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div><!--/.navbar-collapse -->
    </div>

 {{--   @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
                <a href="{{ url('/admin') }}">Admin</a>
                <a href="{{ url('/posts') }}">Posts</a>
            @else
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('/blog') }}">Blog</a>
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    @endif--}}

</nav>