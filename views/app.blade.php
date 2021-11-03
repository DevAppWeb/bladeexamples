<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <div>
            @section('sidebar')
            This is the master sidebar.
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

