<?php

$dbname = 'twitter_clone';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("connection failed:" . $conn->$connect_error);
}
$query = 'SELECT * FROM opinions';
$result = mysqli_query($conn, $query);
print_r($result);
