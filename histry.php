<html>
<head>
<style>
body{

  
}
th {
  background-color: #4CAF50;
  color: white;
  border-bottom: 1px solid black;
}
tr,td
{
border-bottom: 1px solid black;
}

table
{
      align:center;
       border: 1px solid black;
          


 
}
tr:hover {background-color: #f5f5f5;}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>

</head>
<?php


$db=mysqli_connect("localhost","root","1234","credit_user_databse");
if(!$db)
{
    die("Conection failed");
}
else
{
    $sql = "SELECT * FROM his;";
    if($result = mysqli_query($db, $sql)){
        ?>
          <body>
          
          <center><h2></>Histry</h2></center>
          
        <table border="0" align="center">
        <tr>
        <th>Sr.</th>
        <th>Sender Name</th>
        <th>Rec Name</th>
        <th>Amo</th>
        <th>Date</th>
        </tr>
        <?php 
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo '<td>' . $row['sr'] . "</a></td>";
            echo "<td>" . $row['se_name'] . "</td>";
            echo "<td>" . $row['re_name'] . "</td>";
            echo "<td>" . $row['amo'] . "</td>";
            echo "<td>" . $row['_date'] . "</td>";
            echo "</tr>";
          
            
        }
       
        
        echo "</table>";
        echo "<br>";
        echo "<br>";
        // Free result set
        }
}
?>

</table></body></html>