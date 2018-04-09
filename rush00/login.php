<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" charset="utf-8"/>
    <title>Login</title>
</head>
<body>
    <div id="header">
        <a href="index.php" id="logo"></a>      
        <div id="call">Online Shop</div>         
    </div>
    <form action="log_in.php" method="POST">
        <div class="op">
            <h2>Login</h2>
            <input placeholder="Login" type="text" name="login" value=""/>
            <br/>
            <input placeholder="Password" type="password" name="passwd" value=""/>
            <br/>
            <input type="submit" name="submit" value="OK"/>
        <div/>
    </form>
    <?php
        if ($_GET['message'] == 'error') {
            echo '<script> alert("ERROR"); </script>';
        }
        else if ($_GET['message'] == 'ok') {
            header("Location: index.php");
        }
    ?>
</body>
</html>
