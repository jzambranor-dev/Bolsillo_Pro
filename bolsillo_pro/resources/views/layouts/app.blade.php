<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Mi App')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- CONFIG.JS DEBE IR PRIMERO para poder usar window.config abajo -->
    <script src="{{ asset('phoenix/js/config.js') }}"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon.ico" />
    <link rel="manifest" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/manifest.json" />
    <meta name="theme-color" content="#ffffff" />

    <!-- Preload CSS crítico -->
    <link rel="preload" href="{{ asset('phoenix/css/template.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('phoenix/css/template.css') }}">
    </noscript>

    <!-- Tipografías externas -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <!-- Estilos -->
    <link href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet" />
    <link href="{{ asset('phoenix/css/simplebar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('phoenix/css/css2') }}" rel="stylesheet">
    <link href="{{ asset('phoenix/css/line.css') }}" rel="stylesheet" />
    <link href="{{ asset('phoenix/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl" disabled />
    <link href="{{ asset('phoenix/css/theme.min.css') }}" rel="stylesheet" id="style-default" />
    <link href="{{ asset('phoenix/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl" disabled />
    <link href="{{ asset('phoenix/css/user.min.css') }}" rel="stylesheet" id="user-style-default" />
    <link href="{{ asset('phoenix/css/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('phoenix/css/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('phoenix/css/MarkerCluster.Default.css') }}" rel="stylesheet">

    <!-- Script para aplicar RTL dinámicamente si es necesario -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.config?.config?.phoenixIsRTL) {
                document.getElementById('style-default').disabled = true;
                document.getElementById('user-style-default').disabled = true;
                document.querySelector('html').setAttribute('dir', 'rtl');
            } else {
                document.getElementById('style-rtl').disabled = true;
                document.getElementById('user-style-rtl').disabled = true;
            }
        });
    </script>

    @stack('styles')
</head>

<body>

    <main class="main" id="top">
        @if (auth()->check() && request()->is('dashboard'))
        @include('partials.navbar')
        @endif

        @yield('content')
    </main>

    <!-- Scripts -->
    <script src="{{ asset('phoenix/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/popper.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/anchor.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/is.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/all.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/lodash.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/list.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/feather.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/dayjs.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/phoenix.js') }}"></script>
    <script src="{{ asset('phoenix/js/leaflet.js') }}"></script>
    <script src="{{ asset('phoenix/js/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('phoenix/js/leaflet-tilelayer-colorfilter.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/echarts.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/ecommerce-dashboard.js') }}"></script>

    @stack('scripts')
</body>

</html>