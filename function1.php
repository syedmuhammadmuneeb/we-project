<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Project";

$conn= mysqli_connect($servername,$username,$password,$dbname);
 if($conn){
   echo "";
 }
 else {
   die("failed becuase".mysqli_connect_error());
 }
 ?>
