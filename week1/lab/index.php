<!DOCTYPE html>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LAB 1</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./index.php">Address List</a></li>
      <li><a href="./add-address.php">Insert Address</a></li>

    </ul>
  </div>
</nav>
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="../lab/css/css/bootstrap.css"> 

</head>
    </head>
    <body>
       
        <?php
        
       include './models/dbconnect.php';
       include './models/addressCrud.php';
      
        $addresses = readAllAddress();
        
        include './templates/view-address.html.php';

        ?>
    </body>
</html>
