
<!-- * Created by PhpStorm.
 * User: amontes
 * Date: 12/12/2016
 * Time: 5:18 PM
 */-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h3>Dashboard Tool</h3>
            <h4>Welcome User <a href="">Logout</a></h4>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{url('dashboard')}}">Upload Data</a></li>
                <li><a href="{{url('documents')}}">Files</a></li>
            </ul>
        </div>

        <div class="col-sm-9">
            @yield('content')
        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>

</body>
</html>