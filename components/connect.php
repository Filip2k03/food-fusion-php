<?php

$db_name = 'mysql:host=localhost;dbname=food_db';
$user_name = 'root';
$user_password = 'passw'; // Change this to your password If u dont have any password then leave it empty

try {
    $conn = new PDO($db_name, $user_name, $user_password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; If u want to check if the connection is successful or not then uncomment this line
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>