<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$setting->company}}</title>
{{--    <base href="{{ asset('') }}">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset($setting->image)}}">


    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/animate.css">

    <!-- FANCYBOX CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/jquery.fancybox.css">

    <!-- BXSLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/jquery.bxslider.css">

    <!-- MEANMENU CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/meanmenu.min.css">

    <!-- JQUERY-UI-SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/jquery-ui-slider.css">

    <!-- NIVO SLIDER CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/nivo-slider.css">

    <!-- OWL CAROUSEL CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/owl.carousel.css">

    <!-- OWL CAROUSEL THEME CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/owl.theme.css">

    <!-- BOOTSTRAP CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/bootstrap.min.css">

    <!-- FONT AWESOME CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/font-awesome.min.css">

    <!-- NORMALIZE CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/normalize.css">

    <!-- MAIN CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/main.css">

    <!-- STYLE CSS
		============================================ -->
    <link rel="stylesheet" href="/home/style.css">

    <!-- RESPONSIVE CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/responsive.css">

    <!-- IE CSS
		============================================ -->
    <link rel="stylesheet" href="/home/css/ie.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- MODERNIZR JS
		============================================ -->
    <script src="/home/js/vendor/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript">
        var base_url = '{{ url('/') }}';
    </script>
</head>
<body class="
    @if (!empty($is_detail))
{{ 'product-page right-sidebar' }}
@elseif (!empty($is_home))
{{ 'home' }}
@else
{{ 'home' }}
@endif >
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="xMZjJWp7"></script>

@include('Shop.layouts.header')
<section class="main-content-section">
    <div class="container">
    @if (!isset($is_detail))
@include('Shop.layouts.sidebar')
    @endif
<!-- END Home slideder-->
<!-- servives -->
@yield('content')
    </div>
</section>
@include('Shop.layouts.suppost')

@include('Shop.layouts.footer')


<!-- Script-->
<script src="/home/js/vendor/jquery-1.11.3.min.js"></script>

<!-- fancybox js -->
<script src="/home/js/jquery.fancybox.js"></script>

<!-- bxslider js -->
<script src="/home/js/jquery.bxslider.min.js"></script>

<!-- meanmenu js -->
<script src="/home/js/jquery.meanmenu.js"></script>

<!-- owl carousel js -->
<script src="/home/js/owl.carousel.min.js"></script>

<!-- nivo slider js -->
<script src="/home/js/jquery.nivo.slider.js"></script>

<!-- jqueryui js -->
<script src="/home/js/jqueryui.js"></script>

<!-- bootstrap js -->
<script src="/home/js/bootstrap.min.js"></script>
{{--<script src=""></script>--}}
<!-- wow js -->
<script src="/home/js/wow.js"></script>
<script>
    new WOW().init();
</script>
<script src="/home/js/main.js"></script>
@yield('my_javascript')
</body>
</html>
