<!DOCTYPE html>
<html lang="en">

<head>
    
</head>
<body>
<form method="POST" name="sf"  >
            <tr>
                <td class="lead">Demand Detail</td>
            </tr>
            <tr >
                <br>
                <td >
  
                    <input type="text"for="did" name="did" class="form-control" placeholder="Demand Id" id="did" required>
                </td>

                <td >
  
                    <input type="text"for="dname" name="dname" class="form-control" placeholder="Demand Name" id="dname" required><br>
                </td>
            </tr>
            <br>

            <tr >
                <td >
  
                    <input type="text"for="dstatus" name="dstatus" class="form-control" placeholder="Status" id="dstatus" required><br>
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
        $did = $_POST['did'];
        $dname = $_POST['dname'];
        $dstatus = $_POST['dstatus'];

        if(!empty($did) && !empty($dname) && !empty($dstatus))
        {
            
            $query="insert into detype (did,dname,dstatus) values ('$did','$dname','$dstatus')";
            mysqli_query($con, $query);
            

                    }
                }
        

           
        echo "Demand id"    . $did . "<br>";
        echo " Demand Name" . $dname . "<br>";
        echo "Status". $dstatus . "<br>";


    


?>
