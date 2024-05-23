<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title>laravel-model-controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>
</html>