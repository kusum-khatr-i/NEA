<?php
include("detailh.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
</head>
<br>
<body>
    <div class="container">
    <div class='row'>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
        <div class="card text-center">
  <div class="card-header">
   
   payment Entry
  </div>
  <div class="card-body">
<form method="POST" name="sf"  >
          
            <tr >
                <br>
                <td >
  
                    <input type="Number"for="payid" name="payid" class="form-control" placeholder="PAY Id" id="payidid" required>
                </td>
                <br>
                <td >
  
                    <input type="text"for="bid" name="bid" class="form-control" placeholder="Branch id" id="bid" required><br>
                </td>
                <td >
  
                    <input type="text"for="billa" name="billa" class="form-control" placeholder="BILL AMOUNT" id="billa" required><br>
                </td>
                    <tr >
                <td >
  
                    <input type="text"for="dis" name="dis" class="form-control" placeholder="DISCOUNT" id="dis" ><br>
                </td>
                  <td >
  
                    <input type="number"for="pen" name="pen" class="form-control" placeholder="PENALTY" id="pen" ><br>
                </td>
                <td >
  
                    <input type="text"for="paya" name="paya" class="form-control" placeholder="PAYMENT AMOUNT" id="paya" required><br>
                </td>
                <td >
  
                    <input type="text"for="pid" name="pid" class="form-control" placeholder="PID" id="pid" required><br>
                </td>
            </tr>

            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" id="btn" >Sign Up</button>
                </td>
            </tr>
    </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

<?php
//session_start();
     include("config.php");
     
    
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $payid = $_POST['payid'];
        $bid = $_POST['bid'];
        $billa = $_POST['billa'];
        $dis = $_POST['dis'];
        $pen = $_POST['pen'];
        $paya = $_POST['paya'];
        $pid = $_POST['pid'];
       

        if(!empty($payid)&& !empty($bid)&& !empty($billa)&& !empty($paya)&& !empty($pid))
        {
            
            $query="insert into paymeent (payid,bid,billa,dis,pen,paya,pid) values ('$payid','$bid','$billa','$dis','$pen','$paya','$pid')";
            mysqli_query($con, $query);
            

                    }
                }
        ?>


           

    
