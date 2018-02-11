<?php
define('DB_NAME', 'itglobal');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);


    $sql = "select * from deposits";
    $response = array();
    $result= mysqli_query($con,$sql);
	


    while($row = mysqli_fetch_array($result)){
              array_push($response,
                     array('user_id'=>$row['user_id'],
                         'amount'=>$row['amount'],
                         'currency'=>$row['currency'],
                         'date'=>$row['date'],
                         'added_on'=>$row['added_on'],
                         'added_by'=>$row['added_by']
                       ));
        }
        
    echo json_encode($response);

 mysqli_close($con);
?>

