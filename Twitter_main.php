<!doctype html>
<html lang="en">
<?php
include './connect_db.php'

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
        <?php include './Twitter_header.php' ?>
        <form action='authentication.php' action="authentication.php" method="POST">

            <?php if (isset($_POST['login_button'])) {

                if ((!isset($_POST['user'])) || (!isset($_POST['pass']))) {
                    $query = mysqli_query($conn, "SELECT * FROM WHERE username=${_POST['user']}  AND password=${_POST['pass']}");
                    if ($row = mysqli_fetch_array($query)); {
                        if (count($row) == 1) {
                            session_start();
                            $_SESSION["username"] = $_POST['user'];
                        }
                    }
                }
            }





            ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">username</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>

            <input type="submit" value='login_button' class="btn btn-primary" />
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