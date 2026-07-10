<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>


</head>

<body>

    <!-- Navbar -->
    <div class="container-fluid px-2 mt-2">
        @include('includes.navbar')
    </div>
    <div class="container-fluid px-2 mt-2">
        @yield('content')
    </div>

    <div class="container-fluid px-2 mt-2">
       
    </div>



</body>

</html>