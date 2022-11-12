<?php
include("vcdetailhead.php");
?>
<br>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

  <body style="background-color: whitesmoke;">
    <div class="container">
    <div class='row'>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
  <form class="bg-light" action="cbv.php" method="POST">
  <div class="mx-5 my-2">
    <label for="did" class="form-label">Demand Type</label>
    <select class="form-control" name="bid">
        <option>Choose demand Type</option>
        <option value="1">5A</option>
                        <option value="2">15A</option>
                        <option value="3">30A</option>
                        
                        <option value="4">60A</option>

    </select>
  </div>
  <button type="submit" class="btn btn-primary mx-5 my-2">Submit</button>
</form>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>