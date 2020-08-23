<?php
require_once('function1.php');
session_start();


$user = $_POST['username'];
$pass = $_POST['password'];


$s = "SELECT * FROM users WHERE username = '$user' && pass = '$pass'";
$result = mysqli_query($conn,$s);
$nums = mysqli_fetch_array($result);

if(is_array($nums)){
  //$_SESSION["name"] = $nums['name'];
  //$id = $nums['user_id'];
  //$_SESSION["id"] = $nums['user_id'];
  $_SESSION["username"] = $nums['username'];
  // $query = "INSERT INTO track(username,login_date,login_time)
  // VALUES ('$_SESSION[username]')";
  $result1 = mysqli_query($conn);
  header('location:index.php');

}
else {
  header('location:userlogin.php');


}

?>
