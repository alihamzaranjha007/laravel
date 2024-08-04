<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
@yield('seocontent')
@include('frontend.layout.partials.head')
</head>
<body>
@include('frontend.layout.partials.spinner')
@include('frontend.layout.partials.topbar')
@include('frontend.layout.partials.nav')
@include('frontend.layout.partials.header')
@yield('content')
@include('frontend.layout.partials.footer')
@include('frontend.layout.partials.footer-scripts')
</body>
</html>