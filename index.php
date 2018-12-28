<?php 
try
{
	$db = new PDO('mysql:host=localhost;dbname=tests', 'root', '');
}
catch (Exception $e)
{
	die('Erreur : ' .$e->getMessage());
}

$q = $db->query('SELECT id, title, content, creation_date FROM articles ORDER BY creation_date DESC LIMIT 0, 5');

require('affichageAcceuil.php');