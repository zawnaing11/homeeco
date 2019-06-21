<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homeeco</title>
    @include('frontEnd.layouts.link')
    @yield('links')
</head>
<body>
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
    @include('frontEnd.layouts.script')
    @yield('scripts')
</html>