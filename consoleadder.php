<?php
//import the stuff
require_once "assets/dbconn.php";
require_once "assets/common.php";
?>
<!doctype html>

<head>
    <title>console adder</title>
    <link rel="stylesheet" href="version1/admin/styles.css">
</head>
<body>
<nav class="navbar">
    <h1> console adder </h1>
    <ul class="nav-list">
        <li><a href="version1/admin/index.php"> link to the home page </a></li>
    </ul>
</nav>
<hr>


<form method='post' action="">

<?php
//php code to handle adding a console

//check if was sent as post request from form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if(addconsole(dbconnect_insert())) { //if it works go into this
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


    <!-- label will show the text that you put between the tags -->
    <label for="consoles"> choose a console
        <select name="consoles" id="consoles">
            <option
                    value="xbox"> xbox</option>
            <option
                    value="playstation"> playstation</option>
            <option
                    value="nintendoswitch"> nintendo switch</option>
            <option
                    value="steamdeck"> steamdeck</option>
        </select>
        <button type="submit" id="display" name="display"> submit </button> <br>

    </label>


</form>
</body>