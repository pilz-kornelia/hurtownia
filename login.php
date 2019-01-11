<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>


  </head>
  <body>
    <?php require_once 'process.php'; ?>
   <div class="row justify-content-center">
      <form action="process.php" method="POST">
    <div class="form-group">
      <label>Name</label>
        <input type="text" name="name" class="form-control" value="Enter your name">
    </div>
    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control"  value="Enter your location">
    </div>
    <div class="form-group">
        <button type="submit" name="save">Save</button>
    </div>
      </form>
    </div>  
  </body>
</html>