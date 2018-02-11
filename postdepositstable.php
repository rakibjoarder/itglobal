<?php
define('DB_NAME', 'itglobal');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

if($con)
{
    $user_id=$_POST['user_id'];
    $amount=$_POST['amount'];
    $currency=$_POST['currency'];
    $date=$_POST['date'];
    $added_on=$_POST['added_on'];
    $added_by=$_POST['added_by'];
 
    $sql="insert into deposits(user_id,amount,currency,date,added_on,added_by) values('$user_id','$amount','$currency','$date','$added_on','$added_by');";
   
    if(mysqli_query($con, $sql))
    {
        echo json_encode(array('response'=>"Amount Added Successfully."));
    }
 else {
         echo json_encode(array('response'=>"Amount Add Failed."));
    }    
}
 
mysqli_close($con);
 
?>

