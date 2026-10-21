<?php
$conn = mysqli_connect("localhost",  "root", "", "class_login_db");

if (!$conn) {
    die("connection failed: " . mysql_connect_error());
    
}
echo "database connected successfully!";
?>