<?php
	try {
		$pdo = new PDO('mysql:host=localhost;dbname=lovarda', 'root', '',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$pdo->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		$utasitas = "Select id, nev, email, targy, uzenet From beerkezouzenetek ORDER BY id DESC";
		$eredm = $pdo->query($utasitas);
	}
	catch (PDOException $e) {
		echo "Hiba: ".$e->getMessage();
	}      
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Beérkezett üzenetek</title>
        <meta charset="utf-8">
		<style>
			table, td, tr {
				border: 1px  solid black;
			}
		</style>
    </head>
    <body>
	<h1>Beérkezett üzenetek</h1>
	<table>
	<?php foreach ($eredm as $sor)
		print "<tr><td>" . $sor['id'] . "</td>"  . " <td>" .$sor['nev'] . " <td>" . " <td>" .$sor['email'] . " <td>". " <td>" .$sor['targy'] . " <td>". " <td>" .$sor['uzenet'] . "</td></tr>";
	?>
	</table>
    </body>  
</html>