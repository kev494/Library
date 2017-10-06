</<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <title>Kevin's library</title>
</head>
<body>
    @include('layout.nav')
    <div class="container">
        @yield('content')
    </div>
</body>
<footer>
    <script src="/js/app.js"></script>
</footer>
</html>