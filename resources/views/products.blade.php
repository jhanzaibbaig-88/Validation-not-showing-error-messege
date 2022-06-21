<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Admin Panel</title>
    </head>
    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="{{url('/products')}}">Products</a>
            <a href="{{url('/users')}}">Users</a>
            <a href="{{url('/carts')}}">Carts</a>
            <a href="{{url('/orders')}}">Orders</a>
        </div>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Admin Panel</span>
          <div>
            <a href="{{url('/addProducts')}}" class="btn btn-primary">
                Add New Products
            </a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Prize</th>
                    <th scope="col">Catogery</th>
                    <th scope="col">Sub-Catogery</th>
                    <th scope="col">Description</th>
                    <th scope="col">Gallery</th>
                    <th scope="col" style="text-align:center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td scope="col">{{$product->id}}</td>
                    <td scope="col">{{$product->name}}</td>
                    <td scope="col">{{$product->price}}</td>
                    <td scope="col">{{$product->category}}</td>
                    <td scope="col">{{$product->sub_category}}</td>
                    <td scope="col">{{$product->description}}</td>
                    <td scope="col">{{$product->gallery}}</td>
                    <td scope="col" style="text-align:center">
                    <a href="/products/{{$product->id}}" class="btn btn-danger">Delete</a>
                    <a href="/editProducts/{{$product->id}}" class="btn btn-success">Update</a>
                    </td>
                </tr>
            </tbody>
                @endforeach
        </table>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    <style>
        body {
            font-family: "Lato", sans-serif;
        }
        
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        
        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        
        .sidenav a:hover {
            color: #f1f1f1;
        }
        
        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
</html>
