<?php
session_start();
include "connexion.php";
$emailUtil = $_POST['email'];
$password = $_POST['password'];


try{

	$req = "SELECT * FROM utilisateur WHERE emailUtil = '$emailUtil'";
	$stmt = $pdo->prepare($req);
	$stmt->execute();
	$donnees = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($password == $donnees['mdpUtil']){


		$_SESSION['id'] = $donnees['id'];
		$_SESSION['prenom'] = $donnees['prenomUtil'];
		$_SESSION['nom'] = $donnees['nomUtil'];
		$_SESSION['rang'] = $donnees['rangUtil'];

		$etatCo = 1;


		echo "<script type='text/javascript'>window.location.replace('../index.php');</script>";
		

	} else {

		echo "<script type='text/javascript'>alert('Veuillez correctement vérifier la validité des informations saisies.');</script>";


		$etatCo = 0;
	}


}

catch(Exception $e){
		print "Erreur ! ".$e->getMessage(). "<br/>"; 
	}

?>

<script type="text/javascript">
<!--
window.location.replace("../index.php");
-->
</script>