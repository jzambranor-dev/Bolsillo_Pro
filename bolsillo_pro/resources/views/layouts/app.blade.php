<!DOCTYPE html>
<html lang="en-US" dir="ltr" data-navigation-type="default" data-navbar-horizontal-shape="default">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi App')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />


    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon-16x16.png" />
    <link rel="shortcut icon" type="image/x-icon" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon.ico" />
    <link rel="manifest" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/manifest.json" />
    <meta name="theme-color" content="#ffffff" />
    <script src="{{ asset('phoenix/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('phoenix/js/config.js') }}"></script>

    <!-- Preload CSS crítico -->
    <link rel="preload" href="{{ asset('phoenix/css/template.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" href="{{ asset('phoenix/css/template.css') }}">
    </noscript>

    <!-- Tipografías externas -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="..." crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- Estilos -->
    <link href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet" />
    <link href="{{ asset('phoenix/css/simplebar.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('phoenix/css/css2') }}" rel="stylesheet">
    <link href="{{ asset('phoenix/css/line.css') }}" rel="stylesheet" />
    <link href="{{ asset('phoenix/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl" disabled />
    <link href="{{ asset('phoenix/css/theme.min.css') }}" rel="stylesheet" id="style-default" />
    <link href="{{ asset('phoenix/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl" disabled />
    <link href="{{ asset('phoenix/css/user.min.css') }}" rel="stylesheet" id="user-style-default" />

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

    <link href="{{ asset('phoenix/css/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('phoenix/css/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('phoenix/css/MarkerCluster.Default.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>


    <main class="main" id="top">
        @if (auth()->check() && request()->is('dashboard'))
        @include('partials.navbar')
        @endif
        <script>
            var navbarTopShape = window.config.config.phoenixNavbarTopShape;
            var navbarPosition = window.config.config.phoenixNavbarPosition;
            var body = document.querySelector('body');
            var navbarDefault = document.querySelector('#navbarDefault');
            var navbarTop = document.querySelector('#navbarTop');
            var topNavSlim = document.querySelector('#topNavSlim');
            var navbarTopSlim = document.querySelector('#navbarTopSlim');
            var navbarCombo = document.querySelector('#navbarCombo');
            var navbarComboSlim = document.querySelector('#navbarComboSlim');
            var dualNav = document.querySelector('#dualNav');

            var documentElement = document.documentElement;
            var navbarVertical = document.querySelector('.navbar-vertical');

            if (navbarPosition === 'dual-nav') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                navbarDefault?.remove();
                navbarVertical?.remove();
                dualNav.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'dual');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'vertical') {
                navbarDefault?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                topNavSlim.style.display = 'block';
                navbarVertical.style.display = 'inline-block';
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');

            } else if (navbarTopShape === 'slim' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                navbarVertical?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTopSlim.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'slim' && navbarPosition === 'combo') {
                navbarDefault?.remove();
                navbarTop?.remove();
                topNavSlim?.remove();
                navbarCombo?.remove();
                navbarTopSlim?.remove();
                dualNav?.remove();
                navbarComboSlim.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navbar-horizontal-shape', 'slim');
            } else if (navbarTopShape === 'default' && navbarPosition === 'horizontal') {
                navbarDefault?.remove();
                topNavSlim?.remove();
                navbarVertical?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarTop.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'horizontal');
            } else if (navbarTopShape === 'default' && navbarPosition === 'combo') {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarDefault?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarCombo.removeAttribute('style');
                navbarVertical.removeAttribute('style');
                document.documentElement.setAttribute('data-navigation-type', 'combo');
            } else {
                topNavSlim?.remove();
                navbarTop?.remove();
                navbarTopSlim?.remove();
                navbarCombo?.remove();
                navbarComboSlim?.remove();
                dualNav?.remove();
                navbarDefault.removeAttribute('style');
                navbarVertical.removeAttribute('style');
            }

            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.setAttribute('data-navbar-appearance', 'darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVerticalStyle === 'darker') {
                navbarVertical.setAttribute('data-navbar-appearance', 'darker');
            }
        </script>
        @yield('content')
    </main>

    <!-- Scripts -->

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