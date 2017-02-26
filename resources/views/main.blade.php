<html>
    <head>
    <title>Car Rental</title>
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-theme.min.css')}}">
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                    <a class="navbar-brand" href="#">Car Rental</a>
                    </div>
                    <ul class="nav navbar-nav">
                    @if(auth()->user()->roles_id == 1)
                        <li><a href="{{route('admin.request')}}">Requests</a>
                        </li>
                        <li><a href="{{route('vehicle')}}">Vehicles</a>
                        </li>
                    @else
                        <li class="active"><a href="{{route('home')}}">Home</a>
                        </li>
                        <li><a href="{{route('user.request')}}">Requests</a>
                        </li>
                    @endif
                    </ul>
                    <p class="navbar-text">Signed in as {{auth()->user()->name}} | <a href="{{route('logout')}}">Logout</a>
</p>
                </div>
            </nav>
            <div class="container">
               {{$content}}
            </div>
        </div>
    </body>
</html>