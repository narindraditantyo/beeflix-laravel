<!DOCTYPE html>
<html>
    <head>
        <title>BeeFlix</title>

        {{-- Bootstrap Assets --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body style="background-color: #121212">
        <nav class="navbar navbar-dark" style="background-color: rgba(245, 246, 248, 0.24)">
            <a href="#" class="navbar-brand">BeeFlix</a>
        </nav>

        @yield('page-indicator')

        <div class="container">
            @yield('page-content')
        </div>
    </body>
</html>
