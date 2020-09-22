<?php 
include 'databaseconn.php';

?>


<html>
<head>
<title>
Credit transfer system
</title>
<style>



body{

     // background-color:#FF007F;
}
th {
  background-color: #4CAF50;
  color: white;
  border-bottom: 1px solid black;
}
tr,td
{
border-right: 1px solid black;
cursor:pointer;
}

table
{
      align:center;
       border: 1px solid black;
          


 
}
tr:hover {background-color: #f6f6f6;}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<?php

    $sql = "SELECT * FROM user";
    $result = mysqli_query($db, $sql);
          ?>
          <body>
          
          <center><h3></>Select User By Id</h3></center>
          
        <table border="0" align="center" class="tablec" id="myTable">
        <thead>
        <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>current_credit</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo '<td>' . $row['id'] . "</a></td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['Credit'] . "</td>";
            echo "</tr>";
          
            
        }
       
        echo"</tbody>";
        echo "</table>";
        echo "<br>";
        echo "<br>";
        
        
        // Free result set
        
    
    



?>
<script>

highlight_row();
function highlight_row() {
    var table = document.getElementById('myTable');
    var cells = table.getElementsByTagName('td');

    for (var i = 0; i < cells.length; i++) {
        // Take each cell
        var cell = cells[i];
        // do something on onclick event for cell
        cell.onclick = function () {
            // Get the row id where the cell exists
            var rowId = this.parentNode.rowIndex;

            var rowsNotSelected = table.getElementsByTagName('tr');
            for (var row = 0; row < rowsNotSelected.length; row++) {
                rowsNotSelected[row].style.backgroundColor = "";
                rowsNotSelected[row].classList.remove('selected');
            }
            var rowSelected = table.getElementsByTagName('tr')[rowId];
            rowSelected.style.backgroundColor = "yellow";
            rowSelected.className += " selected";

            msg = 'The ID of the User is: ' + rowSelected.cells[0].innerHTML;
            msg += '\nSelected user is: ' + this.innerHTML;
            var c=confirm(msg);
            if(c)
            {
            var userid = rowSelected.cells[0].innerHTML;
            sessionStorage.setItem("Userid", userid);
            var userid = rowSelected.cells[0].innerHTML;
            sessionStorage.setItem("Userid", userid);
            
            var credit = rowSelected.cells[3].innerHTML;
            sessionStorage.setItem("Credit", credit);
            
            window.location.href("tranfer.php");
            }
            
        }
    }

}
</script>
   
</body>
</html>