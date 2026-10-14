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
        if (addConsole(dbconnect_insert())) {
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

    <input type="text" name="name" placeholder="console" required>
    <input type="text" name="price" placeholder="£00.01" required>
    <input type="text" name="date" placeholder="n/n/n" required>
    <input type="submit" name="console" placeholder="submit">
</form>
</body>
</html>
