<?php 
include('connect.php');
$result1 = pg_query($conn,"SELECT * FROM recordings");
echo pg_num_rows($result1);

?>