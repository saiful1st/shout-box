<?php
include "database.php";
?>
<?php
//    Create Select query
$query = "SELECT * FROM shouts";
$shouts = mysqli_query($connection,$query);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shout Box</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <div id="container">
        <header>
            <h1>Shout It! ShoutBox</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php
                    while ($row = mysqli_fetch_assoc($shouts)){?>
                        <li class="shout"><span><?php echo $row['time']?> - </span><b><?php echo $row['user']?>:</b> <?php echo $row['message']?></li>
                <?php }?>
            </ul>
        </div>
        <div id="input">
            <?php if (isset($_GET['error'])){ ?>
                <div class="error"><?php echo $_GET['error']?></div>
            <?php }?>
            <form action="process.php" method="post">
                <input type="text" name="user" placeholder="Enter your name">
                <input type="text" name="message" placeholder="Enter your message">
                <br>
                <input class="shout-btn" type="submit" name="submit" value="Shout it out">
            </form>
        </div>

    </div>
</body>
</html>