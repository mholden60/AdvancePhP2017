<?php

/**
 *
 * @author Mathew Holden
 */
interface ICrud {
    //put your code here
    public function create(); 
    public function read();
    public function readAll();
    public function update();
    public function delete();
}
