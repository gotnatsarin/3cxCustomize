<?php 
include('connect.php');
session_start();
$username = pg_escape_string($conn,$_POST['username']);
$password = pg_escape_string($conn,$_POST['password']);
$rememberme = $_POST['rememberMe'];
$salt = 'adsldkklsdhf';

$hash_password = hash_hmac('sha256', $password, $salt);

$result = pg_query($conn,"SELECT * FROM access_user WHERE username = '$username' AND password = '$password'");
$row = pg_fetch_assoc($result);

if(pg_num_rows($result) != 0){
  $_SESSION['user_id'] = $row['user_id'];
  if($row['role']== "admin"){
    $_SESSION['is_admin'] = 1;
  }
  
  header("Location:callsatisfaction.php");
  // echo $row['username'].$row['password'].$row['role'].$row['status'];
}else{
  echo "Can't find";
}

?>