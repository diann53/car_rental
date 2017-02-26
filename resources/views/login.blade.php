<html>

<head>
    <title>Car Rental | Login</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-theme.min.css')}}">
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Login</h3>
            </div>
            <div class="panel-body">
                <form method="post" action={{route('signin')}} >

                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('register')}}">Create an account</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>