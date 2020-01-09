<!-- Nathan Wijnberg | Januari 2020 -->

<?php

if ($_POST['username'] != '' and $_POST['password'] != '') {
    session_destroy();
    session_start();
    $_SESSION['gebruikersnaam'] = $_POST['username'];
    $_SESSION['wachtwoord'] = $_POST['password'];
    header('Location: homepage.php');
} else { header('Location: inlogScherm.php'); }

?>
