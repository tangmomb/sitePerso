<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
</head>
<style>
body {
	background-color: black;
	color:white;
	font-family : 'Fjalla One';
  text-transform: uppercase;
	padding-top:300px;
}

#confirm {
	width:100%;
	text-align: center;
	font-size:4em;
}

a {
	color:white;
	text-decoration: none;
	font-size: 0.7em;
}

a:hover {
	color: red;
}

</style>
<body>
<?php

// print_r($_POST);

$msg = "";

$msg .= "Message reçu :\n";
$msg .= "De : " . $_POST["prenom"] . "\n";
$msg .= "E-mail : " . $_POST["email"] . "\n";
$msg .= "Message : " . $_POST["message"];

// echo "<pre>" . $msg . "</pre>";

mail("t.mombert@gmail.com", "Message reçu sur mon site", $msg);
?>

<div id="confirm">
	Votre message a bien été envoyé. Merci !<br>
	<a href="index.html">Retour au site</a>
</div>
</body>
</html>