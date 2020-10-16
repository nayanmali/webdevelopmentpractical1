<?php
    if(isset($_POST['upload'])){
        $file_name = $_FILES['profilepic']['name'];
        $file_type = $_FILES['profilepic']['type'];
        $file_tmp_name = $_FILES['profilepic']['tmp_name'];
        $file_size = $_FILES['profilepic']['size'];
        $file_store = "upload/".$file_name;

        if(move_uploaded_file($file_tmp_name,$file_store)){
            echo "File Uploaded..";
        }

    }
?>

<?php include("session_mgt_bf_login.php");?>
<?php include("header.php");?>
<?php include("navbar.php");?>
<div class="container">
    <form action="?" method="post" enctype="multipart/form-data">
        <table class="table borderless">
            <tr>
                <td><input type="file" name="profilepic"/></td>
                <td><input type="submit" name="upload"></td>
            </tr>
        </table>
    </form>
</div>
<?php include("footer.php");?>