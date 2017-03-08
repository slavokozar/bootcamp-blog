<html>
<head>
    <title>BC blog</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
</head>
<body>

{{-- Auth::check()       //returns true, if user is logged--}}
{{-- Auth::guest()       //returns true, if user is not logged--}}
{{-- Auth::user()        //returns model of logged user, or null--}}

@if (Auth::guest())
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif


<div class="container">
    @yield('main-content')
</div>

@yield('footer')

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>