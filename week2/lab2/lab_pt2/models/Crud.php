<?php

class Crud extends DB {
    //put your code here
    
    protected $fullname;
    protected $email;
    protected $addressline1;
    protected $city;
    protected $state;
    protected $zip;
    protected $birthday;
    
    function __construct() 
    {    
          parent::__construct('mysql:host=localhost;port=3306;dbname=PHPAdvClassSpring2017', 'root', '') ;      
    }
}
