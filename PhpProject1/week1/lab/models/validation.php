<?php


function isZIPVALID($ZIP)
{
    $zipRegex = '/^[0-9]{5}$/';
    
    if(preg_match($zipRegex, $ZIP))
    {
        return true;
    }
    return false;
}
function isDateValid($date)
{
    return (bool) strtotime($date);
}
function isValidEmail($email)
{
    
}