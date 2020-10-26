<?php
    include("header.php");
    include("navbar.php");
    $pincode = $_GET['pincode'];
    $url = "https://api.postalpincode.in/pincode/".$pincode;
    $json=file_get_contents($url);    
    $data =  json_decode($json,true);
?>
<div class="container">
<table class="table table-bordered">
<?php
    foreach ($data as $key => $value) {
        $postoffice = $value["PostOffice"];        
        foreach ($postoffice as $key1 => $value1) {
            ?>
            <tr>
                <td><?php echo $value1["Name"];?></td>
                <td><?php echo $value1["Block"];?></td>
                <td><?php echo $value1["District"];?></td>
            </tr>
        <?php
        }
     }?>
</table>
</div>
<?php include("footer.php")?>