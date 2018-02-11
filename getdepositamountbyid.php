<?php
define('DB_NAME', 'itglobal');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

    $id = $_GET["user_id"];
    $sql = "select SUM(amount) as total_amount from deposits where user_id='$id'";
    $response = array();
    $result= mysqli_query($con,$sql);
	


    while($row = mysqli_fetch_array($result)){
             $response=$row;
        }
        
    echo json_encode($response);

 mysqli_close($con);
?>

