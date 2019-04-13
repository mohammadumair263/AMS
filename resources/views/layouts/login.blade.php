<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.includes.head')
    @yield('stylesheets')
</head>

<body class="bg-gradient-primary">

@yield('content')

@include('backend.includes.script')
@yield('scripts')
</body>
</html>