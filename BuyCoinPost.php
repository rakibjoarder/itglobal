<?php
define('DB_NAME', 'itglobal');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME);

if($con)
{   
    
    $userid=$_POST['user_id'];
    $amount=$_POST['amount'];
    $date=$_POST['date'];
    $added_on=$_POST['added_on'];
    $added_by=$_POST['added_by'];
    $coin_name=$_POST['coin_name'];
    $coin_symbol=$_POST['coin_symbol'];
    $unit=$_POST['unit'];
    $total=$_POST['total'];

    $sql="insert into withdraw(user_id,amount,date,added_on,added_by,coin_name,coin_symbol,unit,total) values('$userid','$amount','$date','$added_on','$added_by','$coin_name','$coin_symbol','$unit','$total');";
   
    if(mysqli_query($con, $sql))
    {
        echo json_encode(array('response'=>"Coin bought Successfully."));
    }
 else {
         echo json_encode(array('response'=>"Insufficient Balance."));
    }    
}
 
mysqli_close($con);
 
?>

