<!-- use title div class cos it works and i don't have to make another -->
<div class="formbackground">
    <!-- div for the form -->
    <div class="form">
        <!-- make the form for inputs -->
        <form action="login.php" method="post">
            <?php
            if ($loginPage) { echo'
            <h1> Admin Login</h1>
            <label for="email">Email</label><br>
            <input name="email" id="email" placeholder="Enter Email..." type="email" required><br>
            <label for="pswd">Password</label>
            <input name="pswd" id="pswd" placeholder="Enter password..." type="password" required><br>
            <button type="submit">Login</button><br>
            <a href="?page=register">Dont have an account? Register</a>
            ';}

            ?>
        </form>
    </div>
</div>