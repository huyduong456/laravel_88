<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Thư viện vedor -->
    <base href="/">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Theme khởi tạo -->
    <script>
        var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem(
            'themeSettings')) : {};
        var themeName = themeSettings.themeName || '';
        if (themeName) {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app-' + themeName + '.css">');
        } else {
            document.write('<link rel="stylesheet" id="theme-style" href="css/app.css">');
        }
    </script>
</head>

<body>
    <div class="main-wrapper">
        <div class="app" id="app">
            @include('master/header')
            @include('master/aside')
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
            <div class="mobile-menu-handle"></div>
           <!-- content -->
            @yield('content')
           <!-- end content -->
            @include('master/footer')


        </div>
    </div>

    @section('script')

    <script src="js/vendor.js"></script>
    <script src="js/app.js"></script>

    @show
</body>

</html>
