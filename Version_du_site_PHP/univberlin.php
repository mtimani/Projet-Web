<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Université Humblodt de Berlin</title>
            <link rel="stylesheet" href="Css/menu.css">
            <link rel="stylesheet" href="Css/footer.css">
            <link rel="stylesheet" href="Css/semestre.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="Js/semestre.js"></script>
            <script src="Js/menu.js"></script>
            <script src="jQuery/jquery-3.3.1.js"></script>
            <script src="jQuery/jquery-3.3.1.js"></script>
            <script src="jQuery/jquery-mousewheel-3.1.13/jquery.mousewheel.js"></script>
            <script src="jQuery/jquery-ui-1.12.1/jquery-ui.js"></script>
            <script src="Zoom/dist/jquery.zoom-svg.js"></script>
        </head>
        <body>

            <?php include('menu.php');?>

            <div id="Main">
                <div id="banniere_description">
                    <h2>UNIVERSITÉ HUMBOLDT DE BERLIN</h2>
                    Campus de l'université
                    <a href="https://www.hu-berlin.de/en?set_language=en" target="_blank" class="bouton_rouge">Voir site de l'université</a>
                </div>
                <div class="slider" id="main-slider">
                    <div class="slider-wrapper">
                        <img src="imgs/berlin/1.jpg" alt="First" class="slide" />
                        <img src="imgs/berlin/2.jpg" alt="Second" class="slide" />
                        <img src="imgs/berlin/3.jpg" alt="Third" class="slide" />
                        <img src="imgs/berlin/4.jpg" alt="Fourth" class="slide"/>
                        <img src="imgs/berlin/5.jpg" alt="Fifth" class="slide"/>
                    </div>
                </div>
                <div id="Description">
                    <p>
                       Berlin est la capitale de l'Allemagne. Située dans le nord-est du pays, Berlin compte environ 3,7 millions d'habitants4. Ses habitants s'appellent les Berlinois. Elle est la deuxième ville et la septième agglomération la plus peuplée de l'Union européenne. L'agglomération de Berlin s'étend sur 892 km2 et compte 4,4 millions d'habitants. La région métropolitaine de Berlin-Brandebourg qui cumule les Länder de Berlin et de Brandebourg regroupe au total près de 6 millions d'habitants. <br>
                        L'université est la plus ancienne parmi les universités de la ville. Fondée en 1809 elle compte aujourd'hui plus de 30 000 inscrits. L'université de Berlin nouvellement fondée connut son premier semestre en 1810. Il y avait alors 256 étudiants et 52 enseignants. L'Université se divisait en quatre facultés, à savoir celles de droit, de médecine, de philosophie et de théologie. Les sciences de la nature relevaient alors de la faculté de philosophie. 
                    </p>
                    <button id="MIC" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Mic()"><span>MIC </span></button>
                    <button id="IMACS" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Imacs()"><span>IMACS </span></button>
                    <button id="ICBE" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Icbe()"><span>ICBE </span></button>
                    <button id="IC" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Ic()"><span>IC </span></button>
                </div>
                <div class="Buttons">
                    <div id="Info_Mic" style="display: none;">
                        <p>Mathematics <a href="https://www.math-berlin.de/">Site </a><br> 
                            Computional Sciences (uniquement enséigné en allemand) <a href="http://www.ccsa.hu-berlin.de/" target="_blank">Site </a><br> </p>
                    </div>
                    <div id="Info_Imacs" style="display: none;">
                        <p>Physics <a href="https://www.hu-berlin.de/en/institutions/faculties-and-departments/#physik" target="_blank">Site </a></p>
                    </div>
                    <div id="Info_Icbe" style="display: none;">
                        <p>Environemental Studies <a href="https://www.iri-thesys.org/" target="_blank">Site </a><br> 
                            Biology <a href="https://www.biologie.hu-berlin.de/de" >Site </a></p>
                    </div>
                    <div id="Info_Ic" style="display: none;">
                        <p> Pas d'échanges possible </p>
                    </div>
                </div>
            </div>

            <?php include('footer.php');?>
        </body>
    </html>

