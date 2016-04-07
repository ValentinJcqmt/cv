<html>
<head>
	<title>Touiteur</title>
	<link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="favicon" href=".img/logo.png" type="image/png">
	<meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
	<div id="main">
		<?
			$row = $result->fetch(PDO::FETCH_ASSOC);
			while ($row != NULL){
		?>
		<article>
			<span class="date">
				<?
					echo $row['date'];
				?>
			</span>
			<a href="controler.php?del=<?echo $row['id'];?>" class="deleteCross">
				X
			</a>
			<br>
			<div class="touit_text">
				<?
					echo $row['texte'];
				?>
			</div>
			<div>
				<a href="controler.php?plus=<?echo $row['id'];?>" class="plus">
					+ <? echo $row['plus'];?>
				</a>		
				<a href="controler.php?moins=<?echo $row['id'];?>" class="moins">
					- <? echo $row['moins'];?>
				</a>
			</div>
			<br>
		</article>
		<?
			$row = $result->fetch(PDO::FETCH_ASSOC);
			}
		?>
		<form method="post" action="./" enctype="multipart/form-data">
			<input type="text" maxlength="200" name="texte" placeholder="Votre Touit..." class="testArea"><br>
			<input type="submit" name="post" value="Touiter!">
		</form>
	</div>
</body>
</html>