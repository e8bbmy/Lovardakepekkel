<?php
if(isset($_POST['nev']) && isset($_POST['email']) && isset($_POST['targy']) && isset($_POST['uzenet'])) {
    try {
		$dbh = new PDO('mysql:host=localhost;dbname=lovarda', 'root', '',
		array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');

		$sqlInsert = "insert into beerkezouzenetek(id, nev, email, targy, uzenet)
		values(0, :nev, :email, :targy, :uzenet)";


		$stmt = $dbh->prepare($sqlInsert);
		$stmt->execute(array(':nev' => $_POST['nev'], ':email' => $_POST['email'], 
		':targy' => $_POST['targy'], ':uzenet' =>  $_POST['uzenet']));

		}
		catch(PDOException $e)
		{
			
			echo "Hiba: ".$e->getMessage();
			
		}
		}
?>