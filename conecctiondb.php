<?php
$conn = mysqli_connect("localhost",  "root", "", "lasgue_libraryweb");

if (!$conn) {
    die("connection failed: " . mysql_connect_error());
    
}

?>