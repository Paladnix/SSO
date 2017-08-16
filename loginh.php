<html>
    <head>
        <title>Login</title>
    </head>

    <body>
        <form method="post" action="login.php">
        <input type="text" name="name" value="" />
        <br>
        <input type="text" name="pw" value=""/>
        <br>
        <input type="hidden" name="call_back" value="<?php echo $_GET['call_back'] ?>" />

        <button type="submit">submit</button> 
        </form>
    </body>
</html>
