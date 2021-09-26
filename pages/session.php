<?php 
session_start();
if (!isset($_SESSION['is_member']) && !isset($_SESSION['is_admin'])){
   header("Location:..\inde.php");
}

?>