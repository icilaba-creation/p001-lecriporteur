<?php

/* config start */

$recipient = 'contact@lecriporteur.fr';
$site = 'lecriporteur.fr';

/* config end */

session_name("contact");
session_start();

foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}

$from = $_POST['name']." : ".$_POST['mail'];
$object = "Nouveau contact $site : ".$_POST['object'];
$message = "Un nouveau message a �t� post� � partir du site $site :\n\n" .
		"Exp�diteur : ".$_POST['name']."\n" .
		"Mail : ".$_POST['mail']."\n" .
		"Soci�t� : ".$_POST['society']."\n\n" .
		$_POST['message'];

mail ($recipient, $object, $message);

unset($_SESSION['post']);

$_SESSION['sent']=1;
	
if($_SERVER['HTTP_REFERER'])
	header('Location: '.$_SERVER['HTTP_REFERER']);
exit;

?>