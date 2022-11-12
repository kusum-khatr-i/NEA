<?php
include("vcdetailhead.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table, th, tr, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: left;
        }
      .d1{
            width:110px;
            color:black;
        }
        .d3{
            width:200px;
            color:black;
        }
        
}
</style>
<body>
<div class="container">
    <div class='row'>
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
<table   >
            <tr>
                <th colspan="6"  align="center"><b> <h3><center>Customer Detail By Id</center></h3></b></th>
            </tr>
            <br>
            
        
           
            <tr>
         
                <th><div class='d1'><center>customer id</center></div></th>
                <th><div class='d1'><center>S.N</center></div></th>
                <th><div class='d3'><center>Customer Name</center></div></th>
                <th><div class='d1'><center>Phone Number</center></div></th>
                <th><div class='d1'><center>Demand Type</center></div></th>
                <th><div class='d1'>Action</div></th>
        
            </tr>


<?php

$server="localhost";
$user="root";
$password="";
$db="gov"; 
$con=mysqli_connect($server,$user,$password,$db);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
   if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $cus_id=$_POST["cid"];

  $sql = "SELECT cid,sc,name,phonenumber,dname from customers c,detype d where c.cid=$cus_id and c.bid=d.did ";
  $result=mysqli_query($con, $sql) ;

  echo "<h1>Customers Details:</h1>\n";
  while($row=mysqli_fetch_assoc($result))
  {

    echo"<table>
    <tr>
    <td> <div class='d1'>$row[cid] </div></td>
    <td><div class='d1'>$row[sc]</div></td>
    <td><div class='d3'>$row[name]</div></td>
    <td><div class='d1' >$row[phonenumber]</div></td>
    <td><div class='d1' >$row[dname]</div></td>
    <td><div class='d1'><a href='vbill.php'>View Bill</a></div></td>
    </tr>
    </table>";
  
}
}
?>
</table>

</body>
</html>