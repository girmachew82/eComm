<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eComm</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        img.slider-img{
            height: 600px !important;
        }
        .trending-wrapper
        {
            margin: 30px;
        }
        .trending-image{
            height: 100px;
        }
        .trending-item{
            float: left;
            width: 20%;
        }
    </style>
</head>
<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
