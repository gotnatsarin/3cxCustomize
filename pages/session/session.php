<?php 
session_start();
include('connect.php');
if (!isset($_SESSION['is_user']) && !isset($_SESSION['is_admin'])){
   header("Location:index.php");
  }
  $session_user_id = $_SESSION['user_id'];
  $result_user = pg_query($conn,"SELECT * FROM public.access_user WHERE user_id = $session_user_id");
  $row = pg_fetch_assoc($result_user);

  $session_username = $row['username'] ;

  pg_free_result($result_user);
  pg_close($conn);

?>