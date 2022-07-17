<!doctype html>
<html lang="en">

<?php

$dbname = 'twitter_clone';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("connection failed:" . $conn->$connect_error);
}
$query = 'SELECT * from opinions';
$result = mysqli_query($conn, $query);
function add_opinion($opinion)
{

    $dbname = 'twitter_clone';
    $dbuser = 'root';
    $dbhost = 'localhost';
    $dbpassword = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    mysqli_query($conn, "INSERT INTO opinions(opinion,name) VALUES($opinion,rax)");
}
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    #vanta-canvas {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0
    }
</style>


<body>
    <div id="vanta-canvas">
        <?php echo  $_SESSION["user"]  ?>
        <form action='upload_tweet.php' method="POST">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Your tweet</label>
                <textarea name="tweet" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <input type="submit" />
            </div>

        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
    <script>
        VANTA.NET({
            el: "#vanta-canvas",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xfb9d2,
            backgroundColor: 0xececff,
            points: 5.00
        })
    </script>
</body>

</html>