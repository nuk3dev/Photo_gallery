<!doctype html>
<html>
<html class="dark" lang="en">
<head>
@include('components.head')
</head>
<body class="bg-dark Arial text-light">
    <main class="">
    <nav class="navbar navbar-expand-lg bg-dark d-flex justify-content-center">
    @include('components.navbar')
    </nav>
    <content class="">
    @yield('content')
    </content>
    <footer>
    @include('components.footer')
    </footer>
    </main>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
