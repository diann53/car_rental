<html>

<head>
    <title>Car Rental | Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-theme.min.css')}}">
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
</head>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
            </div>
            <div class="panel-body">
                <form method="post" action={{route('signup')}} >

                    <div class="form-group">
                        <label for="exampleInputUsername">Username</label>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Roles</label>
                        <select name="roles_id" class="form-control">
                            <option value="1">Admin</option>
                            <option value="2" selected>User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('login')}}">Login to the system</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>