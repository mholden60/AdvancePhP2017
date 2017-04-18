<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
               <link rel="stylesheet" href="../accounts/css/css/bootstrap.css" />
    </head>
    <body>
        <?php
        session_start();
        include './models/Validation.php';
       
        
         if ( isLoggedIn() ) {
            die('Access not allowed');
        }
        
        ?>
        <h1>ADMIN PAGE</h1>
        <h2>Welcome</h2>
        
       
        

      
        
        <button type="submit" > 
    </body>
</html>
