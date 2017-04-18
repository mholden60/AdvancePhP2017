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
        // put your code here
        session_start();
        include './autoload.php';

        $util = new Util();
        $valid = new Validation();
        $accounts = new Accounts();
        $error = [];

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if ($util->isPostRequest()) {

             if(empty($email))
                 {
                    $errors[] = 'Email required';  
                 }
                 if(empty($password))
                    {
                    $errors[] = 'password required';  
                 }  
            if(filter_var($email, FILTER_VALIDATE_EMAIL)==false)
            {
                $errors[] = 'Email not vaild';
            }
           
            $loginInfo = $accounts->login($email, $password);

            if ($loginInfo > 0) {

                echo "YOUR LOGGED IN";
                $_SESSION['user_id'] = $loginInfo;
                $util->redirect("admin.php");
            } 
        }
        else{
            
        }


        include './views/login.html.php';
               include '../accounts/templates/messages.html.php';
       include '../accounts/templates/errors.html.php';
  
        ?>
    </body>
</html>
