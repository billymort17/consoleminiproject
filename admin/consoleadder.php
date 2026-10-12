<?php
?>
<!doctype html>

<head>
    <title>console adder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<nav class="navbar">
    <h1> password checker </h1>
    <ul class="nav-list">
        <li><a href="index.php"> link to the home page </a></li>
    </ul>
</nav>
<hr>

<form action='result.php' method="post">
    <!-- label will show the text that you put between the tags -->
    <label for="console adder"> password
        <!-- allowing the user to input a unique set of text -->
        <!-- the required forces an input from the user -->
        <input type="text" name="addconsole" id="console" required> <br>
        <button type="submit" id="display" name="display"> submit </button> <br>
    </label>


</form>
</body>