<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require_once './autoload.php';
        // put your code here
         $test = new ErrorMessage();
         $test->addMessage("test1", 'Testing Error Message1');
         $test->addMessage("test2", 'Testing Error Message2');
         $test->addMessage("test3", 'Testing Error Message3');
         $test->removeMessage("test2");
         var_dump('<br />', $test->getAllMessages());
         $test2 = new Message(); 
         $test2->addMessage("test1", 'Testing Message1');
         $test2->addMessage("test2", 'Testing Message2');
         $test2->addMessage("test3", 'Testing Message3');
         $test2->removeMessage("test2");
         var_dump('<br />', $test2->getAllMessages());
        ?>
    </body>
</html>
