<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('header')
        @yield('content')
    @include('footer')
</body>
    <style>
        .custom-login{
            height: 500px;
            padding-top: 100px;
        }
        img.slider-img{
            height: 400px !important
        }
        .custom-product{
            height: 600px
        }
        .slider-text{
            background-color: #35443585 !important;
        }
        .trending-image{
            height: 100px;
        }
        .trening-item{
            float: left;
            width: 20%;
        }
        .trending-wrapper{
            margin: 30px;
        }
        .detail-img{
            height: 200px;
        }
        .search-box{
            width: 500px !important
        }
        .cart-list-devider{
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px
        }
    </style>
</html>