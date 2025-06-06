<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="icon" href="{{ asset('image/Sawala Edu (Default).png') }}" sizes="64x64">
    @stack("styles")
</head>
<body>
    <div id="aside">

    </div>
    <div id="main">
        <div id="header">
            <div class="title">
                <h1>Kelola Akun</h1>
            </div>
            <div class="buttons">
                <button class="logout">Log Out</button>
                <img src="../../image/img.jpg" alt="profile">
            </div>
        </div>
        @yield('content')

    <script src="{{ asset('js/layout.js') }}" defer></script>
    <script>
        window.baseUrl ="{{ url('/') }}"
    </script>
    @stack('script')
</body>
</html>