<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login') - {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/auth.css') }}">
    {{-- Section untuk style tambahan --}}
    @stack('styles')
    @livewireStyles
</head>
<body>
    <script src="{{ asset('template/mazer/static/js/initTheme.js') }}"></script>
    <div id="auth">
        @yield('content')
    </div>
    {{-- Section untuk script tambahan --}}
    @stack('scripts')
    @stack('modals')
    @livewireScripts
</body>
</html>
