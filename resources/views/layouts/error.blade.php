<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Error') - {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/error.css') }}">
    {{-- Section untuk style tambahan --}}
    @stack('styles')
</head>
<body>
    <script src="{{ asset('template/mazer/static/js/initTheme.js') }}"></script>
    <div id="error">
        @yield('content')
    </div>
    {{-- Section untuk script tambahan --}}
    @stack('scripts')
</body>
</html>
