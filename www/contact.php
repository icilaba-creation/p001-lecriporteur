<?php

session_name("contact");
session_start();


/*$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}
*/

$success='';
if($_SESSION['sent'])
{
	$success='<p>Votre messsage a été envoyé.</p><p><strong>Merci!</strong></p>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//FR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Le criporteur [ nous contacter ]</title>
	<link rel="stylesheet" href="lecriporteur/css/base.css" media="all" />
	<link rel="shortcut icon" href="lecriporteur/css/assets/favicon.ico">
	</head>
	<body>
	<noscript>
	<p>Afin de consulter ce site avec une qualit optimale, il est souhaitable que vous activiez le javascript dans votre navigateur.</p>
	</noscript>
	<div id="global-container">
	
	<div id="express-menu">
		<ul>
		<li><a href="blog.html"><span>blog</span></a></li>
		<li><a href="presse.html"><span>presse</span></a></li>
		<li><a href="newsletter.html"><span>newsletter</span></a></li>
		<li><a href="contact.php"><span>contact</span></a></li>
		</ul>
	</div>
	
	<div id="header">
	
		<div id="site-title"class="blanc">
			<span class="premium">le criporteur</span>
			<div id="image-title">
			</div>
			<div id="anime-titre"title="slogan">
			</div>
			<div id="link-home">
			<a href="index.html" title="accueil"></a>
			</div>
			
		
			
			<div id="bloc-citation">
			</div>
			<div id="citation">
			<h1>Citation :</h1><p> "Mets toi ici, en plein milieu de la vie. De là, on voit toute chose dans sa perspective réelle." </p>
			</div>
			<div id="nous-suivre">
			<ul>
			<li><a href="index.html" title="accueil"><span class="grey">accueil</span></a></li>
			<li><a href="newsletter.html" title="newsletter"><span class="grey">newsletter</span></a></li>
			<li><a href="contact.php" title="nous contacter"><span class="white">nous contacter</span></a></li>
			</ul>
			</div>
		
		</div>
		
		<div id="reseau">
			<ul>
			<li id="facebook"><a href="http://www.facebook.com/profile.php?id=1626006231" title="facebook" target="_blank"><span>facebook</span></a></li>
			<li id="twitter"><a href="https://twitter.com/lecriporteur " title="twitter"target="_blank"><span>twitter</span></a></li>
			<li id="myspace"><a href="http://www.myspace.com/549854507 " title="myspace"target="_blank"><span>myspace</span></a></li>
			<li id="viadeo"><a href="http://www.viadeo.com/fr/profile/le.criporteur " title="viadeo"target="_blank"><span>viadeo</span></a></li>
			</ul>
		</div>
		
	</div>
	
    <div id="wrapper">
	<div id="zone-title02"><p>NOUS CONTACTER</p>
	</div>

    <div id="zone-wrapper-principale">
    	<div id="formulaire">
    	<form id='contact-form' method="post" action="submit.php" enctype="multipart/form-data">
						
						<div id="identity"><label for="identity">Nom / Prénom<br>
  							<input name="identity" tabindex="1" size="20" type="text" id="identity">
  						</label></div>
  						
  						<div id="society"><label for="society">Société<br>
  							<input name="society" tabindex="3" size="20" type="text" id="society">
  						</label></div>
  						
  						<div id="mail"><label for="mail">Adresse mail<br>
  							<input name="mail" tabindex="2" size="20" type="text" id="mail">
  						</label></div>
						
  						<div id="object"><label for='object'>Objet<br>
  							<input type='text' name='object' id='object' tabindex='4' size='52'>
  						</label></div>
  						
  						<div id="message"><label for="message">Message<br>
  							<textarea tabindex="5" rows="5" cols="60" name="message" id="message"></textarea>
  						</label></div>
  						
  						<div id="submit"><input type="submit" value="Envoyer" tabindex="6"/></div>
  						
					</form>
					<?=$success?>
    	</div>
    </div>
	
	
	<div id="right-sidebar">
	<div id="cut-short">
	<ul>
			<li id="btn-blog"><a href="blog.html" title="blog Actu Art Rennes"><h2>BLOG ACTU</h2></a></li>
			<li id="btn-savoir-faire"><a href="savoir-faire.html" title="notre savoir-faire"><h2>NOTRE SAVOIR-FAIRE </h2></a></li>
			<li id="btn-prestations"><a href="prestations.html" title="nos prestations"><h2>NOS PRESTATIONS</h2></a></li>
			<li id="btn-artiste"><a href="artistes.html" title="les artistes"><h2>LES ARTISTES</h2></a></li>
			<li id="btn-evenement"><a href="evenements.html" title="nos évènements"><h2>NOS 	&#201;V&#200;NEMENTS</h2></a></li>
			<li id="btn-vosprojets"><a href="vosprojets.html" title="vos projets"><h2>VOS PROJETS</h2></a></li>
			<li id="btn-partenaires"><a href="partenaires.html" title="Nos partenaires"><h2>NOS PARTENAIRES</h2></a></li>
			<li id="btn-presse"><a href="presse.html" title="Notre presse"><h2>PRESSE</h2></a></li>
			<li id="btn-savoir"><a href="index.html" title="accueil"></a></li>
	</ul>
	</div>
	</div>

	</div>
	
	<div id="footer">
	<p >imaginé par <a class="important"href="arts_sceniques_etoiles_de_fond.html">Arts Scéniques Etoiles de Fond.</a> Code Ape : 9001Z - n° Siret : 521 759 837 000 11  -  Licence d'Entrepreneur de Spectacle 2-1039802 et 3-1039803 | <a href="credits.html">crédits</a></p>
	</div>
	</div>
	</body>
	</html>