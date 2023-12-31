<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine/dist/alpine.js"></script>
  <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  {{-- @yield('css') --}}

</head>

<body>

  <div class="site-wrap">
    {{-- Header --}}
    @include('frontend.partials.header')

    {{-- Content --}}
    @yield('main-content')
    {{-- Footer --}}
    @include('frontend.partials.footer')
  </div>
  

  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  {{-- @yield('js') --}}
</body>

</html>
