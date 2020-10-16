<?php
    $AUTH_USER = $_COOKIE['AUTH_USER'];
    if(!isset($AUTH_USER)){
        header('location:login.php?error=2');
    }
?>
<?php include("header.php");?>
<?php include("aflogin_navbar.php");?>

<?php include("footer.php");?>

  