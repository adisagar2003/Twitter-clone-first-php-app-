<?php
$dbname = 'twitter_clone';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$opinion = $_POST['tweet'];
$user = 'a';

try {
    if ($opinion != '') {
        mysqli_query($conn, "INSERT INTO opinions(opinion,name) VALUES('$opinion','test')");
        echo '<h1>Tweet uploaded </h1>';
    }
} catch (Exception $e) {
    echo 'caught exception', $e->getMessage(), '\n';
}

?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php
    $dbname = 'twitter_clone';
    $dbuser = 'root';
    $dbhost = 'localhost';
    $dbpassword = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
    $result = mysqli_query($conn, "SELECT * FROM opinions");
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    function opinions($opinion)
    {

        echo  "<div class=\"card\">
        <div class=\"card-body\">
      ${$opinions['opinions']}
        </div>
      </div>";
        return array_map('opinions', $opinion);
    }

    ?>




    <div class="card">
        <div class="card-body">
            <?php $result = mysqli_query($conn,  "SELECT * FROM `opinions`;");

            $rows = array();
            while ($row = mysqli_fetch_array($result)) {
                $rows[] = $row;
                echo   "<div class=\"card\">
                <div class=\"card-body\">
                 " . $row['opinion'] . "<br>" .
                    "
                </div>
              </div>";
            }


            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>