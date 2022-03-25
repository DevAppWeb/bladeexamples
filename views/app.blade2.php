<!doctype html>
<html>
    <head>
        @base
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container">
            @section('sidebar')
            This is the master sidebar.
            asdasasd
            {{ $colores[0] }}
            @show
        </div>
        <div>
            @yield('content')
        </div>
        <div>
            @yield('alerta')
        </div>
        @yield('footer')
    </body>
</html>

