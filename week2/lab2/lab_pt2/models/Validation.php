<?php

/**
 * Description of Validation
 *
 * @author Mathew Holden
 */
class Validation {
    //put your code here
    function isZipValid($zip)
{
    $zipRegex = '/^[0-9]{5}$/';
    
    if(preg_match($zipRegex, $zip))
    {
        return true;
    }
    return false;
}
function isDateValid($birthday)
{
    return (bool) strtotime($birthday);
}
function isValidEmail($email)
{
     return ( is_string($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) !== false );
}
function isValidPhone($phone)
{
     return ( preg_match("/^\(?([2-9]{1}[0-9]{2})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $phone) );
}
}
