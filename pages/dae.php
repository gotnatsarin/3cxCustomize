<?php 

$salt = '3CX_DEV_TEAM';

$hash_password = hash_hmac('sha256', '1234', $salt);

echo $hash_password ;

?>