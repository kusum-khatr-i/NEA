<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
    <h4>View Customer</h4>
<table border="1">
            <tr>
                <th colspan="6"  align="center"><b> customer View</b></th>
            </tr>
            <br>
            
        
           
            <tr>
         
                <th><center>customer id</center></th>
                <th><center>S.N</center></th>
                <th><center>Customer Name</center></th>
                <th><center>Phone Number</center></th>
                <th><center>Branch Name</center></th>
                <th><center>Branch Name</center></th>
                <th><center>Demand Type</center></th>
        
            </tr>
                <?php
         
     include("config.php");
     
            
            $query="select cid,sc,address,name,phonenumber,bname where address="dd";
            
           $result= mysqli_query($con, $query);
         
                while($rows=$result->fetch_assoc())
                {
            ?>
           <tr>
            <td><?php echo $rows['cid'];?></td>
            <td><?php echo $rows['sc'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['address'];?></td>
            <td><?php echo $rows['phonenumber'];?></td>
            <td><?php echo $rows['bname'];?></td>
            <td><?php echo $rows['dname'];?></td>
        </tr>
            <?php
                }
            ?>
        
        
        </table>
</body>
</html>


