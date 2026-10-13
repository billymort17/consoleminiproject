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