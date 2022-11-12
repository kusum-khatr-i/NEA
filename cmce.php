
<!DOCTYPE html>
<html lang="en" style="background-color: whitesmoke;">

<head>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <h1 style="padding: 10px;  "><center>Nepal Eletricity</center></h1>
      <hr>
    <br style="background-color: blue">
  <h5 style=" padding-bottom: 10px;"><center>Bill payment system</center></h5>
  <a href="home.php" class="btn btn-primary"><h6> >>Home</h6></a>
    <a href="cusmod.php" class="btn btn-primary">>><h7>Customer Module</h7></a>

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
   
   Customer Entry
  </div>
  <div class="card-body">
    <form method="POST" name="sf" >
            
                <br>
                <td >

                    <input type="text"for="cid" name="cid" class="form-control" placeholder="Customer id" id="cid" required>
                </td>
<br>
                <td >
  
                    <input type="text"for="sc" name="sc" class="form-control" placeholder="Serial Number" id="sc" required>
                </td>
           
            <br>

      
                <td >
  
                    <input type="text"for="name" name="name" class="form-control" placeholder="First Name" id="name" required>
                </td>
            
            <br>
          
            
                <td><input type="text"for="address" name="address"class="form-control" placeholder="address" id="address" required></td>
<br>
                <td><input type="tel"for="phonenumber" name="phonenumber" class="form-control"(+977) placeholder="Mobile Number" id="phonenumber"required></td>
            <br>
            <tr>
                
                <tr>
               
                <td>
                    <select class="form-select " id="bid" name="bid" required>
                        <option selected>Branch Id</option>
                        <option value="1">lanankhel</option>
                        <option value="2">lalitpur</option>
                        <option value="3">Bhaktapur</option>
                        <option value="4">bharatpur</option>
                        <option value="5">shankhdevi</option>
                    </select>
                </td>
                
            </tr>
                <br>
                <br>
                <tr>
                 
                <td colspan="2">
                    <select class="form-select " id="did" name ="did"required>
                        <option selected>Demand type</option>
                        <option value="1">5 </option>
                        <option value="2">15</option>
                        <option value="3">30</option>
                    </select>
                </td>
                <br>
            </tr>
            </tr>
            
            <tr>
                 <td >
  
                    <input type="text"for="status"id="status" name="status" name="fname" class="form-control" placeholder="Status" id="status" required>
                </td>
                
            </tr>
            <br>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn btn-primary" id="btn" >Sign Up</button>
                </td>
            </tr>
            <br>
           
            
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
        $cid = $_POST['cid'];
        $sc = $_POST['sc'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phonenumber = $_POST['phonenumber'];
        $bid = $_POST['bid'];
        $did = $_POST['did'];
        $status = $_POST['status'];

        if(!empty($cid)&& !empty($sc) && !empty($name) && !empty($address) && !empty($phonenumber) && !empty($bid)&& !empty($status))
        {
            
            $query="insert into customers (cid,sc,name,address,phonenumber,bid,did,status) values ('$cid','$sc','$name','$address','$phonenumber','$bid','$did','$status')";
            mysqli_query($con, $query);
            

                    }
                }
        

           
       /* echo "customer id"    . $cid . "<br>";
        echo "Serial number" . $sc . "<br>";
        echo " customer Name" . $name . "<br>";
        echo "Adddress".  $address . "<br>";
        echo "phone Number". $phonenumber . "<br>";
        echo "Branch id" . $bid . "<br>";
        echo "Demand id". $did . "<br>";
        echo "Status". $status . "<br>";*/


    


?>
