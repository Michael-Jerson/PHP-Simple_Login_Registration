<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
<div class="form">
     <img class="logo" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg">

    <?php if (isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error'];?></p>
    <?php }?>
    <form action="login.php" method="post">
        <input type="text" name="uname" placeholder="username" id="username">
        <input type="password" id="password" name="password" placeholder="password">
        <button type="submit" >login</button>
        <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
    </form>
    </div>
</body>
</html>