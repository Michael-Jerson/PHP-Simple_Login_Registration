<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>SIGN UP</title>
</head>
<body>
<div class="form">
     <img class="logo" src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg">
    <h2>Signup</h2>

    <?php if (isset($_GET['error'])){ ?>
        <p class="error"><?php echo $_GET['error'];?></p>
    <?php }?>

    <?php if (isset($_GET['success'])){ ?>
        <p class="success"><?php echo $_GET['success'];?></p>
    <?php }?>

    <form action="signup-check.php" method="post">
        <!--Name-->
        <?php if (isset($_GET['name'])){ ?>
        <input type="text" 
               name="name" 
               placeholder="Name" 
               value="<?php echo $_GET['name'];?>">
        <?php }else{ ?>
        <input type="text" 
               name="name" 
               placeholder="Name" >
            <?php }?>
        <!--Username-->
        <?php if (isset($_GET['uname'])){ ?>
        <input type="text" 
               name="uname" 
               placeholder="Username" 
               value="<?php echo $_GET['uname'];?>">
        <?php }else{ ?>
        <input type="text" 
               name="uname" 
               placeholder="Name" >
            <?php }?>

        <input type="password" name="password" placeholder="Password">
        <input type="password" name="re_password" placeholder="Retype-Password">
        <button type="submit" >Sign Up</button>

        <p class="message">Already Have Account? <a href="index.php">Sign In </a></p>
    </form>
    </div>
</body>
</html>