<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>{{ $title }}</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"> -->

    <link href="{{asset('assets/')}}/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">



    <!-- Custom styles for this template -->
    <link href="{{asset('assets/')}}/css/carousel.css" rel="stylesheet">
    <link href="{{asset('assets/')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <x-forusers.layouts.navbar />
    <main>
        {{ $slot }}
    </main>
    <x-forusers.layouts.footer />


    <script src="{{asset('assets/')}}/js/bootstrap.bundle.min.js"></script>


</body>

</html>