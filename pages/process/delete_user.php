<?php
require('../connect.php');
$user_id = $_POST['id'];

pg_query($conn,"UPDATE public.access_user SET status = 'inactive' WHERE user_id = '$user_id'");

?>