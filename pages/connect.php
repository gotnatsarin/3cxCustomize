<?php 
        // Create connection
        $connect = new mysqli('localhost', 'root', '', '3cxcustomize');

        // Check Connection
    
        if ($connect->connect_error) {
            die("Something wrong.: " . $connect->connect_error);
            };

            date_default_timezone_set("Asia/Bangkok");
?>