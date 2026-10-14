<!doctype html>

<head>
    <title>navbar g console</title>
    <link rel="stylesheet" href="../styles.css">
</head>

<body>
<?php
//if logged in
if (isset($_POST["email"])) {
$_SESSION["userid"] = login(dbconnect_insert());
if ($_SESSION["userid"] != false) {
header("Location: navbar1.php");
exit;
}
}
?>
<nav class="navbar">
    <h1> console home page </h1>
    <ul class="nav-list">
        <li><a href="login.php"> link to the login page </a></li>
        <li><a href="makeradder.php"> link to the manufacturers page </a></li>
        <li><a href="consoleadder.php"> link to the console page </a></li>
        <li><a href="gameadder.php"> link to the games page </a></li>
    </ul>
</nav>
</body>