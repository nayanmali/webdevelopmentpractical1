<?php include('dao.php');?>
<?php
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];


    if(isset($username) and isset($password) and isset($email) and isset($mobile) and isset($gender) ){

     

        $sql = "INSERT INTO login_tbl values('$username','$password');";
        $sql1 = "INSERT INTO employee_info_tbl values('$username','$email','$mobile','$gender')";


        if($conn->query($sql)==TRUE and $conn->query($sql1)==TRUE){                  
               header("location:login.php");          
        }else{
            echo "ERROR";
        }
        
    }else{
        echo "Invalid Input";
    }

?>