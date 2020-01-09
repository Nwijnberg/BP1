<!-- Nathan Wijnberg | Januari 2020 -->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/inlogScherm.css">
    <link rel="stylesheet" href="css/joined.css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body>

<?php include 'header.php' ?>

<main>
    <form method="POST" action="loginProcess.php">
        <div class="InlogBlok">

            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="Username"/>

            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="Password"/>

            <button type="submit">Log In</button>
        </div>
    </form>
</main>

<?php include 'footer.php' ?>

</body>
</html>
