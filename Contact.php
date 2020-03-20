<!DOCTYPE html>
<html lang="fr">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
        $(".FenetreP").hide();
  $("#BoutonO").click(function(){
    $(".FenetreP").show();
    $(".FenetreR").hide();
  });
  $("#BoutonF").click(function(){
    $(".FenetreR").show();
    $(".FenetreP").hide();
  });
});
</script>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Title -->
    <title>Contact</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/img/LOGO.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Header -->
    <header class="header-area">

                <div class="" style="display: ruby-text;">
                        <div class="top-header-content">
                            <p >Bienvenue au ProjetWeb</p>
                        </div>

                        <div >
                            <p><i class="" aria-hidden="true"></i><span class="mx-2"><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a><span class="mx-2"></span><a href="#" target="_blank" class="google-plus"><i class="fa fa-google-plus"></i></a><span class="mx-2"></span><a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a><span class="mx-2"></span></span> | <span class="mx-2"></span> <i class="fa fa-phone" aria-hidden="true"></i> Tel: 06.55.44.33.22</p>
                        </div>
                </div>

        <!-- Header End -->

        <!-- Main Header Start -->
        <div class="">
                    <!-- Classy Menu -->
                    <nav class="">
                        <!-- Menu -->
                        <div class="classy-menu">
                            
                            <!-- Nav Start -->

                            <div class="nav" style="background-color: burlywood;">
                                <a href="index.php" style=""><img class="logo" src="assets/img/LOGO.png" style="width: 5%" alt=""></a>
                            <center>
                                <ul id="nav" style="display: ruby-text;">
                                    <li><a href="index.php" style="margin-right: 20px;">Accueil</a></li>
                                    <li><a href="Shop.php" style="margin-right: 20px;">Shop</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </center>
                        </div>         
                    </nav>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Contact Information Area Start -->
    <center><section class="">
            <div class="row">
                <!-- Single Contact Information -->

                    <div class="">
                        <i class="icon_phone"></i>
                        <h4>Téléphone</h4>
                        <p>06.33.55.66.88</p>
                    </div>

                <!-- Single Contact Information -->

                    <div class="">
                        <i class="icon_pin"></i>
                        <h4>Adresse</h4>
                        <p>54 Rue du moulin 33300 Bordeaux <br> En face du MarketPlace</p>
                    </div>

                <!-- Single Contact Information -->
                    <div class="">
                        <i class="icon_mail"></i>
                        <h4>Email</h4>
                        <p>ProjetWebDu33@gmail.com</p>
                    </div>
            </div>
    </section></center>
    <!-- Contact Information Area End -->

        <!-- Google Maps Start -->
    <div class="">
        <iframe width="0" height="0" ></iframe>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7337.8530463355855!2d-0.5773316596277143!3d44.83930414575696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5527c499aa93f9%3A0x21dc20ba183eaca7!2s54%20Place%20Jean%20Moulin%2C%2033000%20Bordeaux!5e0!3m2!1sfr!2sfr!4v1584713357907!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <!-- Google Maps End -->

       <!-- Contact Area Start -->
       <center>
    <section class="FenetreP" >
        <div class=" text-center">
<button id="BoutonF" name="Ouvrir" class="" style="margin-bottom: 30px;">Prise de Rendez-vous</button>
</div>
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="">
                    <div class="">
                        <h2>Contact Professionnel</h2>
                        <p>Envoyez votre demande</p>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="">
                    <!-- Form -->
                    <form action="" method="POST" class="">
                        <div class="row">
                            <div class="">
                                <input type="text" name="Prenom" class="" placeholder="Prénom">
                            </div>
                            <div class="">
                                <input type="text" name="Nom" class="" placeholder="Nom">
                            </div>
                            <div class="">
                                <input type="email" name="Email" class="" placeholder="Email">
                            </div>
                            <div class="">
                                <input type="tel" name="phone" class=""  placeholder="Numéro">
                            </div>
                            <div class="">
                                <textarea name="Messages" class="" placeholder="Votre message"></textarea>
                            </div>

                             <div class="text-center">
                                <button type="submit" name="EnvoyerP" class="">Envoyer</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
</section>

<?php
if(isset($_POST['EnvoyerP']))
{


        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['Email'] . "\r\n";

        $message = '<h1>Message Site Web ProjetWeb - Contact Pro</h1>
        <p style="text-align: center;"><b> Prenom : </b>' . $_POST['Prenom'] . '<br><br>
        <b>Nom : </b>' . $_POST['Nom'] . '<br><br>
        <b>Email : </b>' . $_POST['Email'] . '<br><br>
        <b>Tel : </b>' . $_POST['phone'] . '<br><br>
        <b>Message : </b><br>' . $_POST['Messages'] . '</p>';

        $retour = mail('ProjetWebDu33@gmail.com', 'Contact Site Web - Pro', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }

?>
</center>

    <!-- Contact Area Start -->
    <center>
    <section class="FenetreR">
        <div class=" text-center">
<button id="BoutonO" name="Ouvrir" class="btn" style="margin-bottom: 30px;">Contact Pro</button>
</div>
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="">
                    <div class="">
                        <h2>Contactez-nous</h2>
                        <p>Votre rendez-vous</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Form -->
                    <form action="" method="POST" class="">
                        <div class="row">
                            <div class="">
                                <input type="text" name="Prenom" class="" placeholder="Prénom">
                            </div>
                            <div class="">
                                <input type="text" name="Nom" class="" placeholder="Nom">
                            </div>
                            <div class="">
                                <input type="email" name="Email" class="" placeholder="Email">
                            </div>
                            <div class="">
                                <input type="tel" name="phone" class=""  placeholder="Numéro">
                            </div>
                            <div class="">
                            <p style="text-align: center;">Date de Rendez-vous:</p><input type="date" name="Date" class="" placeholder="Date">
                            </div>
                            <div class="">
                            <p style="text-align: center;">Votre demande:</p>
                                <select class="" name="demande">
                                    <option value="Pas de demande" selected>-- Choisissez une option --</option>
                                    <optgroup label="===================================================">
                                    <option value="Non">NON</option>
                                    <option value="Rien">Rien</option>
                                    <option value="Tacos">Tacos poulet sauce gruyere</option>
                                    <option value="Autres">Autres</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="">
                                <textarea name="Messages" class="" placeholder="Votre message"></textarea>
                            </div>

                             <div class="">
                                <button type="submit" name="EnvoyerR" class="btn">Envoyer</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>


    <?php
if(isset($_POST['EnvoyerR']))
{


        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['Email'] . "\r\n";

        $message = '<h1>Message Site Web ProjetWeb - Rendez-vous</h1>
        <p style="text-align: center;"><b> Prenom : </b>' . $_POST['Prenom'] . '<br><br>
        <b>Nom : </b>' . $_POST['Nom'] . '<br><br>
        <b>Email : </b>' . $_POST['Email'] . '<br><br>
        <b>Tel : </b>' . $_POST['phone'] . '<br><br>
        <b>Date : </b>' . $_POST['Date'] . '<br><br>
        <b>Demande : </b>' . $_POST['demande'] . '<br><br><br>
        <b>Message : </b><br>' . $_POST['Messages'] . '</p>';

        $retour = mail('ProjetWebDu33@gmail.com', 'Contact Site Web', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }

?>
    </center>
    <!-- Footer Area Start -->
    <footer class="" style="background-color: grey">


                <!-- Single Footer Widget -->
                <div class="" >
                    <div class="">
                        <!-- Widget Title -->
                        <h4 class="widget-title">Réseaux sociaux :</h4>

                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#" target="_blank" class=""><img src="assets/img/facebook.png" style="width: 5%;"></a>
                            <a href="#" target="_blank" class=""><img src="assets/img/google-plus.png" style="width: 5%;"></a>
                            <a href="#" target="_blank" class=""><img style="width: 5%;" src="assets/img/instagram.png"></a>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget -->
                <div class="" style="display: ruby-text; margin-left: 80%; margin-top: 10px;">
                    <div class="">

                        <!-- Widget Title -->
                        <h4 class="">Contact</h4>

                        <!-- Contact Address -->
                        <div class="">
                            <p>Télephone : 06.55.66.88.44</p>
                            <p>E-mail : ProjetWebDu33@gmail.com</p>
                            <p>54 Rue du moulin 33300 Bordeaux <br> En face du MarketPlace</p>
                        </div>
                    </div>
                </div>

                        <div class="container">
            <div class="">

                        <!-- Copywrite Text -->
                        <div class="">
                            <p> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="" aria-hidden="true"></i> by <a href="" target="_blank">ProjetWeb</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>

    </footer>
    <!-- Footer Area End -->

</body>

</html>