<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
    <title>Duurzaam Huis tips</title>
    <script src="js/script.js"></script>
    <?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        echo "Je bent niet ingelogd! Klik <a href='Inlogpagina/form.html'>hier<a> om in te loggen.";
        exit();
    }
    ?>
</head>
<body>    
    <div id="dashboard">
        <div class="item Header"><img src="Logo/Duurzaamhuislogo.png" alt="" style="height: 175px; padding-top: 20px;">
        <div class="gebruiker">
                <?php 
                echo "Welkom ";
                echo $_SESSION['username'] . "!"; 
                ?>
                <br><a href="Inlogpagina/loguit.php">Uitloggen</a>
        </div>   
    </div>
        
        <div class="item Informatiepage">
        <h3>Huis duurzaam maken: waar te beginnen?</h3>
        <br>
        <p>
        <strong>
        Misschien loop je al een tijdje rond met het idee om je huis duurzamer te maken, of heb je de eerste stappen al gezet. 
        Behalve dat je huis duurzaam maken goed is voor het milieu, kan het ook goed zijn voor je portemonnee.
        </strong>
        <br>
        </p>
        <br>
        <p><strong>Tips die je in huis kan volgen om te verduurzamen:</strong></p>
        <br>
        <br>
        <div id="tips">
        <p>
            <ul>
            <li>Tochtige kieren in huis? Dicht ze met kit of hang een tochtstrip op.</li>
            <br>
            <li>Gebruik dan radiatorfolie. Hierdoor gaat de warmte van je radiator niet verloren richting de buitenmuren.</li>
            <br>
            <li>Vervang je lampen door ledverlichting. Ledverlichting is iets duurder, maar verbruikt veel minder energie.</li>
            <br>
            <li>Installeer een radiator ventilator. Deze slimme ventilatoren bevestig je onder je radiator,
            waardoor de lucht sneller en beter wordt verspreid.</li>
        </ul>
        </p>
        </div>
        </div>
         

        <div class="item nav">
            <ul>
                <li><a href="main.php">Home page</a></li>
                <li> <a href="overonspage.php">Over ons</a></li>
                <li><a href="tips.php">Eco tips</a></li>
            </ul>
        </div>
        <div id="sidebar">
            <div class="toggle-btn "onclick="show()">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul>
                <li><a href="main.php">Home page</a></li>
                <li><a href="overonspage.php">Over ons</a></li>
                <li><a href="tips.php">Eco tips</a></li>
            </ul>
        </div>

    </div>
</body>
</html>
