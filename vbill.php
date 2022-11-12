
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
                <th colspan="10"  align="center"><b> <h3><center>Bill Detail </center></h3></b></th>
            </tr>
            <br>
            
        
           
            <tr>
         
                <th><center>Bill id</center></th>
                <th><center>Month</center></th>
                <th><center>Year</center></th>
                <th><center>Current Reading</center></th>
                <th><center>previous Reading</center></th>
                <th><center>Unit Consumed</center></th>
                <th><center>Rate</center></th>
                <th><center>Sub Total</center></th>
                <th><center>Previous Due</center></th>
                <th><center>Total</center></th>
        
            </tr>
                <?php 
         
     include("config.php");
     
            
            $query="select bid,bmon,byear,cr,pr,@uc := cr-pr AS 'uc',rate, @st := @uc*rate AS 'st',pd,@st+pd AS 'total' from cusbill";
            
           $result= mysqli_query($con, $query);
         
                while($rows=$result->fetch_assoc())
                {
            ?>
           <tr>
            <td><?php echo $rows['bid'];?></td>
            <td><?php echo $rows['bmon'];?></td>
            <td><?php echo $rows['byear'];?></td>
            <td><?php echo $rows['cr'];?></td>
            <td><?php echo $rows['pr'];?></td>
            <td><?php echo $rows['uc'];?></td>
            <td><?php echo $rows['rate'];?></td>
            <td><?php echo $rows['st'];?></td>
            <td><?php echo $rows['pd'];?></td>
            <td><?php echo $rows['total'];?></td>
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


