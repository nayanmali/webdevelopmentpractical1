<?php
   
   $AUTH_USER = $_COOKIE['AUTH_USER'];
   if(isset($AUTH_USER)){
       setcookie('AUTH_USER', NULL, time()-3600); 
       unset($_COOKIE['AUTH_USER']);      
       header('location:login.php');
   }
   
?>