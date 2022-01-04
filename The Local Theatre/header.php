
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./CSS/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <div class="logo">
            <h2>The Local Theatre</h2>
        </div>

        
        <div class="menu" id="navbar">
            <div class="responsive">
            
            <?php if(isset($_SESSION['userLoggedIn'])){ ?>

                <a id="navItem" href="index.php">Home</a>
                <a id="navItem" href="contact.php">Contact</a>
                <a id="navItem" href="blog.php">News</a>
                <a id="navItem" href="notifications.php">Notifications</a>
                <a id="navItem" href="myAccount.php">My Account</a>
                <a id="navItem" href="logout.php">Log out</a>


            <?php } else { ?>

                <a id="navItem" href="index.php">Home</a>
                <a id="navItem" href="contact.php">Contact</a>
                <a id="navItem" href="blog.php">News</a>
                <a id="navItem" href="login.php">Login|Register</a>

            <?php } ?>                           
            </div>                  
        </div>

    </header>
</body>
</html>