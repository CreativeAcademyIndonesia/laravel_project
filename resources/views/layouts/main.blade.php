<!doctype html>
<html data-theme="light" style="color-scheme: light;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,600;0,9..40,700;1,9..40,400;1,9..40,500&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body class="min-h-screen min-w-full bg-[#252836]">
    <header></header>

    <main class="flex">
        @include('layouts.partials.sidebar')
        <div class="w-full">
            @include('layouts.partials.navigation')
            @yield('container')
        </div>
    </main>
    <footer>

    </footer>
    @include('layouts.script')
    @vite('resources/js/app.js')

</body>

</html>
