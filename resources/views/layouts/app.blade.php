<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <scr it src="{{ asset('bootstrap/js/bootstra.min.js') }}">
        </script>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

        <!-- font awesome 6.3.0 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<style>
    .center-screen {
        display: flex;
        justify-content: center;
        align-items: center;

        min-height: 100vh;
    }

    body {
        background-image: url('/images/login-bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        font-family: poppins;
        font-size: 16px;
        color: #fff;

    }

    .card {
        position: relative;
    }

    .card-body {
        background-color: rgba(0, 0, 0, 0.6);
        margin: auto auto;
        padding: 40px;
        border-radius: 5px;
        box-shadow: 0 0 10px #000;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 500px;
        height: 600px;
    }

    select:invalid {
        color: gray;
    }

    #loginBtn,
    #regisBtn {
        background-color: deepskyblue;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
        padding: 10px;
    }
</style>

<body>
    <div id="app">

        @yield('content')

    </div>
</body>

</html>
