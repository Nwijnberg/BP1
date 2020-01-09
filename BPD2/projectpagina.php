<!-- Nathan Wijnberg | Januari 2020 -->

<!DOCTYPE HTML>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Projectpagina</title>
    <link rel="stylesheet" href="css/projectpagina.css">
    <link rel="stylesheet" href="css/joined.css">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
</head>
<body>

<?php include 'header.php' ?>

<main>
    <div class="allTextOnPage">

        <div class="titleText">
            <h2>Tron: Corruption</h2>
            <?php echo $_SESSION['gebruikersnaam']; ?>
            <h3>Objects</h3>
        </div>

        <div class="Tron">
            <h4>Tron</h4>
            <p>Tron is het spelerskarakter, die je bestuurt om het virus te bestrijden. Tron is herkenbaar door de
                blauwe
                kleur die
                hij heeft, die verandert in oranje als hij dood gaat (Oftewel geïnfecteerd met het virus). Het tron
                object
                is direct verbonden
                met de Healthbar. Tron beweegt door gebruik van de AWSD-knoppen. Met A gaat hij naar links, D naar
                rechts, W
                naar boven en
                met S schiet je een Disc.</p>
        </div>

        <div class="TronImg">
            <img src="images/small/tron.png" alt="Tron" width="300">
        </div>

        <div class="Abraxas">
            <h4>Abraxas</h4>
            <p>Abraxas is de eindbaas, en in het verhaal het levende computervirus wat de computer heeft geïnfilteerd en
                verandert. Abraxas zijn
                einddoel is niks anders dan de computer volledig over te nemen. Abraxas is af te schijden van de
                Corrupted
                door het 'pak' wat
                hij draagt, wat de enige teken is dat hij ooit zelf ook een programma was dat met een virus was
                geïnfecteerd
                en zo zijn krachten
                kreeg, en zelf een bewust virus werd. Abraxas bevecht je in het laatste level van het spel, waar hij
                rondloopt in de CPU op een zwevend platform. Hij schiet snel
                Corrupted Discs naar onder en beveelt lasers om de speler te beschieten.</p>
        </div>

        <div class="AbraxasImg">
            <img src="images/small/Abraxas.png" alt="Tron" width="300">
        </div>

        <div class="Corrupted">
            <h4>Corrupted</h4>
            <p>De Corrupted zijn programma's die Abraxas bezeten heeft en in een 'slaapmodus' zitten totdat Tron in de
                buurt
                komt.
                Zodra als de Speler in de radius komt worden de Corrupted wakker en beginnen ze met rondlopen van links
                naar
                rechts, af
                aan het stoten van onzichtbare borders. De Corrupted blijven constant Corrupted Discs schieten in de
                hoop om
                Tron te raken.
                De speler kan kiezen tussen deze vijanden te doden met zijn eigen Discs of ze te ontwijken.</p>
        </div>

        <div class="CorruptedImg">
            <img src="images/small/enemy.png" alt="Tron" width="300">
        </div>

        <div class="Platforms">
            <h4>Platforms</h4>
            <p>De platformen die je in level 4 gebruikt om de lasers en Corrupted Discs van Abraxas te ontwijken, en
                natuurlijk dichter bij
                het computervirus te komen en hem aan te vallen. Er zijn vier van deze platforms, die in de lucht
                zweven. Je
                kan alleen op
                deze platformen komen door op het bouncepad te gaan staan die zich in het midden van het veld
                bevindt.</p>
        </div>

        <div class="PlatformsImg">
            <img src="images/small/platform.png" alt="Tron" width="300">
        </div>

        <div class="CorruptedPlatforms">
            <h4>Corrupted Platforms</h4>
            <p>De platformen, of eigenlijk platform, waarop Abraxas loopt in zijn level. Deze platformen bevinden zich
                in
                het bovenste
                deel van de room, en ze zijn herkenbaar door de oranje strepen en vaten die op het platform zit. Je kan
                niet
                op dit platform
                komen.</p>
        </div>

        <div class="CorruptedPlatformsImg">
            <img src="images/small/CorruptedPlatform.png" alt="Tron" width="300">
        </div>

        <div class="Disc">
            <h4>Disc</h4>
            <p>De Disc is het wapen waarmee je je vijanden bevecht als Tron. De volledige naam is 'Program Disc'. Deze
                schijf is ook
                de levenslijn van het programma, en als het programma sterft valt deze Disc ook kapot in stukken. De
                Disc
                wordt door Tron
                gegooid als je op S drukt en dood Corrupted met één of twee rake schoten.</p>
        </div>

        <div class="CorruptedDiscs">
            <h3>Corrupted Disc</h3>
            <p>De Corrupted Discs zijn in principe hetzelfde als de normale Discs, alleen zijn deze sterker en sneller
                dan
                de normale.
                De discs zijn -net zoals alle andere dingen die geïnfecteerd zijn door Abraxas- oranje.</p>
        </div>

        <div class="Healthbar">
            <h4>Healthbar</h4>
            <p>De Healthbar is een essentieel object in het spel. Het is dan ook de meter van hoeveel levens je als
                speler
                nog hebt
                voordat je dood gaat. De Healthbar is door het geheel van het spel in de linkerbovenhoek te zien en is
                volledig groen als
                de speler alle levens heeft. Als de speler levens verliest wordt de rode achtergrond te zien. De
                Corrupted
                en Abraxas hebben
                ook een Healthbar, maar deze is te zien boven hun hoofd en relatief kleiner dan die van de speler.</p>
        </div>

        <div class="video">
            <video controls>
                <source src="videos/TronCorruption.mp4" type="video/mp4">
            </video>
        </div>
    </div>

</main>

<?php include 'footer.php' ?>

</body>
</html>