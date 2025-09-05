<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bcoinmart | {{ isset($page_title) ? $page_title : '' }}</title>
    @include('frontend.includes.css.css')
</head>

<body>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('frontend.includes.candle_animation')
<!-- Header Start-->
@include('frontend.includes.layouts.header')
<!-- Header End -->
@yield('content')
@include('frontend.includes.layouts.footer')

@include('frontend.includes.js.js')

</body>
</html>
