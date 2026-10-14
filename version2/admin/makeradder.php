<?php

session_start();

require_once "assets/common.php";
require_once "assets/dbconn.php";
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
        if (addManufacturer(dbconnect_insert())) {
            echo "here";
            $_SESSION["usermessage"] = "the manufacturer was successfully registered.";
            exit;
        } else {
            $_SESSION["usermessage"] = "There was an error registering the manufacturer.";
            exit;
        }
    }
    echo $_SESSION["usermessage"];
    ?>

    <input type="text" name="manuname" placeholder="console" required>
    <input type="text" name="manuemail" placeholder="email@" required>
    <input type="text" name="manuaddress" placeholder="location" required>
    <input type="text" name="dateestablished" placeholder="n/n/n" required>
    <input type="submit" name="manufacturer" placeholder="submit">
</form>
</body>
</html>
