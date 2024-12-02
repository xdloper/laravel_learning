<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '')</title>

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @vite([
        'resources/css/index.css', 
        'resources/js/index.js'
    ])
</head>
<body>
    <header>
        @include('./layout/partials.header')
    </header>

    <header>
        @include('./layout/partials.navbar')
    </header>

    <section>
        <div class="section">
            @yield('content')
        </div>
    </section>
    
    <footer>
        @include('./layout/partials.footer')
    </footer>

    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>