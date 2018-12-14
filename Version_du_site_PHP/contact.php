<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <link rel="stylesheet" href="Css/menu.css"/>
        <link rel="stylesheet" href="Css/previews.css"/>
        <link rel="stylesheet" href="Css/app.css">
        <link rel="stylesheet" href="Css/map.css"/>
        <link rel="stylesheet" href="Css/footer.css"/>
        <link rel="stylesheet" href="Css/contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="Js/menu.js"></script>
        <script src="Js/previews.js"></script>
        <script src="jQuery/jquery-3.3.1.js"></script>
        <script src="jQuery/jquery-mousewheel-3.1.13/jquery.mousewheel.js"></script>
        <script src="jQuery/jquery-ui-1.12.1/jquery-ui.js"></script>
        <script src="Zoom/dist/jquery.zoom-svg.js"></script>
    </head>
    <body>
        <?php include('menu.php');?>
        <div id="Main">
            <section class="contact2">
                <div class="section-block">
                    <div class="contact-form">
                        <h1>CONTACTEZ NOUS</h1>
                        <form method="post">
                            <input type="text" name="prenom" size="30" placeholder="Pr&eacute;nom"/><br>
                            <input type="text" name="nom" size="30" placeholder="NOM"/><br>
                            <input type="text" name="email" size="30" placeholder="E-mail"/><br>
                            <input type="textarea" name="message" style="height: 120px" placeholder="Message"/><br>
                            <img src="captcha.php"/>
                            <p>Êtes-vous humain ? <span style="color:#ff0000;">*</span> <input type="text" name="code" placeholder="Rentrez le captcha svp" size="7" /></p>
                            <button>Envoyer</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <?php
            session_start();
            if ($_SERVER['REQUEST_METHOD']=='POST') {
                $nombreErreur = 0;
                if (!isset($_POST['email'])) {
                    $nombreErreur++;
                    $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
                } else {
                    if (empty($_POST['email'])) {
                        $nombreErreur++;
                        $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
                    } else {
                        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $nombreErreur++;
                            $erreur3 = '<p>Cet email ne ressemble pas un email.</p>';
                        }
                    }
                }

                if (!isset($_POST['message'])) {
                    $nombreErreur++;
                    $erreur4 = '<p>Il y a un problème avec la variable "message".</p>';
                } else {
                    if (empty($_POST['message'])) {
                        $nombreErreur++;
                        $erreur5 = '<p>Vous avez oublié de donner un message.</p>';
                    }
                }

                if (!isset($_POST['code'])) {
                    $nombreErreur++;
                    $erreur6 = '<p>Il y a un problème avec la variable "captcha".</p>';
                } else {
                    if($_POST['code'] != $_SESSION['rand_code']) {
                        $nombreErreur++;
                        $erreur7 = '<p>Désolé, le captcha anti-spam est erroné.</p>';
                    }
                }

                if ($nombreErreur==0) { // S'il n'y a pas d'erreur
                    $prenom  = htmlentities($_POST['prenom']);
                    $nom     = htmlentities($_POST['nom']);
                    $email   = htmlentities($_POST['email']);
                    $mdp     = htmlentities($_POST['mdp']);
                    $message = htmlentities($_POST['message']);

                    $destinataire = 'themamyproject@gmail.com';
                    $sujet = 'Message envoyé de la page Contact du Site Projet-Web'; // Titre de l'email
                    $contenu = '<html><head><title>Message envoyé de la page Contact du Site Projet-Web</title></head><body>';
                    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
                    $contenu .= '<p><strong>Prénom</strong>: '.$prenom.'</p>';
                    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
                    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
                    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
                    $contenu .= '</body></html>';
                    $headers = 'MIME-Version: 1.0'."\r\n";
                    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

                    mail($destinataire, $sujet, $contenu, $headers);
                    echo "<script>alert(\"Le message a été envoyé !\")</script>";
                } else {
                    echo '<div style="border:1px solid #ff0000; padding:5px;">';
                    echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
                    if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
                    if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
                    if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
                    if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
                    if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
                    if (isset($erreur6))
                        echo '<p>'.$erreur6.'</p>';
                    if (isset($erreur7))
                        echo '<p>'.$erreur7.'</p>';
                    echo '</div>';
                }
            }
        ?>


        <?php include('footer.php');?>
    </body>
</html>

