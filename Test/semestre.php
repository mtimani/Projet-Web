<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Semestre à l'étranger</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="semestre.css" >
</head>
<body>
<script src="jquery-3.3.1.js"></script>
<script src="responsiveslides.js"></script>
<script src="buttons.js"></script>
<div id="bloc_page page-content-wrapper" class="container-fluid">
    <header>
        <?php include '../menu.php';?>
        <div id="titre">
            <div id="Logo">
                <img src="Insa.jpg" class="insa" alt="Logo de L'insa">
            </div>
        </div>

        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Université</a></li>
                <li><a href="#">Formation</a></li>
                <li><a href="#">Moodle</a></li>
            </ul>
        </nav>
    </header>
    <div class="row">
        <div class="col-lg-1 col-md-1">
        </div>
        <div id="Main" class="col-lg-10 col-md-10 col-s-12 col-xs-12">
            <div id="banniere_description">
                <h2>Université d'Austin</h2>
                Campus de l'université
                <a href="https://www.austincollege.edu" target="_blank" class="bouton_rouge">Voir site de l'université</a>
            </div>
            <div class="slider" id="main-slider"><!-- outermost container element -->
                <div class="slider-wrapper"><!-- innermost wrapper element -->
                    <img src="1.jpg" alt="First" class="slide" /><!-- slides -->
                    <img src="2.jpg" alt="Second" class="slide" />
                    <img src="3.jpg" alt="Third" class="slide" />
                    <img src="4.jpg" alt="Fourth" class="slide"/>
                    <img src="5.jpg" alt="Fifth" class="slide"/>
                </div>
            </div>
            <div id="Block">
                <h1>Site consacré aux semestres à l'étranger</h1>
                <p>
                    Partez pour un semestre à l'étranger pour étudier et améliorer la langue de votre choix et vous ouvrir aux nombreuses opportunités accessibles à l'international.
                    Faire un semestre à l'étranger est le meilleur moyen de se plonger dans une nouvelle culture, et ainsi accelérer l’apprentissage de la langue grâce à une pratique quotienne.
                </p>
                <p>
                    L'université du Texas à Austin est une université américaine située dans la ville d'Austin, capitale du Texas, aux États-Unis....
                </p>
                <button id="MIC" class="button" style="vertical-align:inherit; background-color: lightslategray;" ><span>MIC </span></button>
                <button id="IMACS" class="button" style="vertical-align:inherit; background-color: lightslategray"><span>IMACS </span></button>
                <button id="ICBE" class="button" style="vertical-align:inherit; background-color: lightslategray"><span>ICBE </span></button>
                <button id="IC" class="button" style="vertical-align:inherit; background-color: lightslategray"><span>IC </span></button>
            </div>
        </div>
        <div class="col-lg-1 col-md-1">
        </div>
    </div>
</div>
</body>
</html>
