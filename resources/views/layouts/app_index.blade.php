 <html>
    <head>
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        {{-- <link rel="stylesheet" href="css/index.css"> --}}

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>



        <x-home-sidebar></x-home-sidebar>   

        @yield('content')




</body>
</html>