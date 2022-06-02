<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>@yield('title')</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 </head>
<body>
    <nav class="nav">
        <a class="nav-link" href="{{ url('/') }}">Главная</a>
        <a class="nav-link" href="{{ url('/add-phone') }}">Добавить</a>
        <a class="nav-link" href="{{ url('/cart') }}">Корзина</a>
    </nav>
    <div class="container page">
        @yield('content')
    </div>
    @yield('scripts')
</body>
</html>
