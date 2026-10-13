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

<form action='result.php' method="post">
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
