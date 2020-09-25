


<?php

include "databaseconn.php";


$se_id = $_REQUEST['seid'];
$se_cr=  $_REQUEST['secr'];
$re_id = $_REQUEST['uid'];
$cr_am= $_REQUEST['amount'];
$se_fcr=$se_cr-$cr_am;

// Attempt insert query execution
if($se_cr>$cr_am)
{
$sql = "INSERT INTO his VALUES (null,$se_id, $re_id, $cr_am,current_date())";
$sql1 = "update user set Credit=$se_fcr where id=$se_id";
$sql2="select Credit from user where id=$re_id";
$result=mysqli_query($db, $sql2);
$filed=mysqli_fetch_array($result);
$re_cr=$filed['Credit'];
$re_fcr=$re_cr+$cr_am;
$sql2 = "update user set Credit=$re_fcr where id=$re_id";

if(mysqli_query($db, $sql) && mysqli_query($db, $sql1)  && mysqli_query($db, $sql2)){
    echo "<script>alert('Records added successfully.');";
    echo 'window.location.replace("userlist.php");';
    echo "</script>";
       
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}



// Close connection
mysqli_close($db);
}
else 
{
    echo "<script>alert('Check your credit.');";
    echo 'window.location.replace("tranfer.php");';
    echo "</script>";
    
}
  




?>