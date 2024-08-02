<!doctype html>
<html class="light" data-theme="light" style="color-scheme: light;">

<head>
    @include('layouts.app.style')
    @stack('style')
</head>

<body
    class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    @yield('container')


    @include('layouts.app.script')
    @stack('scripts')
</body>

</html>
