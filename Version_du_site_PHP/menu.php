<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/menu.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="Js/menu.js"></script>
        <script src="jQuery/jquery-3.3.1.js"></script>
        <script src="jQuery/jquery-mousewheel-3.1.13/jquery.mousewheel.js"></script>
        <script src="jQuery/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="Zoom/dist/jquery.zoom-svg.js"></script>
    </head>

    <body>

        <div class="barrenav " id="menu">
            <a href="index.php" class="active"><i class="fa fa-home"></i> ACCUEIL</a>
            <div class="deroulant">
                <button class="bouton-deroulant">INFORMATIONS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="deroulant2">
                    <a href="informations.php">POURQUOI PARTIR À L'ÉTRANGER ?</a>
                    <a href="informations.php">DEADLINES</a>
                </div>
            </div>
            <div class="deroulant">
                <button class="bouton-deroulant">PAGES D'UNIVERSITÉS
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="deroulant2">
                    <a href="austin.php">UNIVERSITÉ DE AUSTIN</a>
                    <a href="uhkong.php">UNIVERSITÉ DE HONG KONG</a>
                    <a href="univberlin.php">UNIVERSITÉ HUMBOLDT DE BERLIN</a>
                </div>
            </div>
            <a href="list.php">LISTE UNIVERSITÉS</a>
            <a href="procedure.php">PROCÉDURES ADMINISTRATIVES</a>
            <a href="contact.php">CONTACT</a>
            <a href="#" class="bouton-cache" onclick="responsiveFunction()">&#9776;</a>
        </div>

    </body>

</html>