<!-- Nathan Wijnberg | Januari 2020 -->

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/joined.css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
</head>
<body>

<?php include 'header.php' ?>

<main>

    <div class="homepageImages">
        <img src="images/small/diploma.jpg" alt="Diploma-uitreiking">
        <img src="images/small/galapak.jpg" alt="Galapak">
        <img src="images/small/random_foto_2.jpg" alt="Random Foto 2">
        <img src="images/small/rsz_introweek.jpg" alt="Introductieweek">
    </div>
</main>

<?php echo $_SESSION['gebruikersnaam']; ?>

<?php include 'footer.php' ?>

</body>
</html>