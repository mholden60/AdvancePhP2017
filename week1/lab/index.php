<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    
       include './lab/models/dbconnect.php';
       include '../lab/models/addressCrud.php';
       include '../lab/models/dbconnect.php';
      
        $addresses = readAllAddress();
        
        include './lab/templates/address-form.html.php';
        
        ?>
    </body>
</html>
