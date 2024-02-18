<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield("css")
    <title>Document</title>
</head>
<body>
    @section('menu')
        
    @show
    @yield('content')
    @section('footer')
        
    @show
    @yield("js")
</body>
</html>