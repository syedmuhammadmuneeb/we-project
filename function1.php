

<?php
$servername = "php-database.mysql.database.azure.com";
$username = "muneeb@php-database";
$password = "Admin123";
$dbname = "project";

$conn=mysqli_init(); 
//mysqli_ssl_set($con, NULL, NULL, "cacert.pem", NULL, NULL);
//mysqli_ssl_set($con, "key.pem", "cert.pem", "cacert.pem", NULL, NULL);
mysqli_real_connect($conn, "php-database.mysql.database.azure.com", "muneeb@php-database","Admin123","project", 3306);

if($conn){
	echo "Hello";
}
else{
	die("failed because".mysqli_connect_error());
}

// $conn= mysqli_connect($servername,$username,$password,$dbname);
// mysqli_ssl_set($conn, "key.pem", "cert.pem", "cacert.pem", NULL, NULL);
//  if($conn){
//    echo "";
//  }
//  else {
//    die("failed becuase".mysqli_connect_error());
//  }
 ?>
