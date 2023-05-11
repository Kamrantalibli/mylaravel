<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title", "Articles")</title>
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/dist/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/sweetalert2/dist/sweetalert2.min.css") }}">
    @yield("css")
</head>
<body>
    @include("layouts.front.navbar")
    
    
    @yield("content")


    @include("layouts.front.footer")

    <script src="{{ asset("assets/bootstrap/dist/js/bootstrap.bundle.js") }}"></script>
    <script src="{{ asset("assets/jquery/dist/jquery.min.js") }}"></script>
    <script src="{{ asset("assets/sweetalert2/dist/sweetalert2.all.min.js") }}"></script>
    @yield("js")

</body>
</html>