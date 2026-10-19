<?php
//import the stuff
require_once ("assets/dbconn.php");
require_once ("assets/common.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if(register(dbconnect_insert())) { //if it works go into this
            //alert that they signed up
            header('Location: success.php');
            exit();
        }
    } catch (PDOException $e) { //catch db error
        $_Session["usermessage"] = "Database error: " . $e->getMessage();
        // Throw the exception
        throw $e; // Re-throw the exception  // outputs the error
    } catch (Exception $e) { //catch other error
        $_Session["usermessage"] = "Exception: " . $e->getMessage();
        throw $e;
    }
}
?>
?>
<!doctype html>

<head>
    <title>console adder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
//import the stuff
require_once('assets/navbar.php');
?>
<hr>
</body>