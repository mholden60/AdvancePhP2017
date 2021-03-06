<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
        <?php
      
        require_once './models/dbconnect.php';
        require_once './models/util.php';
        require_once './models/phoneCrud.php';


        $phone = filter_input(INPUT_POST, 'phone');
        $phoneType = filter_input(INPUT_POST, 'phonetype');


        
        $errors = [];
        $message = '';

        if (isPostRequest()) {

            if (phoneIsValid($phone)===false) {
                $errors[] = 'Sorry Phone is not valid';
            }
            
            if ( empty($phoneType) ) {
                $errors[] = 'Sorry Phone type is not valid';
            }

            if ( !count($errors) ) {
                if ( addPhone($phone, $phoneType) ) {
                    $message = 'Phone Added';
                    $phone = '';
                    $phoneType = '';
                } else {
                    $errors[] = 'phone could not be added';
                }
            }
            
        }

$phones = getAllPhone();
        include './templates/errors.html.php';
        include './templates/messages.html.php';
        include './templates/phone-form.html.php';

        include './templates/view-phones.html.php';
        ?>



    </body>
</html>
