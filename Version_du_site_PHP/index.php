<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accueil</title>
        <link rel="stylesheet" href="Css/menu.css"/>
        <link rel="stylesheet" href="Css/app.css">
        <link rel="stylesheet" href="Css/previews.css"/>
        <link rel="stylesheet" href="Css/map.css"/>
        <link rel="stylesheet" href="Css/footer.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="Js/menu.js"></script>
        <script src="jQuery/jquery-3.3.1.js"></script>
        <script src="jQuery/jquery-mousewheel-3.1.13/jquery.mousewheel.js"></script>
        <script src="jQuery/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="Zoom/dist/jquery.zoom-svg.js"></script>
    </head>
    <body>

        <?php include('menu.php');?>

        <div id="main_content">
            <div id="presentation">
                <h1>Site consacré aux semestres à l'étranger</h1>
                <p>
                    Partez pour un semestre à l'étranger pour étudier et améliorer la langue de votre choix et vous ouvrir aux nombreuses opportunités accessibles à l'international.
                    Faire un semestre à l'étranger est le meilleur moyen de se plonger dans une nouvelle culture, et ainsi accelérer l’apprentissage de la langue grâce à une pratique quotienne.
                </p>
              
            </div>

            <?php include('map.php');?>


            <div id="preview_US" class="preview">
                <span  class="preview_close">Close</span><br/>
                <a href="austin.php"><img class="preview_flagcountry" src="imgs/flag_usa.png"></a>

                <div class="preview_container">
                    <div class="preview_namecountry">United States of America</div>
                    <div class="preview_title">Universities</div>

                    <div class="univ_list">
                        <div class="preview_university">
                            <a href="austin.php"><img class="preview_univ_logo" src="imgs/logo_univesity_of_texas_austin.png"></a> <a class="preview_univ_name" href="austin.php">University of Texas</a>
                        </div>
                        <div class="preview_university">
                            <img class="preview_univ_logo" src="imgs/logo_mississippi.jpg"> <a class="preview_univ_name" href="#">University of Mississipi</a>
                        </div>

                    </div>
                </div>

            </div>

            <div id="preview_CN" class="preview">
                <span  class="preview_close">Close</span><br/>
                <a href="uhkong.php"><img class="preview_flagcountry" src="imgs/china_flag.png"></a>

                <div class="preview_container">
                    <div class="preview_namecountry">China</div>
                    <div class="preview_title">Universities</div>

                    <div class="univ_list">
                        <div class="preview_university">
                            <a href="uhkong.php"><img class="preview_univ_logo" src="imgs/logo_hong_kong.jpg"></a> <a class="preview_univ_name" href="uhkong.php">University of Hong Kong</a>
                        </div>

                    </div>
                </div>

            </div>

            <div id="preview_DE" class="preview">
                <span  class="preview_close">Close</span><br/>
                <a href="univberlin.php"><img class="preview_flagcountry" src="imgs/germany_flag.png"></a>

                <div class="preview_container">
                    <div class="preview_namecountry">Germany</div>
                    <div class="preview_title">Universities</div>

                    <div class="univ_list">
                        <div class="preview_university">
                            <a href="univberlin.php"><img class="preview_univ_logo" src="imgs/logo_uhb.png"></a> <a class="preview_univ_name" href="univberlin.php">Humboldt-Universität zu Berlin</a>
                        </div>

                        <div class="preview_university">
                            <img class="preview_univ_logo" src="imgs/logo_tud.png"> <a class="preview_univ_name" href="#">Technische Universität Darmstadt</a>
                        </div>

                    </div>
                </div>

            </div>



        </div>

        <?php include('footer.php');?>

        <script type="text/javascript">
            $('.preview_close').click( function (){
                $('.preview').css({ "visibility": "hidden"});
            });

        </script>
        <script src="Js/previews_plugin.js" type="text/javascript"></script>
        <script type="text/javascript">
            $("#c_DE").previewedBy("#preview_DE");
            $("#c_US").previewedBy("#preview_US");
            $("#c_CN").previewedBy("#preview_CN");
        </script>
      <!--  <script src="Js/previews.js" type="text/javascript"></script> -->
    </body>
</html>