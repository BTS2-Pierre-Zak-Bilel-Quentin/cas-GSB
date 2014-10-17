<?php 
include("vues/v_sommaire.php");
include("vues/v_formulaire.php");
$action = $_REQUEST['action'];

$idVisiteur = $_POST['idVisiteur'];
$immatricul = $_POST['immatricul'];
$SupprImmat = $_POST['SupprImmat'];
echo $idVisiteur;
switch($action){

case'DonneImmat':{
$pdo->DonneImmat($idVisiteur, $immatricul);
break;
}

case'SupprImmat':{

$pdo->SupprImmat($SupprImmat);
break;
}
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 2bf7a1fb8a3a27c250be9fbdaac0a391a6ec1df2
