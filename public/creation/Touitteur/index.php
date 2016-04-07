<?
require("model.php");

//Suppression de Touit
if ( isset($_GET["del"]))
	delete($_GET["del"]);

//Ajout d'un plus
if ( isset($_GET["plus"]))
	addPlus($_GET["plus"]);

//Ajout d'un moins
if ( isset($_GET["moins"]))
	addMoins($_GET["moins"]);

//Touit si texte envoyé
if ( isset($_POST["texte"]) )
	touit();

//Récupère les 10 derniers touit
$result = get_touit();

require("view.php");
?>