<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.title-meta')
    @include('layout.header')
</head>
<body>
    @include('layout.sidebar')
    <!-- KONTEN -->
    <main class="wrapper">
        @yield('konten')
    </main>
    @include('layout.footer')
@yield('script')
</body>
</html>