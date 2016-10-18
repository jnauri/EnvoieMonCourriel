<?php
if(isset($_POST['courriel'], $_POST['sujet'], isset($_POST['message']))
{
	if(!empty($_POST['courriel']) AND !empty($_POST['sujet']) AND !empty($_POST['message']))
	{
		$courriel = filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL);

		$sujet = htmlentities($_POST['sujet']);
		$message = htmlentities($_POST['message']);

		mail($courriel, $sujet, $message);

		echo '<p style="color: green;">Votre message a bien été envoyé... :)</p>';
	}

	else
		echo '<p style="color: red;">Le champ courriel ou message est manquant, veuillez recommancer :(</p>';
}

else
	echo 'Champs manquants...';