<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/joined.css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
</head>
<body>

<?php session_start(); ?>

<header>
    <div class="NavBox">
        <h2><a href="personalia.php">Personalia</a></h2>

        <div class="dropdown">
            <h2><a class="dropbtn" href="projecten.php">Projecten</a></h2>
            <div class="dropdown-content">
                <a href="projecten.php#TronCorruption">Tron: Corruption</a>
                <a href="projecten.php#DivingForTreasure">Diving For Treasure</a>
                <a href="projecten.php#WorldOfWonders">World Of Wonders</a>
                <a href="projecten.php#Profielwerkstuk">Profielwerkstuk</a>
                <a href="projecten.php#StageKruudwis">Stage Kruudwis</a>
                <a href="projecten.php#ProjectClash">Project Clash</a>
                <a href="projecten.php#Singelloop">Singelloop 2016</a>
                <a href="projecten.php#Zomerkamp">Zomerkamp Scouting</a>
            </div>
        </div>

        <h1><a class="NathanWijnberg" href="homepage.php">Nathan Wijnberg</a></h1>
        <h2><a href="projectpagina.php">Projectpagina</a></h2>
        <h2><a href="contact.php">Contact</a></h2>
        <h3><a href="inlogscherm.php">
                <?php
                if ($_SESSION['gebruikersnaam'] == '') {
                    echo('Login');
                } else { echo $_SESSION['gebruikersnaam']; }
                ?>
            </a></h3>
    </div>
</header>

</body>
</html>