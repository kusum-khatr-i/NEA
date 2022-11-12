
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
   
   Bill Entry
  </div>
  <div class="card-body">
<form method="POST" name="sf"  >
          
            <tr >
                <br>
                <td >
  
                    <input type="Number"for="bid" name="bid" class="form-control" placeholder="Branch Id" id="bid" required>
                </td>
                <br>

                <td >
  
                    <input type="Number"for="bmon" name="bmon" class="form-control" placeholder="Bill Month" id="bmon" required>
                </td>
            </tr>
            <br>

            <tr >
                <td >
  
                    <input type="Number"for="byear" name="byear" class="form-control" placeholder="Bill Year" id="byear" required>
                </td>
            </tr>
            <br>
          
            <tr>
                <td><input type="text"for="cr" name="cr"class="form-control" placeholder="Current Reading" id="cr" required></td>
<br>
                <td><input type="text"for="pr" name="pr" class="form-control" placeholder="Previous Reading" id="pr"required></td>
            <br>
            </tr>
                <tr >
                <td >
  
                    <input type="Number"for="uc" name="uc" class="form-control" placeholder="Unit Consumed" id="uc" required><br>
                </td>
            </tr>
            <tr >
                <td >
  
                    <input type="Number"for="rate" name="rate" class="form-control" placeholder="Rate" id="rate" required><br>
                </td>
            </tr>
            <tr >
                <td >
  
                    <input type="Number"for="st" name="st" class="form-control" placeholder="Sub Total" id="st" required><br>
                </td>
            </tr>
            <tr >
                <td >
  
                    <input type="Number"for="pd" name="pd" class="form-control" placeholder="Pervious Due" id="pd" required><br>
                </td>
            </tr>
            <tr >
                <td >
  
                    <input type="Number"for="total" name="total" class="form-control" placeholder="Total" id="total" required><br>
                </td>
            </tr>
            <tr >
                <td >
  
                    <input type="Number"for="ipp" name="ipp" class="form-control" placeholder="Is paid" id="ipp" required><br>
                </td>
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
        $bid = $_POST['bid'];
        $bmon = $_POST['bmon'];
        $byear = $_POST['byear'];
        $cr = $_POST['cr'];
        $pr = $_POST['pr'];
        $uc = $_POST['uc'];
        $rate = $_POST['rate'];
        $st = $_POST['st'];
        $pd = $_POST['pd'];
        $total = $_POST['total'];
        $ipp = $_POST['ipp'];

        if(!empty($bid)&& !empty($bmon) && !empty($byear) && !empty($cr) && !empty($pr) && !empty($uc)&& !empty($rate)&& !empty($st)&& !empty($pd)&& !empty($total)&& !empty($ipp))
        {
            
            $query="insert into cusbill (bid,bmon,byear,cr,pr,cr-pr=uc,rate,st,pd,total,ipp) values ('$bid','$bmon','$byear','$cr','$pr','$uc','$rate','$st','$pd','$total','$ipp')";
            mysqli_query($con, $query);
            

                    }
                }
        ?>


           

    
