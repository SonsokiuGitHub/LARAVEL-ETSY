<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('link-css')
    <title>@yield('title')</title>
</head>

<body>
    <div id="wrapper" class="container-fluid g-0">
        @include("layouts.header")        

        @yield("content")

        @include("layouts.footer")

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    @yield('script')
    
</body>

</html>