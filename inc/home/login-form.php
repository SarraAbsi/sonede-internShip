<div class="login-panel">
    <div class="container">
        <section class="heading">
            <p>Login as <span>Admin / Staff</span></p>
        </section>
        <form method="POST" action="scripts/login.php">
            <div class="flex">
                <input type="text" placeholder="Cin" name="cin" required class="username" pattern="[0-9]{8}">
                <input type="password" placeholder="Password" name="password" required>
                <input type="submit" value="Login" class="submit" name="login-button">
            </div>
            <label class="signup-label">
                <p>Don't have an account ? <span><a href="request.php">Request one</a></span></p>
            </label>
        </form>
        <?php
            $url = "htpp://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            if (strpos($url, "login=wrong") == true) {
                echo "<p class='error-label'>Cin / Password incorrect !</p>";
            }        
        ?>
    </div>
</div>