<?php
session_start();
$Fruits=$_POST["fruits"];
foreach ($Fruits as $value) {
    if(isset($_SESSION[$value]))
    {
        $_SESSION[$value]++;
    }
    else 
    {
        $_SESSION[$value]=1;
    }
}


    $referer = $_SERVER['HTTP_REFERER'];
    //$url = !empty($referer) ? $referer : $alt_url;
    header('Location: ' . $referer);
    die(); // no further rendering
    
 

  



?>