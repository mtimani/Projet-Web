<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>Université de Hong Kong</title>
            <link rel="stylesheet" href="Css/menu.css">
            <link rel="stylesheet" href="Css/footer.css">
            <link rel="stylesheet" href="Css/semestre.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="Js/semestre.js"></script>
            <script src="Js/buttons.js"></script>
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
                    <h2>UNIVERSITÉ DE HONG KONG</h2>
                    Campus de l'université
                    <a href="https://www.hku.hk/" target="_blank" class="bouton_rouge">Voir site de l'université</a>
                </div>
                <div class="slider" id="main-slider">
                    <div class="slider-wrapper">
                        <img src="imgs/hku/1.jpg" alt="First" class="slide" />
                        <img src="imgs/hku/2.jpg" alt="Second" class="slide" />
                        <img src="imgs/hku/3.jpg" alt="Third" class="slide" />
                        <img src="imgs/hku/4.jpg" alt="Fourth" class="slide"/>
                        <img src="imgs/hku/5.jpg" alt="Fifth" class="slide"/>
                    </div>
                </div>
                <div id="Description">
                    <p>
                      Hong Kong (littéralement : « port aux parfums » ou « port parfumé »), officiellement Région administrative spéciale de Hong Kong de la République populaire de Chine, est la plus grande et la plus peuplée des deux régions administratives spéciales (RAS) de la République populaire de Chine (RPC), l'autre étant Macao. Elle compte environ sept millions d'habitants que l'on appelle Hongkongais (en anglais : Hongkongers) dont l'espérance de vie, de 84,2 ans, est la plus longue au monde en 2017.<br>
                        Dans les classements académiques des universités de recherche du monde publié par l'université Jiao Tong de Shanghai ARWU, l’université de Hong Kong est située entre la 201e et la 300e place à l'échelle mondiale, et à la 2e - 3e place concernant Hong Kong
                    </p>
                    <button id="MIC" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Mic()"><span>MIC </span></button>
                    <button id="IMACS" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Imacs()"><span>IMACS </span></button>
                    <button id="ICBE" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Icbe()"><span>ICBE </span></button>
                    <button id="IC" class="button" style="vertical-align:inherit; background-color: lightslategray" onclick="showText_Ic()"><span>IC </span></button>
                </div>
                <div class="Buttons">
                    <div id="Info_Mic" style="display: none;">
                        <p>Mathematics <a href="http://www.math.hku.hk/" target="_blank">Site</a><br> 
                            Computer Science <a href="https://www.cs.hku.hk/" target="_blank">Site</a><br> 
                            Statistics and Actuarial Science <a href="https://saasweb.hku.hk/" target="_blank">Site</a><br></p>
                    </div>
                    <div id="Info_Imacs" style="display: none;">
                        <p>Electrical and Electronics <a href="https://www.eee.hku.hk/" target="_blank">Site </a><br> Physics/Applied Physics <a href="https://www.physics.hku.hk/" target="_blank">Site </a><br> </p>
                    </div>
                    <div id="Info_Icbe" style="display: none;">
                        <p>Pas d'échanges possible</p>
                    </div>
                    <div id="Info_Ic" style="display: none;">
                        <p>Civil Engineering <a href="http://www.civil.hku.hk/" target="_blank">Site </a><br> Mechanical Engineeering <a href="http://me.hku.hk/" target="_blank">Site </a><br> </p>
                    </div>
                </div>
            </div>

            <?php include('footer.php');?>
        </body>
    </html>

