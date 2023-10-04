<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/images/favicon.png') }}">
    <!-- Page Title  -->
    {{-- <title>Login | DashLite Admin Template</title> --}}
    @yield('title')
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/dashlite.css?ver=3.1.1') }}">
<link id="skin-default" rel="stylesheet" href="{{ asset('assets/admin/assets/css/theme.css?ver=3.1.1') }}">

</head>

    @yield('content')


    <!-- JavaScript -->
    <script src="{{ asset('assets/admin/assets/js/bundle.js?ver=3.1.1') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/scripts.js?ver=3.1.1') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/charts/gd-default.js?ver=3.1.1') }}"></script>
</body>

</html>
