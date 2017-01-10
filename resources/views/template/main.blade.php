
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

<<<<<<< HEAD
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

=======
>>>>>>> origin/master
</head>
<body>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav">
            <h3>Dashboard Tool</h3>
<<<<<<< HEAD
            <h4>Welcome {{ Auth::user()->name }} <a href="{{ url('/logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                    Logout</a></h4>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{url('/')}}">Upload Data</a></li>
                <li><a href="{{route('documents.index')}}">Files</a></li>
                <li><a href="{{route('dashboard.index')}}">Data</a></li>
            </ul>
        </div>

        <div class="col-sm-8">
=======
            <h4>Welcome User <a href="">Logout</a></h4>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{url('dashboard')}}">Upload Data</a></li>
                <li><a href="{{url('documents')}}">Files</a></li>
            </ul>
        </div>

        <div class="col-sm-9">
>>>>>>> origin/master
            @yield('content')
        </div>
    </div>
</div>

<footer class="container-fluid">
    <p>Footer Text</p>
</footer>
<<<<<<< HEAD
<!-- Scripts -->
@yield('scripts')
<script src="/js/app.js"></script>
=======

>>>>>>> origin/master
</body>
</html>