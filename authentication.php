<?php
include './connect_db.php';
$username = $_POST['user'];
$password = $_POST['pass'];
$sql = "select *from users where username = '$username' and password = '$password'";
$dbname = 'twitter_clone';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    session_start();
    $_SESSION["user"] = "$username";
    include './login_dashboard.php';
} else {
    echo "<h1> Login failed. Invalid username or password.</h1>";
}
