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

    </head>
    <body>
     <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">LAB 1</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost/PhpProject1/week1/lab/index.php">Address List</a></li>
      <li><a href="http://localhost/PhpProject1/week1/lab/add-address.php">Insert Address</a></li>

    </ul>
  </div>
</nav>  
        <?php
        require_once './models/dbconnect.php';
        require_once './models/util.php';
        require_once './models/addressCrud.php';
        require_once './models/validation.php';
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $addressline1 = filter_input(INPUT_POST, 'addressline1');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $zip = filter_input(INPUT_POST, 'zip');
        $birthday = filter_input(INPUT_POST, 'birthday');

        $errors = [];
        $states = getStates();
        
        if(isPostRequest())
        {
            /**
             * Checking to insure data is valid
             */
            if(empty($fullname))
            {
                $errors[] = 'Fullname is required';
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL)==false)
            {
                $errors[] = 'Email not vaild';
            }
            if(empty($addressline1))
            {
                $errors[] = 'addressline1 is required';
            }
            if(empty($city))
            {
                $errors[] = 'city is required';
            }
            if(empty($state))
            {
                $errors[] = 'state is required';
            }
            if(!isZIPVALID($zip))
            {
                $errors[] = 'Zipcode not valid';
            }
            
            if (count($errors)===0)
            {
                if(createAddress($fullname, $email, $addressline1, $city, $state, $zip, $birthday))
                {
                    $message = 'Address Added';
                    $email = '';
                    $addressline1 = '';
                    $city = '';
                    $state = '';
                    $zip = '';
                  
                    $birthday = '';
                 }
                 else
                 {
                     $errors[] = 'Could not add to Database';
                 }
            }
            if(isDateValid($birthday))
            {
              $errors[] = 'Birthday not valid';

            }
        }
        /**
         * Including needed files
         */
        include './templates/errors.html.php';
        include './templates/messages.html.php';
        include './templates/address-form.html.php';
        ?>
    </body>
</html>
