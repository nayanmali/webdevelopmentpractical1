<?php include("dao.php");?>
<?php
    $AUTH_USER = $_COOKIE['AUTH_USER'];
    if(!isset($AUTH_USER)){
        header('location:login.php?error=2');
    }


    if(isset($_POST['upload'])){
        $file_name = $_FILES['profilepic']['name'];
        $file_type = $_FILES['profilepic']['type'];
        $file_tmp_name = $_FILES['profilepic']['tmp_name'];
        $file_error = $_FILES['profilepic']['error'];
        $file_size = $_FILES['profilepic']['size'];
        $uploadpath = "assets//images//profilepic//".$file_name;


        if(move_uploaded_file($file_tmp_name,$uploadpath)){
             $sql1 = "insert into profile_pic values ('$AUTH_USER','$uploadpath')";    
             $conn->query($sql1);

        }else{
            echo $file_error;
        }
        
    }
?>
<?php include("header.php");?>
<?php include("aflogin_navbar.php");?>


<div class="container">
    <br/><br/><br/>
    <form action="?" method="POST" enctype="multipart/form-data">
        <table class="table borderless">
            <tr>
                <td>Upload Photo</td>
                <td><input type="file" name="profilepic"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="upload" value="Upload Image" class="btn btn-primary"/></td>
            </tr>
        </table>
    </form>


    <div class="row">
        <div class="col-md-2">
        <?php
    
    $sql2 = "SELECT * FROM profile_pic where username = '$AUTH_USER'";    
    $result2 = $conn->query($sql2);

    if($result2->num_rows > 0){
        while($row2 = $result2->fetch_assoc()){
            
            ?>
                <img src="<?php echo $row2['path']?>" alt="User Profile Pic" class="img-thumbnail"/>
            <?php
        }
    }
        ?>
            
        </div>
        <div class="col-md-10">

        <table class="table table-bordered">

<?php
    
    $sql = "SELECT * FROM employee_info_tbl where username = '$AUTH_USER'";    
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>Email Address</td><td>".$row["email"]."</td></tr>";
            echo "<tr><td>Mobile Number</td><td>".$row["mobile"]."</td></tr>";
            echo "<tr><td>Gender</td><td>".$row["gender"]."</td></tr>";
        }
    }
?>
</table>
        </div>
    </div>

   
</div>
<?php include("footer.php");?>

  