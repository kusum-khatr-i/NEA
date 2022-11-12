<?php
include("phead.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                <th colspan="6"  align="center"><b> <h3><center>Customer payment By id </center></h3></b></th>
            </tr>
            <br>
            
        
           
            <tr>
         
                <th><div class='d1'><center>Branch Id</center></div></th>
                <th><div class='d1'><center>Bill Amount</center></div></th>
                <th><div class='d3'><center>Discount</center></div></th>
                <th><div class='d1'><center>Penalty</center></div></th>
                <th><div class='d1'><center>Amount</center></div></th>
                <th><div class='d1'><center>Payment Method</center></div></th></th>
            
        
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
        $sql ="select payid,bid,billa,dis,pen,paya,pn from paymeent p, paym m where p.pid=m.pid and p.bid =$cus_id";

  $result=mysqli_query($con, $sql) ;

  echo "<h1>Customers Details:</h1>\n";
  while($row=mysqli_fetch_assoc($result))
  {

    echo"<table>
    <tr>
    <td> <div class='d1'>$row[bid] </div></td>
    <td><div class='d1'>$row[billa]</div></td>
    <td><div class='d3'>$row[dis]</div></td>
    <td><div class='d1' >$row[pen]</div></td>
    <td><div class='d1' >$row[paya]</div></td>
    <td><div class='d1' >$row[pn]</div></td>

    </tr>
    </table>";
  
}
}
?>
</table>

</body>
</html>