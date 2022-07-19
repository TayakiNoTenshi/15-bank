<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <script>0</script>
    <div id="app">
        <!-- Top -->
        <header class="titleBlock">
            <h1 class="title">OmniCorp's Bank Division</h1>
            <h4 class="titleQuote">All your life savings are with us</h4>
        </header>
        <!-- Nav -->
        <div class="contentContainer">
            <nav  class="navBlock contentBox">
                <a href="accounts" class="navLink">Accounts</a>
                <a href="accountCreationForm" class="navLink">Open a new account</a>
                <a href="addFunds" class="navLink">Add funds</a>
                <a href="withdrawFunds" class="navLink">Withdraw funds</a>
            </nav>
            <main  class="mainContetBlock contentBox left">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>