<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/joined.css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body>

<?php include 'html/header.html' ?>

<main>
    <form>
        <div class="BelangstellingsForm">

            <label for="firstname">Voornaam: </label>
            <input type="text" id="firstname" placeholder="Nathan"/>

            <label for="lastname">Achternaam: </label>
            <input type="text" id="lastname" placeholder="Wijnberg"/>

            <label for="projectname">Project: </label>
            <input type="text" id="projectname" placeholder="Tron: Corruption"/>

            <label for="omschrijvingBelangstelling">Inhoud: </label>
            <textarea id="omschrijvingBelangstelling" placeholder="Typ hier iets..."></textarea>
            <button type="submit">verzenden</button>
        </div>
    </form>

    <div class="Contactgegevens">
        <h3>Contactgegevens: </h3>
        <p>Telefoon: 06-30277104</p>
        <p>e-mail: nathanwijnberg2001@gmail.com / nwijnberg2001@gmail.com</p>
        <p>Instagram: nathan.wijnberg</p>
    </div>

    <img src="images/maps.PNG" alt="Google Maps"/>
</main>

<?php include 'html/Footer.html' ?>

</body>
</html>