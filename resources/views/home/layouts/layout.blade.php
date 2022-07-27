<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.includes.head')
</head>
<!--/head-->

<body>
    @include('home.includes.header')
    <!--/header-->

    @yield('content')

    @include('home.includes.footer')
    <!--/Footer-->

</body>

</html>
