<?php include("dao.php");?>
<?php    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login_tbl where username = '$username' and password = '$password'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        setcookie("AUTH_USER",$username);
        header('location:home.php');
    }else{
        header('location:login.php?error=1');
    }
?>