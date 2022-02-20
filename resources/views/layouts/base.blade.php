<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page.title')</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="full-block">
        <div class="container">
            @include('includes.header')
        </div>
    </div>

    <main class="no-grow">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <div class="full-block">
        <div class="container">
            @include('includes.footer')
        </div>
    </div>
</body>
</html>