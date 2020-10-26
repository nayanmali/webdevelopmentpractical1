<?php
    header("Content-Type:application/json");
    $apikey = $_GET['key'];
    if($apikey == "123456"){
    include('dao.php');
    $response = array();

    $sql = "select * from employee_info_tbl where username = '".$_GET['username']."'";
    
    $result = mysqli_query($conn,$sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]["id"]= $row["username"];
            $response[$i]["email"]= $row["email"];
            
            $response[$i]["gender"]= $row["gender"];  
            $i++;       
        }
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}else{
    echo "Please Provide API Key";
}
?>