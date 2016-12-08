<?php
/**
 * Created by PhpStorm.
 * User: Aurel Bertrand
 * Date: 04/12/2016
 * Time: 08:55
 */
 include("header.php");
require_once "../localization.php";?>

<section id="hero12" class="hero hero-countdown bg-img" xmlns="http://www.w3.org/1999/html"/>
<div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <h1 class="text-white"><?php echo gettext("Register to newsletter");?></h1>


            <!--<a href="#pricing6-1" class="btn btn-shadow btn-green btn-lg smooth-scroll m-b-md">RESERVE YOUR SEAT</a>-->
        </div>
        <div class="col-md-6 col-md-offset-3 text-white text-center">
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae alias perspiciatis nisi expedita reprehenderi. Sariatur asperiores adipisci et, sint incidunt.</p>-->
        </div>
    </div>
</div>
</section>
<!-- =========================
   FAQ
============================== -->
<section id="faq3-1" class="p-y-lg faqs schedule">
    <div class="container">
    <?php
if(isset($_GET['email'])) // On vérifie que la variable $_GET['email'] existe.
{
    if( !empty($_POST['email']) AND $_GET['email']==1 AND isset($_POST['new'])) /* On vérifie que la variable $_POST['email'] contient bien quelque chose, que la variable $_GET['email'] est égale à 1 et que la variable $_POST['new'] existe. */
    {
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])) // On vérifie qu'on a bien rentré une adresse e-mail valide.
        {
            if($_POST['new']==0) // Si la variable $_POST['new'] est égale à 0, cela signifie que l'on veut s'inscrire.
            {
                // On définit les paramètres de l'e-mail.
                $email = $_POST['email'];
                $message = 'Pour valider votre inscription à la newsletter de familov.com, <a href="http://www.familov.com/shop/inscription.php?tru=1&email='.$email.'">cliquez ici</a>.';
                $destinataire = $email;
                $objet = "Inscription à la newsletter de Familov.com" ;
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: monsite@monsite.fr' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) // On envoie l'e-mail.
                {
                    echo "Pour valider votre inscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                }
                else
                {
                    echo "Il y a eu une erreur lors de l'envoi du mail pour votre inscription.";
                }
            }
            elseif($_POST['new']==1) // Si la variable $_POST['new'] est égale à 1, cela signifie que l'on veut se désinscrire.
            {
                // On définit les paramètres de l'e-mail.
                $email = $_POST['email'];
                $message = 'Pour valider votre désinscription de la newsletter de Familov.com, <a href="http://www.familov.com/shop/desinscription.php?tru=1&email='.$email.'">cliquez ici</a>.';
                $destinataire = $email;
                $objet = "Désinscription de la newsletter de Familov.com" ;
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: hello@familov.com' . "\r\n";
                if ( mail($destinataire, $objet, $message, $headers) ) {
                    echo "Pour valider votre désinscription, veuillez cliquer sur le lien dans l'e-mail que nous venons de vous envoyer.";
                }
                else
                {
                    echo "Il y a eu une erreur lors de l'envoi du mail pour votre désinscription.";
                }
            }
            else
            {
                echo "Il y a eu une erreur !";
            }
        }
        else
        {
            echo "Vous n'avez pas entré une adresse e-mail valide ! Veuillez recommencer !";
        }
    }
    else
    {
        echo "Il y a eu une erreur.";
    }
}
else // Si les champs n'ont pas été remplis.
{
    ?>
    <div id="login-overlay" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title" id="myModalLabel" style ="color:#ec1e73"><?php echo gettext("NEWSLETTER !");?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="well">

                            <div id="errorMessage" class="text-left" style="color:red; display:block; margin-bottom:5px;"></div>
                            <div class="form-horizontal" role="form" >
                                <form method="post" action="newsletter.php?email=1">
                                    <div class="form-group">
                                        <label for=""><?php echo gettext("Your Email Address");?></label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="e.g. name@example.com" required>
                                    </div>
                                    <div class="form-group">
                                        <label for=""><?php echo gettext("Your choice");?></label><br/>
                                        <input type="radio" name="new" value="0" /> <?php echo gettext("Register");?><br/>
                                        <input type="radio" name="new" value="1" /> <?php echo gettext("Unregister");?><br />
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" class="btn btn-blue"><?php echo gettext("Send");?></button>
                                        <button type="submit" name="reset" class="btn btn-red"><?php echo gettext("Reset");?></button>
                                    </div>
                            </div>


                            </form>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <p  class="" style="font-size: 12px"><?php echo gettext("Don't have an account?");?> <a href="signup.php"   style="color:#529800"><?php echo gettext("Sign up");?> </a> </p>
                        <ul class="list-unstyled" style="line-height: 2">
                            <li><span class="fa fa-check text-success"></span><?php echo gettext("Receive all informations");?></li>
                            <li><span class="fa fa-check text-success"></span><?php echo gettext(" See all your orders");?></li>
                            <li><span class="fa fa-check text-success"></span><?php echo gettext(" Fast re-order");?></li>
                            <li><span class="fa fa-check text-success"></span><?php echo gettext(" Be secure");?></li>
                            <li><span class="fa fa-check text-success"></span><?php echo gettext("Get exclusive deals");?></small></li>
                            <!-- <li><a href="how.php"><u>Read more</u></a></li>-->
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

}

?>

    </div><!-- /End Container -->
</section>


<?php include("footer.php"); ?>