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



        if ($util->isPostRequest()) {
            if (empty($email)) {
                $errors[] = 'Email required';
            }
            if (empty($password)) {
                $errors[] = 'password required';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format";
            }

            if (count($errors) == 0 && $accounts->signup($email, $password)) {

                $util->redirect("login.php", array("email" => $email));
            } else if (count($errors) == 0) {
                $error[] = "signup did not work";
            }
        }


        include '../accounts/templates/messages.html.php';
        include '../accounts/templates/errors.html.php';
        include './views/signup.html.php';
        ?>
    </body>
</html>
