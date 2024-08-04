<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
@yield('seocontent')
@include('admin.layout.partials.head')
</head>
<body>
<div class="wrapper">
@include('admin.layout.partials.nav')
<div class="main-panel">
@yield('content')
@include('admin.layout.partials.footer')
</div>
</div>
</body>
@include('admin.layout.partials.footer-scripts')
</html>