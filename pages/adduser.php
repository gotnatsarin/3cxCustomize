<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
include_once('connect.php');
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$role = trim($_POST['role']);
$status = trim($_POST['status']);

$salt = 'adsldkklsdhf';
$hash_password = hash_hmac('sha256', $password, $salt);
$lastID = pg_fetch_assoc(pg_query($conn,"SELECT user_id FROM public.access_user ORDER BY user_id DESC LIMIT 1"));
$lastID = $lastID['user_id']+1;


$result = pg_query($conn,"INSERT INTO public.access_user(
	user_id, username, password, role, status)
	VALUES ($lastID, 'user3', 'password', 'user', 'active')");


pg_free_result($result);
pg_close($conn);
}else{
  http_response_code(400);
}
?>