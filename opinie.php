<!doctype html>
<html>
    <head>
    <title>SKLEP SPORTOWY</title>
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
    
   <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#">SKLEP SPORTOWY</a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="index.php" class="nav-link">Strona główna</a></li>
                                </ul>

                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>  
    
    
    
    
    
    <?php require_once 'process.php'; ?>
    
    <?php 
    
    if (isset($_SESSION['message'])): ?>
    
    <div class="alert alert-<?=$_SESSION['msg_type']?>">
         
         <?php
            echo $_SESSION['message'];
            unset ($_SESSION['message']);
         ?>
    </div>
    
    <?php endif ?>
    
    <div class="container">
    <?php   
      $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));
      $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //pre_r($result);
    ?>
    
    <div class="row justify-content-center">       
        <table class="table"> 
            <thead>
                <tr>
                    <th>Imię</th>
                    <th>Komentarz</th>
                    
                </tr>
            </thead>
  <?php
    while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']?> </td>
                <td><?php echo $row['komentarz']?> </td>
          
            </tr>
        <?php endwhile; ?>          
        </table>
    </div>
    
    <?php
    
    
      function pre_r ( $array ) {
          echo'<pre>';
          print_r($array);
          echo '</pre>';
      }
      ?>
      
   
      <form action="process.php" method="POST">
    <div class="form-group">
      <label>Imię</label>
        <input type="text" name="name" class="form-control" value="Wpisz swoje imię">
    </div>
    <div class="form-group">
        <label>Komentarz</label>
        <input type="text" name="komentarz" class="form-control"  value="Wpisz swój komentarz oraz produkt/produkty które oceniasz">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-warning" name="save">Dodaj komentarz</button>
    </div>
      </form>
    
    </div>
  </body>
</html>