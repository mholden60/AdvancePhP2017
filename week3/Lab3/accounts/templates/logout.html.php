<?php
$logout = filter_input(INPUT_GET, 'logout');

if ( $logout == 1 ) {
    unset($_SESSION['user_id']);
    header('Location: login.php');
}

if ( isset($_SESSION['user_id']) &&
        $_SESSION['user_id'] > 0 ) {
   echo '<a href="?logout=1">Logout</a>';
}
 ?>