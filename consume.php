<?php
    include("header.php");
    include("navbar.php");
    $url = "http://localhost/Employeemgt/api.php";
    $json=file_get_contents($url);
    $data =  json_decode($json,true);
?>
<div class="container">
<table class="table table-bordered">
<?php
    foreach ($data as $key => $value) {
       ?>
        <tr>
        <td><?php echo $value["email"]?></td>
        <td><?php echo $value["email"]?></td>
        <td><?php echo $value["email"]?></td>
    </tr>       
    <?php }?>
</table>
</div>
<?php include("footer.php")?>