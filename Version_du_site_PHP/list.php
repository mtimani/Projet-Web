<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listes universités</title>
        <link rel="stylesheet" href="Css/menu.css"/>
        <link rel="stylesheet" href="Css/app.css">
        <link rel="stylesheet" href="Css/map.css"/>
        <link rel="stylesheet" href="Css/footer.css"/>
        <link rel="stylesheet" href="Css/list.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="Js/menu.js"></script>
        <script src="jQuery/jquery-3.3.1.js"></script>
        <script src="jQuery/jquery-mousewheel-3.1.13/jquery.mousewheel.js"></script>
        <script src="jQuery/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="Zoom/dist/jquery.zoom-svg.js"></script>
    </head>
    <body>
        <?php include('menu.php');?>
    
    
</div>


<div id="box" class="container2">
    <h1>UNIVERSITÉS</h1>
    <div id=Zonetext><br>L'INSA de Toulouse propose des échanges avec des pays dans tout le monde. Vous trouverez en dessous les différents universités que l'on vous propose. </div>
    <div>

        <img id="worldgif" src="imgs/giphy.gif">

        <br />
        <div>
            <ul class="list">

                <div id="Zoneamerique"> <h2>ZONE AMÉRIQUE</h2><br>
                    <a href="austin.php" target="_blank">Université de Austin (Etats Unis) </a><br>
                    <p> Université de Concordia (Canada)<br>
                    <p> Université de Sherbrooke (Canada)<br>
                    <p> Faculté d'Ingénierie de l'Université de Buenos Ariers (Argentine)<br>
                    <p>Université Fédérale de Rio de Janeiro (Bresil)<br>
                    <p> Université Nationale de Colombie (Colombie)<br>
                    <p>Université Autonome Métroplolitaine(Méxique)<br></p>
                </div>
                <div id="Zoneeurope"><h2>ZONE EUROPE</h2><br>
                    <a href="univberlin.php" target="_blank">Université Humblodt de Berlin (Allemagne) </a><br>
                    <p>Université de Barcelone (Espagne)<br>
                    <p>Université de Madrid (Espagne)<br>
                    <p>Polytechnique de Milan (Italie)<br>
                    <p>Institut Polytechnique de Lisbonne (Porugal)<br>
                    <p>University of Leicester (Angleterre)<br></p>
                </div>
                <div id="Zoneasie"><h2>ZONE ASIE</h2><br>
                    <a href="uhkong.php" target="_blank"> University of Hong Kong (Chine)</a><br>
                    <p> University Technologique de Malaisie (Malaisie)<br>
                    <p>Université Polytechnique de Saint-Petersbourg<br>
                    <p>Université Nationale de Séoul(République de Corée)<br>
                    
                </div>

            </ul>
        </div>
    </div>
</div>

        <?php include('footer.php');?>
    </body>
</html>