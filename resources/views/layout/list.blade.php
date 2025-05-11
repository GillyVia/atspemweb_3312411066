<!DOCTYPE html>
<html>
<head>
    <title>Layout Utama</title>
</head>
<body>

    @include('components.header')

    <div class="container">
        @yield('content')
    </div>

    @include('components.footer')

</body>
</html>
