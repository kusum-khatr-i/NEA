<?php
    include("bheader.php");
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
            width: 75px;
            color:black;
        }
        
}
</style>
<body>
<div class="container">
    <div class='row'>
        <div class="col-md-10">
<table   >
            <tr>
                <th colspan="6"  align="center"><b> <h3><center>Bill paid Detail </center></h3></b></th>
            </tr>
            <br>
            <tr>
         
                <th><div class='d1'><center>Bill id</center></div></th>
                <th><div class='d1'><center>Month</center></div></th>
                <th><div class='d1'><center>Year</center></div></th>
                <th><div class='d1'><center>Current Reading</center></div></th>
                <th><div class='d1'><center>previous Reading</center></div></th>
                <th><div class='d1'><center>Unit Consumed</center></div></th>
                <th><div class='d1'><center>Rate</center></div></th>
                <th><div class='d1'><center>Sub Total</center></div></th>
                <th><div class='d1'><center>Previous Due</center></div></th>
                <th><div class='d1'><center>Total</center></div></th>
                <th><div class='d1'><center>Ispaid</center></div></th>
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

  $sql = "select bid,bmon,byear,cr,pr,@uc := cr-pr AS 'uc',rate, @st := @uc*rate AS 'st',pd,@st+pd AS 'total',ipp from cusbill c where ipp=1 ";
  $result=mysqli_query($con, $sql) ;

  echo "<h1>Customers Details:</h1>\n";
  while($row=mysqli_fetch_assoc($result))
  {

    echo"<table>
    <tr>
            <td> <div class='d1'>$row[bid] </div></td>
            <td> <div class='d1'>$row[bmon] </div></td>
            <td> <div class='d1'>$row[byear] </div></td>
            <td> <div class='d1'>$row[cr] </div></td>
            <td> <div class='d1'>$row[pr] </div></td>
            <td> <div class='d1'>$row[uc] </div></td>
            <td> <div class='d1'>$row[rate] </div></td>
            <td> <div class='d1'>$row[st] </div></td>
            <td> <div class='d1'>$row[pd] </div></td>
            <td> <div class='d1'>$row[total] </div></td>
            <td> <div class='d1'>$row[ipp] </div></td>
        
        </tr>
    </table>";
  
}
?>
</table>

</body>
</html>