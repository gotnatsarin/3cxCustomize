<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
include_once('../connect.php');
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$role = trim($_POST['role']);
$status = trim($_POST['status']);
$email = trim($_POST['email']);
$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);

$salt = '3CX_DEV_TEAM';
$hash_password = hash_hmac('sha256', $password, $salt);
$lastID = pg_fetch_assoc(pg_query($conn,"SELECT user_id FROM public.access_user ORDER BY user_id DESC LIMIT 1"));
$lastID = $lastID['user_id']+1;

if(pg_query($conn,"INSERT INTO public.access_user(
    user_id,
    username,
    password,
    role,
    status,
    firstname,
    lastname,
    email)
    VALUES ($lastID,
    '$username',
    '$hash_password',
    '$role',
    'active',
    '$firstname',
    '$lastname',
    '$lastname')")){

  pg_close($conn);
  header("Location:../user.php");

}


}else{
  http_response_code(400);
}
?>