<!doctype html>
<html>
<html class="" lang="en">
<head>
@include('components.head')

</head>
<body class="">
    <main class="">
    <nav class="">
    @include('components.sidebar')
    </nav>
    <footer>
    @include('components.footer')
    </footer>
    </main>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>