<?php
include("vcdetailhead.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
 

    <div class="container">
    <div class='row'>
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
<table  border="1" style="background-color: white;" >
            <tr>
                <th colspan="6"  align="center"><b> <h3><center>Customer Detail </center></h3></b></th>
            </tr>
            <br>
            
        
           
            <tr>
         
                <th><center>customer id</center></th>
                <th><center>S.N</center></th>
                <th><center>Customer Name</center></th>
                <th><center>Phone Number</center></th>
                <th><center>Branch Name</center></th>
                <th><center>Demand Type</center></th>
        
            </tr>
                <?php
         
     include("config.php");
     
            
            $query="select cid,sc,name,phonenumber,bname,dname from customers c, branch b, detype d where c.bid = b.bid and c.bid=d.did";
            
           $result= mysqli_query($con, $query);
         
                while($rows=$result->fetch_assoc())
                {
            ?>
           <tr>
            <td><?php echo $rows['cid'];?></td>
            <td><?php echo $rows['sc'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['phonenumber'];?></td>
            <td><?php echo $rows['bname'];?></td>
            <td><?php echo $rows['dname'];?></td>
        </tr>
            <?php
                }
            ?>
        
        
        </table>
    </div>
</body>
</body>
</html>