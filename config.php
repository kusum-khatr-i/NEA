<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gov";
if(!$con = mysqli_connect($servername, $username, $password, $dbname))

{
   die("Connection failed: ");

}

