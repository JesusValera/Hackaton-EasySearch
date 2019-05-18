<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>

    <title>Easy Search</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="css/easysearch.css" rel="stylesheet">
</head>
<body>
@include('layouts.navbar')

<div>
    @yield('content')
</div>
<footer class="footer">
    <div class="container">
        <div class="navbar-text pull-right">
            <p class="dark-blue">
                <i class="fa fa-copyright" aria-hidden="true"></i> Easy Search, {{ \Carbon\Carbon::now()->year }}
            </p>
        </div>
    </div>
</footer>
<script src="js/easysearch.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>
