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
                <li class="shout"><span>10:15AM - </span>Saiful: what are you guys up to?</li>
                <li class="shout"><span>10:15AM - </span>Saiful: what are you guys up to?</li>
                <li class="shout"><span>10:15AM - </span>Saiful: what are you guys up to?</li>
                <li class="shout"><span>10:15AM - </span>Saiful: what are you guys up to?</li>
                <li class="shout"><span>10:15AM - </span>Saiful: what are you guys up to?</li>
                <li class="shout"><span>10:15AM - </span>Saiful: what are you guys up to?</li>
            </ul>
        </div>
        <div id="input">
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