<?php
?>
<!doctype html>

<head>
    <title>console adder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar">
    <h1> console adder </h1>
    <ul class="nav-list">
        <li><a href="index.php"> link to the home page </a></li>
    </ul>
</nav>
<hr>

<form action='' method="post">
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
    <label for="games"> choose a game
    <select name="consoles" id="consoles">
        <option
                value="gta"> Gta</option>
        <option
                value="Cod"> Cod</option>
        <option
                value="Minecraft"> Minecraft</option>
        <option
                value="arcraiders"> Arc raiders</option>
        <option
                value="valheim"> Valheim</option>
        <option
                value="battlefront"> Battlefront</option>
        <option
                value="etb"> Escape the backrooms</option>
        <option
                value="terraria"> Terraria</option>
    </select>
        <button type="submit" id="display" name="display"> submit </button> <br>

    </label>


</form>
</body>
