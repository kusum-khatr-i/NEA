
<!DOCTYPE html>
<html lang="en">

<head>
    
</head>
<body>
<form method="POST" name="sf"  >
            <tr>
                <td class="lead">Payment Detail</td>
            </tr>
            <tr >
                <br>
                <td >
  
                    <input type="text"for="pid" name="pid" class="form-control" placeholder="Payment Id" id="pid" required>
                </td>

                <td >
  
                    <input type="text"for="pn" name="pn" class="form-control" placeholder="Payment Method" id="pn" required><br>
                </td>
            </tr>
            <br>

            <tr >
                <td >
  
                    <input type="text"for="status" name="status" class="form-control" placeholder="Status" id="status" required><br>
                </td>
            </tr>
            <br>   
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" id="btn" >Sign Up</button>
                </td>
            </tr>
            </form>
</body>
</html>
<?php
session_start();
     include("config.php");
     
    
    

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $pid = $_POST['pid'];
        $pn = $_POST['pn'];
        $status = $_POST['status'];

        if(!empty($pid) && !empty($pn) && !empty($status))
        {
            
            $query="insert into paym (pid,pn,status) values ('$pid','$pn','$status')";
            mysqli_query($con, $query);
            

                    }
                }
        

           
        echo "Payment id"    . $pid . "<br>";
        echo "Payment Method" . $pn . "<br>";
        echo "Status". $status . "<br>";


    


?>
