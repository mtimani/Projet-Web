<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Semestre à l'étranger</title>
            <link rel="stylesheet" href="../Css/menu.css">
            <link rel="stylesheet" href="../Css/footer.css">
            <link rel="stylesheet" href="../Css/semestre.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="../Js/semestre.js"></script>
            <script src="../Js/buttons.js"></script>
            <script src="../Js/menu.js"></script>
            <script src="../jQuery/jquery-3.3.1.js"></script>
            <script src="../jQuery/jquery-3.3.1.js"></script>
            <script src="../jQuery/jquery-mousewheel-3.1.13/jquery.mousewheel.js"></script>
            <script src="../jQuery/jquery-ui-1.12.1/jquery-ui.js"></script>
            <script src="../Zoom/dist/jquery.zoom-svg.js"></script>
        </head>
        <body>
                <?php include('menu.php');?>
                <div id="Main">
                    <div id="banniere_description">
                        <h2>Université d'Austin</h2>
                        Campus de l'université
                        <a href="https://www.austincollege.edu" target="_blank" class="bouton_rouge">Voir site de l'université</a>
                    </div>
                    <div class="slider" id="main-slider">
                        <div class="slider-wrapper">
                            <img src="../imgs/1.jpg" alt="First" class="slide" />
                            <img src="../imgs/2.jpg" alt="Second" class="slide" />
                            <img src="../imgs/3.jpg" alt="Third" class="slide" />
                            <img src="../imgs/4.jpg" alt="Fourth" class="slide"/>
                            <img src="../imgs/5.jpg" alt="Fifth" class="slide"/>
                        </div>
                    </div>
                    <div id="Block">
                       
                       
                        <p>
                           La ville d'Austin est la capitale de l'état du Texas. C'est la quatorzième des villes les plus peuplés des Etats-Unis. <br> L'Université compte à ce jour plus de 50 000 étudiants répartis sur un campus qui s'étend sur 3,4 km². D'après les classements du U.S. News et du World Report, l'Université du Texas à Austin est la meilleure université publique du Texas, ainsi que la quarante-quatrième meilleure université et la douzième meilleure université publique aux États-Unis. 
                        </p>
                        <button id="MIC" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Mic()"><span>MIC </span></button>
                        <button id="IMACS" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Imacs()"><span>IMACS </span></button>
                        <button id="ICBE" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Icbe()"><span>ICBE </span></button>
                        <button id="IC" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Ic()"><span>IC </span></button>
                    </div>
                    <div id="Info_Mic" style="display: none;">
                        <p>Electrical and Computer Engineering <a href="http://www.ece.utexas.edu/graduate/tracks" >Site </a><br> Science, Technology, and Engineering, and Mathematics Education <a href="https://education.utexas.edu/departments/curriculum-instruction/graduate-programs/stem-education" >Site </a><br> </p>
                    </div>
                    <div id="Info_Imacs" style="display: none;">
                       <p>Electrical and Computer Engineering <a href="http://www.ece.utexas.edu/graduate/tracks" >Site </a><br> Physics/Applied Physics <a href="https://ph.utexas.edu/prospective-graduate-students" >Site </a><br> </p>
                    </div>
                    <div id="Info_Icbe" style="display: none;">
                           <p>Biochemistry <a href="https://icmb.utexas.edu/biochemistry" >Site </a><br> Cell and Molecular Biology <a href="https://icmb.utexas.edu/cmb" >Site </a><br>Chemistry <a href="https://cm.utexas.edu/academics/graduate" >Site </a><br> Microbiology <a href="https://icmb.utexas.edu/microbiology/" >Site </a><br></p>
                    </div>
                    <div id="Info_Ic" style="display: none;">
                        <p>Civil Engineering <a href="http://www.caee.utexas.edu/prospective/graduate" >Site </a><br> Mechanical Engineeering <a href="http://www.me.utexas.edu/graduate/" >Site </a><br>Engineeering Mechanics <a href="https://www.ae.utexas.edu/graduate-programs" >Site </a><br> </p>
                    </div>
                    </div>
                </div>
            </div>
            <footer>
                <div class="contact">
                    <nav>
                        <ul>
                            <li><strong>Contacts</strong></li>
                            <li>A propos </li>
                            <li>Aide/Help</li>
                            <li>Forum</li>
                        </ul>
                    </nav>
                </div>
                <div class="ecole">
                    <p>
                        <br>Mario Timani, Abdel Tarnagda, Yacine Benchehida & Michael Ejigu
                        <br>3MIC 2018-2019
                    </p>
                </div>
            </footer>
        </body>
    </html>
