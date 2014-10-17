<?php 
include("vues/v_sommaire.php");
include("vues/v_formulaire.php");
$action = $_REQUEST['action'];


switch($action){

case 'DonneImmat':{
$idVisiteur = $_POST['idVisiteur'];
$immatricul = $_POST['immatricul'];
$pdo->DonneImmat($idVisiteur, $immatricul);
break;
}

case 'SupprImmat':{
$SupprImmat = $_POST['SupprImmat'];
$pdo->SupprImmat($SupprImmat);
break;
}
}
?>