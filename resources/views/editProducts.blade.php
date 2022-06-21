<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container-scroller">
        <div class="container">
          <div>
            <h2> Edit Products</h2>
            <form method="POST" action="/updateProducts/{{$product->id}}">
              @csrf
              <div class="form-group">
                <label>Title of Product :</label>
                <input style="color : black" type="text" class="form-control" name="name" value="{{$product->name}}">
              </div>
              <div class="form-group">
                <label>Prize :</label>
                <input style="color : black" type="number" class="form-control" name="price" value="{{$product->price}}">
              </div>
              <div class="form-group">
                  <label>Catogery :</label>
                  <input style="color : black" type="text" class="form-control" name="category" value="{{$product->category}}">
                </div>
                <div class="form-group">
                    <label>Sub-Catogery :</label>
                    <input style="color : black" type="text" class="form-control" name="sub_category" value="{{$product->sub_category}}">
                </div>
                <div class="form-group">
                    <label>Description :</label>
                    <input style="color : black" type="text" class="form-control" name="description" value="{{$product->description}}">
                </div>
                <div class="form-group">
                    <label>Link of Image of Product :</label>
                    <input style="color : black" type="text" class="form-control" name="gallery" value="{{$product->gallery}}">
                  </div>
              <button type="submit" class="btn btn-primary">Update</button>
            </form>
    
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>