<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>

    {{-- CSS de Bootstrap o el que uses --}}
    <!-- ===============================================-->
   
    
    <link href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="https://prium.github.io/phoenix/v1.23.0/assets/img/favicons/manifest.json">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="../resources/phoenix/css/template.css">
    <script src="../resources/phoenix/js/simplebar.min.js"></script>
    <script src="../resources/phoenix/js/config.js"></script>

    <!-- =============================================== -->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="../resources/phoenix/css/css2" rel="stylesheet">
    <link href="../resources/phoenix/css/simplebar.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../resources/phoenix/css/line.css">
    <link href="../resources/phoenix/css/theme-rtl.min.css" type="text/css" rel="stylesheet" id="style-rtl" disabled="true">
    <link href="../resources/phoenix/css/theme.min.css" type="text/css" rel="stylesheet" id="style-default">
    <link href="../resources/phoenix/css/user-rtl.min.css" type="text/css" rel="stylesheet" id="user-style-rtl" disabled="true">
    <link href="../resources/phoenix/css/user.min.css" type="text/css" rel="stylesheet" id="user-style-default">

    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>

    @stack('styles') {{-- Para estilos específicos de cada vista --}}
</head>

<body>

    <!-- {{-- Navbar --}}
    @include('partials.navbar') -->

    <main class="main" id="top">
        @yield('content')
    </main>

    <!-- {{-- Footer --}}
    @include('partials.footer') -->

    {{-- Scripts comunes --}}

    <script src="../resources/phoenix/js/popper.min.js"></script>
    <script src="../resources/phoenix/js/bootstrap.min.js"></script>
    <script src="../resources/phoenix/js/anchor.min.js"></script>
    <script src="../resources/phoenix/js/is.min.js"></script>
    <script src="../resources/phoenix/js/all.min.js"></script>
    <script src="../resources/phoenix/js/lodash.min.js"></script>
    <script src="../resources/phoenix/js/list.min.js"></script>
    <script src="../resources/phoenix/js/feather.min.js"></script>
    <script src="../resources/phoenix/js/dayjs.min.js"></script>
    <script src="../resources/phoenix/js/phoenix.js"></script>

    @stack('scripts') {{-- Para scripts específicos de cada vista --}}
</body>

</html>