<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titleAdm') - Sistema</title>
</head>
<body>

    <div class="container">
        @yield('content')
        @yield('name')
    </div>

    <div class="container" style="position:relative;left: 10%">
        @yield('switchTeste')
    </div>

    <hr>

    <div class="array">
        @yield('repeats')
    </div>

</body>
</html>
