<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/Style.css">
    <script src="Data/js/apparaten.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">

    <title>Duurzaam Huis home page</title>
      
    <link rel="shortcut icon" href="#">

    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <script src="Data/js/grafiek.js"></script>
    <?php
    session_start();

    if(!isset($_SESSION['username']))
    {
        echo "Je bent niet ingelogd! Klik <a href='Inlogpagina/form.html'>hier</a> om in te loggen.";
        exit();
    }
    ?>
</head>
<body>    
    <div id="dashboard">
        <div class="item Header">
            <div><img src="Logo/Duurzaamhuislogo.png" alt="" style="height: 175px; padding-top: 20px;"></div>
            <div class="gebruiker">
                <?php 
                echo "Welkom ";
                echo $_SESSION['username'] . "!"; 
                ?>
                <br><a href="Inlogpagina/loguit.php">Uitloggen</a>
            </div>
        </div>
        
        <div class="item Temperatuur">
            <div id="thermokop">Thermostaat</div>
            <svg width="150px" height="150px" viewBox="0 0 42 42">
                <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="rgba(200,200,200,0.5)" stroke-width="1"></circle>
                <circle cx="21" cy="21" r="15.91549430918954" fill="transparent" stroke="royalblue" stroke-width="1" stroke-dasharray="75 25" stroke-dashoffset="75" id="cirkelBoog"></circle>
                <g class="temp">
                    <text id="temperatuur" x="30%" y="54%">19</text>
                    <text id="eenheid" x="52%" y="50%">&deg;C</text>
                </g>
                
            </svg><br>
            <input type="range" min="1" max="30" step="1" value="18" class="slider" id="thermostaat">
            <p class="lichttekst" style="margin-top: 38px;">Hier kunt u uw temperatuur aanpassen</p>
            <script>
                
                let temperatuur = 9;
                const temperatuurUitvoer = document.getElementById('temperatuur');
                const cirkelBoog         = document.getElementById('cirkelBoog');
                const thermostaat        = document.getElementById('thermostaat');
              
                const uitvoeren = (temp) => {
                    temperatuurUitvoer.innerHTML = temp;
                    let boog = temp * 100/31;
                    cirkelBoog.style.strokeDasharray = `${boog} ${100 - boog}`;
                }
                 const animeerUitvoer = (temp) => {
                     let t = 0;
                     const timer = setInterval( () => {
                         if(t <= temp) {
                             uitvoeren(t);
                             t++;
                         } else {
                             clearInterval(timer);
                         }
                     }, 25)
                 }
        
                animeerUitvoer(thermostaat.value)
        
                thermostaat.addEventListener('change', () => {
                    animeerUitvoer(thermostaat.value);
                })
        
            </script>
        </div>
            <div class="item Licht"><div id="lichtkop">Licht</div> 
                <div class="lichtknoppen">
                    <label class="switch">
                        <input type="checkbox">
                        <div class="switch-btn" id="lichtbtn"></div>
                        <div class="lampen"><img src="Images/lamp-uit.png" alt="lamp-uit" id="lamp-uit"></div> 
                    </label>     
                    <label class="switch">
                        <input type="checkbox">
                        <div class="switch-btn" id="lichtbtn2"></div>
                        <div class="lampen">
                            <img src="Images/lamp-uit.png" alt="lamp-uit" id="lamp-uit2">
                        </div>
                    </label>     
                    <label class="switch">
                        <input type="checkbox">
                        <div class="switch-btn" id="lichtbtn3"></div>
                        <div class="lampen">
                            <img src="Images/lamp-uit.png" alt="lamp-uit" id="lamp-uit3"> 
                        </div>
                    </label>
                    <p class="lichttekst" style="margin-top: 15px;">Hier kunt u uw lichten aan/uit zetten</p>
                </div>
                  
            </div>
        <div class="item Water">
            <div id="waterkop">Verbruik water per dag in liter:</div> 
            <div class="grafiekg">
                <div id="grafiek">
                   
                </div>
            </div>
        </div>
        <div class="item Gas">
            <div id="gaskop">Verbruik gas per dag in M3:</div> 
            <div class="grafiekg">
                <div id="grafiek1">
                    
                </div>
            </div>
        </div>
        
        
        <div class="item Elektriciteit">
            <div class="apparaat" data-id="KA">
                <div id="huisapparaattekst">Woonkamer apperatuur</div>
                <div>
                    <p>minuten per dag: <span>0</span></p>
                    <input type="range" min="0" max="240" step="10" value="15" class="slider" id="myRange"/>
                </div> 
                <h2 style="font-size: x-large;">Verbruik of kosten</h2>
                <button class="button">Toon verbruik</button>
            </div>
            <div class="apparaat" data-id="WA">
                <div id="wasmachinetekst">Woonkamer apperatuur</div>
                <div>
                    <p>minuten per dag: <span>0</span></p>
                    <input type="range" min="0" max="240" step="10" value="15" class="slider" id="myRange"/>
                </div> 
                <h2 style="font-size: x-large;">Verbruik of kosten</h2>
                <button class="button">Toon verbruik</button>
            </div>
        </div>
        <div class="item nav">
            <ul>
                <li><a href="main.php">Home page</a></li>
                <li><a href="overonspage.php">Over ons</a></li>
                <li><a href="tips.php">Tips voor duurzaamheid</a></li>
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
                <li><a href="tips.php">Tips voor duurzaamheid</a></li>
            </ul>
        </div>
    </div>
    <script src="js/script.js"></script>  
</body>
</html>