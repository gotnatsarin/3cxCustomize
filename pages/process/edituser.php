<?php 
require('../connect.php');
$user_id = pg_escape_string($conn,$_POST['user_id']);
$firstname = pg_escape_string($conn,$_POST['firstname']);
$lastname = pg_escape_string($conn,$_POST['lastname']);
$email = pg_escape_string($conn,$_POST['email']);
$role = pg_escape_string($conn,$_POST['role']);

if(pg_query($conn,"UPDATE public.access_user SET  firstname = '$firstname',lastname = '$lastname',email = '$email',role = '$role' WHERE user_id = '$user_id'")){
  header("Location:../user.php");
}else{
  echo "error";
}

?>