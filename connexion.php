<?php

try
{
	//  On se connecte à mysql
	$pdo = new PDO('mysql:host=localhost;dbname=herbalife;charset=utf8', 'root', '');
} 
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}

?>