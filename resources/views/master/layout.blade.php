<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('master.partials.head')
</head>
<body>
    @include('master.partials.header')
    @section('hero')
    @show
    <main id="main">
        @yield('main')
    </main>
    @include('master.partials.footer')
    @includeIf('master.partials.preloader', ['perloader' => true])
    @include('master.partials.backToTop')
    @include('master.partials.scripts')
</body>
</html>