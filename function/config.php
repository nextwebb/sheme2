<?php

try {
    $conn = new PDO("mysql:host=localhost; dbname=u651800555_hm", 'root', 'database_password');
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected";
   
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
