<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
               <link rel="stylesheet" href="../accounts/css/css/bootstrap.css" />
    </head>
    <body>
        <?php
        
        include './autoload.php';
        
       
        $valid = new Validation();
        $util = new Util();
        $accounts = new Accounts();
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
         $errors = [];
        
       
        
            if($util->isPostRequest())
        {
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
           
            if($accounts->signup($email, $password))
            {
                echo "signup worked";
                $util ->redirect("login.php", array("email"=>$email));
            }
           
        }
        
        
        include '../accounts/templates/messages.html.php';
       include '../accounts/templates/errors.html.php';
       include './views/signup.html.php';
        ?>
    </body>
</html>
