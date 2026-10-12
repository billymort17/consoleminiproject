<?php
?>
<!doctype html>

<head>
    <title>console adder</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1> </h1>

<form action='result.php' method="post">
    <!-- label will show the text that you put between the tags -->
    <label for="password"> password
        <!-- allowing the user to input a unique set of text -->
        <!-- the required forces an input from the user -->
        <input type="text" name="password" id="password" required> <br>
        <button type="submit" id="display" name="display"> submit </button> <br>
    </label>


</form>
</body>