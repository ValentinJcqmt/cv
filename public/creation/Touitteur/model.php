<?
	//connexion à la BdD
	function connect(){
		$cnx = new PDO("mysql:dbname=valentinma16052;host=valentinma16052.mysql.db", "valentinma16052", "24Gagnou24");
		if ( $cnx == NULL ){
			echo "Echec, gros nul!";
			die();
		}
		return $cnx;
	}

	//Enregistrement d'un Touit
	function touit(){
		$cnx = connect();
		$text = $_POST["texte"];
		$requete = "insert into messages (texte, quand, heure) values ('$text', now(), curtime())";
		$cnx->query($requete);
	}

	//Supression d'un Touit
	function delete($id){
		$cnx = connect();
		if ($cnx != null)
			$result = $cnx->query("delete from messages where id='$id'");
	}

	//Ajout de plus
	function addPlus($id){
		$cnx = connect();
		if ($cnx != null){
			$sql = "update messages set plus = plus + 1 where id='$id'";
			$result = $cnx->query($sql);
		}
	}


	//ajout de Moins
	function addMoins($id){
		$cnx = connect();
		if ($cnx != null){
			$sql = "update messages set moins = moins + 1 where id='$id'";
			$result = $cnx->query($sql);
		}
	}

	//Récupération des Touits
	function get_touit(){
		$cnx = connect();
		$sql = "select texte, quand, heure, id, plus, moins from messages order by heure desc limit 0, 10";
		$result = $cnx->query($sql);
		return $result;
	}
?>