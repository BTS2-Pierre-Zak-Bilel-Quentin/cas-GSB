﻿    <!-- Division pour le sommaire -->

    <div id="menuGauche">

     <div id="infosUtil">

    

        <h2>

    

</h2>

    

      </div>  

        <ul id="menuList">

			<li >

				  Visiteur :<br>

				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>

         Immatriculation :<br>

        <?php echo $visiteur['Immatriculation'] ?> <br>
			

			</li>

           <li class="smenu">

              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>

           </li>
<?php
if ($_SESSION['nom'] == 'Villechalane')
{
echo' <li class="smenu">
      <a href="index.php?uc=formulaire&action=afficherFormulaire" title="DAF">DAF</a>
      </li>';
}
?>


           <li class="smenu">

              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>

 	   <li class="smenu">

              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>

           </li>

         </ul>
<br><br><br>
 






        

    </div>

    