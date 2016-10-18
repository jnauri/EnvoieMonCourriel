<html>
<head>
	<meta charset="utf-8" />

	<title>Envoie Mon Courriel</title>
</head>

<body>
	<h1>Envoie Mon Courriel</h1>

	<p>Envoie Mon Courriel est un petit site pour envoyer vos courriels gratuitement.</p>

	<form action="courriel.php" method="post" id="mon-formulaire">
		<label for="courriel">Quel Courriel</label>
		<input type="text" name="courriel" placeholder="Ex: moi@gmail.com" />

		<label for="sujet">Sujet du message</label>
		<input type="text" name="sujet" placeholder="Ex: Salut !" />

		<label for="message">Mon Message</label>
		<textarea name="message" placeholder="Ex: Bonjour, ...blabla..., Bonne soirée"></textarea>

		<button form="mon-formulaire">J'envoie</button>
		<button type="reset">Vider le formulaire</button>
	</form>
</body>
</html>