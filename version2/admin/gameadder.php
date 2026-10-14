<?php

session_start();

require_once ("assets/common.php");
require_once ("assets/dbconn.php");
?>

<!DOCTYPE>

<html>

<head>
    <title>console adder</title>
</head>

<body>
<form method="post" action="">
    <?php
    $_SESSION["usermessage"] = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (addGame(dbconnect_insert())) {
            echo "here";
            $_SESSION["usermessage"] = "You're console was successfully registered.";
            exit;
        } else {
            $_SESSION["usermessage"] = "There was an error registering your console.";
            exit;
        }
    }
    echo $_SESSION["usermessage"];
    ?>

    <input type="text" name="gamename" placeholder="game" required>
    <input type="text" name="gamedate" placeholder="n/n/n" required>
    <input type="text" name="gameprice" placeholder="£00.01" required>
    <input type="submit" name="game" placeholder="submit">
</form>
</body>
</html>
