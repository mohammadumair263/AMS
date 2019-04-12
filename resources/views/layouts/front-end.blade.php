<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.includes.head')
    @yield('stylesheets')
</head>

<body class="page-top">

<div id="wrapper">

    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('backend.includes.topbar')
            @yield('content')
        </div>
        @include('backend.includes.footer')
    </div>

</div>

@include('backend.includes.script')
@yield('scripts')
</body>
</html>