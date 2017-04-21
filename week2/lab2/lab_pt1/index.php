<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         require_once './autoload.php';
        // put your code here
         $test1 = new ErrorMessage();
         $test1->addMessage("test1", 'Testing Error Message1');
         $test1->addMessage("test2", 'Testing Error Message2');
         $test1->addMessage("test3", 'Testing Error Message3');
         $test1->removeMessage("test2");
         var_dump('<br />', $test1->getAllMessages());
         
         ?> <br /><?php
         $test2 = new Message(); 
         $test2->addMessage("test1", 'Testing Message1');
         $test2->addMessage("test2", 'Testing Message2');
         $test2->addMessage("test3", 'Testing Message3');
         $test2->removeMessage("test3");
         var_dump('<br />', $test2->getAllMessages());
         ?> <br /><?php
          
         $test3 = new SuccessMessage(); 
         $test3->addMessage("test1", 'Testing Successful Message1');
         $test3->addMessage("test2", 'Testing Successful Message2');
         $test3->addMessage("test3", 'Testing Successful Message3');
         $test3->removeMessage("test1");
         var_dump('<br />', $test3->getAllMessages());
        ?>
    </body>
</html>
