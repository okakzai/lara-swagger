<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - {{ env('APP_NAME') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('template/mazer/compiled/css/app-dark.css') }}">
    {{-- Section untuk style tambahan --}}
    @stack('styles')
    @livewireStyles
</head>
<body>
    <script src="{{ asset('template/mazer/static/js/initTheme.js') }}"></script>
    <div id="app">
        
        @include('layouts.sidebar')

        <div id="main">
            @include('layouts.header')

            <div id="main-content">
                @yield('content')
            </div>

            @include('layouts.footer')
        </div>
    </div>

    <script src="{{ asset('template/mazer/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('template/mazer/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/mazer/compiled/js/app.js') }}"></script>
    {{-- Section untuk script tambahan --}}
    @stack('scripts')
    @stack('modals')
    @livewireScripts
</body>
</html>
