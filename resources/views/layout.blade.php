<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="navbar-wrapper">
        <a href="/" class='left'>
            <img src="images/logo/dars.png" alt="logo" width="160px" height="130px">
        </a>
        <div class='center'>
            <a href="/"><div>Home</div></a>

            <a href="menu"><div>Menu</div></a>

            <a href="about"><div>About</div></a>
        </div>
        <div class='right'>
            <a href="login"><div>Login</div></a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
