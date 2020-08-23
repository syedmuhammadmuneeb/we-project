<?php
require_once('function1.php');
session_start();
header('location:userlogin.php');

$nm = $_POST['name'];
$user = $_POST['username'];
$pass = $_POST['password'];
$ct = $_POST['contact'];
$ad = $_POST['address'];
$ps = $_POST['gender'];
// $filename = $_FILES["upload"]["name"];
//   $tempname = $_FILES["upload"]["tmp_name"];
//   $folder = "pics/".$filename;
//   move_uploaded_file($tempname,$folder);
$s = "SELECT * FROM temp WHERE username = '$user'";
$result = mysqli_query($conn,$s);
$nums = mysqli_num_rows($result);
if ($nums == 1) {
   echo "<script>Username already exist</script>";
}
else {
  $reg = "INSERT INTO temp(name,username,password,contact,address,gender) VALUES('$nm','$user','$pass','$ct','$ad','$ps')";
  mysqli_query($conn,$reg);

  echo "<script> alert('Request on pending') </script>";
}


 ?>
