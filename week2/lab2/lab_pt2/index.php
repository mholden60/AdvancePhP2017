<!DOCTYPE html>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LAB 2</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/PhpProject1/week2/lab2/lab_pt2/index.php">Address List</a></li>
      <li><a href="http://localhost/PhpProject1/week2/lab2/lab_pt2/add-address.php">Insert Address</a></li>

    </ul>
  </div>
</nav>
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href='../lab_pt2/css/css/bootstrap.css' >

</head>
    </head>
    <body>
       
        <?php
               require_once './autoload.php';

    //   include './models/DB.php';
      // include './crud/AddressCrud.php';
        //$addresses = readAllAddress();
       $crud = new Crud();
       $address = $crud->getAllAddresses();
        //include './models/DB.php';
        include './templates/view-address.html.php';
        //include './templates/view-address.html.php';

        ?>
    </body>
</html>
