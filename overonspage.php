<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/Style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">
    <title>Duurzaam Huis over ons</title>
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
            <h3>Informatiepage</h3>
            <br>
            <p>
            Beste gebruiker van Duurzaam Huis dashboard
            <br>
            Door deze dashboard kunt u zien wat u verbruikt en hoeveel
            <br>
            het heeft gekost per maand. Onze bedoeling is dat u op deze manier geld
            <br>
            bespaart. Zo willen we ook zorgen voor een goed milieu.   
            <br>
            <br>
            Hier onder vindt u onze gegevens:
            </p>
            <br>
            <p> 
                Tel: 06 12345678
                <br>
                website: www.DuurzaamHuis.nl
                <br>
                Email: Info@DuurzaamHuis.nl
                
            </p>
            
            
            
        </div>
         

        <div class="item nav">
            <ul>
                <li> <a href="main.php">Home page</a> </li>
                <li> <a href="overonspage.php">Over ons</a> </li>
                <li> <a href="tips.php">Eco tips</a></li>
            </ul>
        </div>
        <div id="sidebar">
            <div class="toggle-btn "onclick="show()">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul>
                <li><a href="main.php">Home page</a> </li>
                <li> <a href="overonspage.php">Over ons</a></li>
                <li><a href="tips.php">Eco tips</a></li>
            </ul>
        </div>

    </div>
</body>
</html>
