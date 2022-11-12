<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
    <h4>View Customer</h4>
<table border="1">
            <tr>
                <th colspan="6"  align="center"><b>Payment  View</b></th>
            </tr>
            <br>
            
        
           
            <tr>
         
                <th><center>Bill Id</center></th>
                <th><center>Bill Amount</center></th>
                <th><center>Discount</center></th>
                <th><center>Penalty</center></th>
                <th><center>Amount</center></th>
                <th><center>Payment Method</center></th>
        
            </tr>
 <?php
         
     include("config.php");
     
            $query="select bid,billa,dis,pen,paya,pn from paymeent p, paym k where p.payid = k.pid ";
            
           $result= mysqli_query($con, $query);
         
                while($rows=$result->fetch_assoc())
                {
            ?>
           <tr>
            <td><?php echo $rows['bid'];?></td>
            <td><?php echo $rows['billa'];?></td>
            <td><?php echo $rows['dis'];?></td>
            <td><?php echo $rows['pen'];?></td>
            <td><?php echo $rows['paya'];?></td>
            <td><?php echo $rows['pn'];?></td>
        </tr>
            <?php
                }
            ?>
        
        
        </table>
</body>
</html>


