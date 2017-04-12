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
        <?php
        // put your code here
       
        class dog
        {
            public $name = 'dog';
            
            public function __construct($name) 
            {
                $this->name = $name;
            }
            public function bark()
            {
                echo "$this->name is barking <br >";
            }
            
        }
        
       $class = 'Dog';
       $dog = new $class('gabe');
       $varname = 'name';
       $functname = 'bark';
        
       $dog->$functname();
       echo $dog->$varname;
        ?>
    </body>
</html>
