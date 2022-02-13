<!DOCTYPE html>
<html lang="en">
<head>
    @include('email.master.partials.head')
</head>
<body>
    @include('email.master.partials.header')
    <main id="main">
        @yield('main')
    </main>
    @include('email.master.partials.footer')
</body>
</html>