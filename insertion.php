<?php
  //connection au serveur
 class PdoGsb{      
        private static $serveur='mysql:host=localhost';
        private static $bdd='dbname=my_enjolrasquentin';      
        private static $user='root' ;       
        private static $mdp='210295' ;  
    private static $monPdo;
    private static $monPdoGsb=null;
    
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */   
/**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoGsb = PdoGsb::getPdoGsb();
 
 * @return l'unique objet de la classe PdoGsb
 */


  $_POST["Immatriculation"] = $Immatriculation;

  $sql = "INSERT  INTO affectationVehicule (Immatriculation) 
            VALUES ('$Immatriculation') " ;

  mysql_query($sql) or die(mysql_error());
  }

?>