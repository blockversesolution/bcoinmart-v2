
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bcoinmart</title>
    @include('frontend.includes.css.css')
</head>

<body>
    @include('frontend.includes.candle_animation')
    <!-- Header Start-->
    @include('frontend.includes.header')
    <!-- Header End -->
    @yield('content')
    @include('frontend.includes.footer')

    @include('frontend.includes.js.js')

</body>
</html>
