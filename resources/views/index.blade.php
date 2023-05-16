
<!doctype html>
<html lang="en">
    @extends('partials.head')
<body>
    @include('partials.svg')
    @include('partials.dropdown')
    @include('partials.nav')
    @include('partials.dashboard')

    <script src="{{ URL::asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ URL::asset('assets/js/feather.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/chart.umd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dashboard.js') }}"></script>
</body>
</html>
