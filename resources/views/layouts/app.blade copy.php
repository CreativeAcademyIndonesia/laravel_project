<!doctype html>
<html class="light">
<head>
    @include('layouts.app.style')
    @stack('style')
</head>
<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    @include('layouts.app.partials.sidebar')
    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
        @include('layouts.app.partials.navbar')
        @yield('container')
    </main>
    @include('layouts.app.partials.config')
    @include('layouts.app.script')
    @stack('scripts')
  </body>
</html>