<?php
//Version sans autoload
//Variable pour la connexion
$servername = 'localhost';
$username = 'root';
$password = '********';
$bddname = 'coursphp';

//Connexion a la BDD
try{ // on essaye de se connecter
    $dbc = new PDO ("mysql:host=$servername;dbname=$bddname",$username, $password);
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connexion réussie";
}
catch (PDOException $e) { // on intercepte le fatal error qui affiche les données
    //message recu par l'exception
    echo $e->getMessage();
    // Afficher le code de l'erreur
    // echo $e->getCode();
}

// On ferme la connexion
//$dbc = null;
/**
//Création d'une gestion d'erreur
function superZero($nb){
    if ($nb < 0){
        throw new Exception('Nb inférieur à zéro', 2);
    }
    else {
        echo 'Le nombre est supérieur ou égale à 0';
    }
}
//Test d'une erreur
try{
    superZero(-1);
}
catch (Exception $e) {
    echo $e->getMessage().' '.$e->getCode();
}
try{
    superZero(2);
}
catch (Exception $e) {
    echo $e->getMessage().' '.$e->getCode();
}

 * Création d'une BDD:
 * $sql = "CREATE DATABASE maBDD";
 * $dbc->exec($sql);
 *
 * Création d'une table dans la BDD:
 * $sql = "CREATE TABLE maTable(
 * Champ1 INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 * Champ2 VARCHAR(30) NOT NULL,
 * Champ3 VARCHAR(30) NOT NULL)";
 * $dbc->exec($sql);
 *
 * Ajout d'une donnée dans la table
 * $sql = "INSERT INTO maTable(champ1,champ2,champ3)
 * VALUES ('1','Sandy','Poussin')";
 * $dbc->exec($sql);
 *

$reponse = $dbc->query("SELECT * FROM student");

$donnees = $reponse->fetch(PDO::FETCH_ASSOC)

$reponse->closeCursor();
 *


 */