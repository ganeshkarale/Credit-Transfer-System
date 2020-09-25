<html>
<head>
<style>
body{

       background-color:rgb(137,245,240);
  
}
th {
  background-color: #4CAF50;
  color: white;
 height:40px;
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
       height:50%;
        width:35%;     


 
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
            echo "<td>" . $row['se_id'] . "</td>";
            echo "<td>" . $row['re_id'] . "</td>";
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

</table>
<br><center><button onclick='location.href="index.php"' style="background-color: green;border: 0.5px solid black;color: white;padding: 15px 30px;font-size: 13px;box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);">Back</button>
</center>

</body></html>