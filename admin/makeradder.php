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
    <label for="manufacturers"> choose a manufacturer
        <select name="manufacturer" id="manufacturers">
            <option
                    value="microsoft"> Microsoft</option>
            <option
                    value="sony"> Sony</option>
            <option
                    value="nintendo"> Nintendo</option>
            <option
                    value="steam"> Steam</option>
        </select>
        <button type="submit" id="display" name="display"> submit </button> <br>

    </label>


</form>
</body>
