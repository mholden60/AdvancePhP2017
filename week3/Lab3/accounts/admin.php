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
        include './autoload.php';
        include './templates/access-restricted.html.php'; 
         include './templates/logout.html.php';
        
        $valid = new Accounts();
        ?> 
        <div class="jumbotron">
            <div style="text-align: center">
                <h1>ADMIN PAGE</h1>
                <h2>Welcome</h2>
                <div
                 
                 
                
            </div>
        </div>
        <div style="text-align: center">
        <div class="alert alert-dismissible alert-success" style="font-size: 25px">
            <div style="text-align: center">
            <?php echo $valid->getUserEmailByUserID($_SESSION['user_id']); ?>
            <br />
            <?php echo $_SESSION['user_id']; ?>
        </div></div>
    </div>
</div>






</body>
</html>
