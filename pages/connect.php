<?php 
$conn = pg_connect("host=127.0.0.1 
                    options='--client_encoding=UTF8' 
                    port=5480 
                    dbname=database_single 
                    user=phonesystem 
                    password=ChizEzUt4O73"
                    )
or die("Failed to create connection to database: ". pg_last_error(). "<br/>");

?>