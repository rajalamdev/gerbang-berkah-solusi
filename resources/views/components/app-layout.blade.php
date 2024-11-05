<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>GBSI</title>
    <!-- Favicons -->
    <link href="{{asset('components')}}/img/logo.png" rel="icon" />
    <link href="{{asset('components')}}/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="{{asset('components')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="{{asset('components')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('components')}}/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{asset('components')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="{{asset('components')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="{{asset('components')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="{{asset('components')}}/css/style.css" rel="stylesheet" />

    <!-- JavaScript Libraries -->
        <script src="{{asset('components')}}/lib/jquery/jquery.min.js"></script>
        <script src="{{asset('components')}}/lib/jquery/jquery-migrate.min.js"></script>
        <script src="{{asset('components')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('components')}}/lib/easing/easing.min.js"></script>
        <script src="{{asset('components')}}/lib/superfish/hoverIntent.js"></script>
        <script src="{{asset('components')}}/lib/superfish/superfish.min.js"></script>
        <script src="{{asset('components')}}/lib/wow/wow.min.js"></script>
        <script src="{{asset('components')}}/lib/waypoints/waypoints.min.js"></script>
        <script src="{{asset('components')}}/lib/counterup/counterup.min.js"></script>
        <script src="{{asset('components')}}/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="{{asset('components')}}/lib/isotope/isotope.pkgd.min.js"></script>
        <script src="{{asset('components')}}/lib/lightbox/js/lightbox.min.js"></script>
        <script src="{{asset('components')}}/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('components')}}/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('components')}}/js/main.js"></script>
</head>
<body>
    <header>
        <x-header></x-header>
    </header>
    <main>
        {{$slot}}
    </main>
    <footer>
        <x-footer></x-footer>
    </footer>
</body>
</html>