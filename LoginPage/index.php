<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <form action="login.php" method="post">            
            <h2>Login</h2>
            <?php if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } else if(isset($_GET['succes'])) { ?>
                    <p class="succes"><?php echo $_GET['succes']; ?></p>
            <?php } ?> 
            
            <Label>User Name</Label>
            <input type="text" name="uname" placeholder="User Name"><br>

            <label>Password</label>
            <input type="password" name="password" placeholder="Password"><br>

            <button type="submit">Login</button>
            <button id="btn_2" type="submit" formaction="signup.php">Sign Up</button>
        </form>
    </body>
</html>