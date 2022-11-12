<?php
include("detailh.php");
?>
<!DOCTYPE html>
<html lang="en">


<body>
    <div class="container">
    <div class='row'>
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
<table border="1">
            <tr>
                <th colspan="7"  align="center"><b> <h3><center>Payment Detail </center></h3></b></th>
            </tr>
            <br>
            
        
           
            <tr>
         
                <th><center>pay id</center></th>
                <th><center>branch id</center></th>
                <th><center>Bill amount</center></th>
                <th><center>discount</center></th>
                <th><center>Peanlty</center></th>
                <th><center>pay amount</center></th>
                <th><center>payment method</center></th>
                
        
            </tr>
                <?php
         
     include("config.php");
     
            
            $query="select payid,bid,billa,dis,pen,paya,pn from paymeent p, paym m where p.pid=m.pid";
            
           $result= mysqli_query($con, $query);
         
                while($rows=$result->fetch_assoc())
                {
            ?>
           <tr>
            <td><?php echo $rows['payid'];?></td>
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
    </div>
</div>
</div>

</body>
</html>


