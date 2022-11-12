<!DOCTYPE html>
<html lang="en">

<head>
    
</head>
<body>
<form method="POST" name="sf"  >
            <tr>
                <td class="lead">Branch Detail</td>
            </tr>
            <tr >
                <br>
                <td >
  
                    <input type="text"for="bid" name="bid" class="form-control" placeholder="Branch Id" id="bid" required>
                </td>

                <td >
  
                    <input type="text"for="bname" name="bname" class="form-control" placeholder="Branch Name" id="bname" required><br>
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
        $bid = $_POST['bid'];
        $bname = $_POST['bname'];
        $status = $_POST['status'];

        if(!empty($bid) && !empty($bname) && !empty($status))
        {
            
            $query="insert into branch (bid,bname,status) values ('$bid','$bname','$status')";
            mysqli_query($con, $query);
            

                    }
                }
        

           
        echo "Branch id"    . $bid . "<br>";
        echo " Branch Name" . $bname . "<br>";
        echo "Status". $status . "<br>";


    


?>
