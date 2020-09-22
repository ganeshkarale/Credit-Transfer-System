<html>
<head>




<style>


body
{


  // background-color:#FF007F;
}

 button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
    
  font-size: 13px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  align:right;
  
}

input
{
 
  border: none;
  color: black;
  padding: 12px 20px;
  text-align:left;
  text-decoration: none;
  //background-color:green;
  //color:black;
  font-size: 13px;
  box-shadow: 0 12px 13px 0 rgba(0,0,0,0.24), 0 15px 30px 0 rgba(0,0,0,0.19);
  align:right;
 
}

.submit{

 background-color: #4CAF50; /* Green */
  border: 0.5px solid black;
  color: white;
  padding: 15px 30px;
  text-align: left;
  text-decoration: none;
  
  font-size: 13px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  float:right;
  
}

</style>


</head>


<body>


<br><br>
<center>
<br>
<br>
<h2>Your Details Is</h2>
<br>
<form name="my_form" action="insert.php"  onsubmit="return validateForm()" method="post"> 
<b>
Id:     <input type="number"   id="ui" name="seid" readonly>
<br><br>
Credit: <input type="number"   id="cr" name="secr" readonly>
<br></b>
<br><br>
<h2>Transfer Credit To</h2>

<h4><b>User Id:</b><input type="number" id="id1" name="uid" required></h4>


<h4><b>Amount:</b><input type="number" id="am" name="amount" required></h4>
<br>







<br>

<input type="submit" value="Submit" style="background-color: green;border: 0.5px solid black;color: white;padding: 15px 30px;font-size: 13px;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);"> 



</form>

<script>

var userid = sessionStorage.getItem("Userid");
var credit = sessionStorage.getItem("Credit");

console.log(userid);
//document.write(userid+" "+credit);
   var usi=document.getElementById('ui').value=userid;
    var ucr=document.getElementById('cr').value=credit;
    var reg=/^[0-9]+$/;   
    function validateForm() {
  
  var x = document.forms["my_form"]["uid"].value;
  var y = document.forms["my_form"]["amount"].value;
  
         if(x==usi)
         {
         alert("Please Enter Other user Id");
         return false;
         }
  
          if (y>ucr) {
            alert("Please Check Your Credit");
            return false;
          } 
 
    if (!x.match(reg) || !y.match(reg)) {
            alert("Please Enter Number Only");
            return false;
          } 
     
   }
</script>
<center>

</body>
</html>