<?php
require_once '../model/gest_offre.php';

if(autorisation($_COOKIE['identifiant'], $_COOKIE['uuid'])) //verifie le couple id - uuid
{


		if (isset($_POST['reserver'])) { //si il a cliqué sur reserver on l'envoie sur le choix de l'enfant
		require_once '../model/liste.php';	
		$enfant = info_enfant2($_COOKIE['identifiant']); 

		include '../view/header_user.php';

		?>
		<br>
		</br>
		<?php


		foreach ($enfant as $value) {?>
					<form action="../controller/add_reserver.php" method='post'>
						<input type="hidden" name="id" value="<?php echo $_POST['id'] ;?>"/>
						<input type="hidden" name="enfant" value="<?php echo $value['id_enfant'] ;?>"/>
						<button name="reserver2" style='margin-right:5px' type="submit" class="btn btn-lg btn-primary"><?php echo $value['prenom_enfant']; ?> </button>	
					</form>
				<?php
				}


		}
		elseif (isset($_POST['reserver2'])) { //si il a cliqué sur reserver après avoir choisi l'enfant

		ajout_resa($_POST['id'], $_POST['enfant']);

		} else {
		 
			echo "comment es-tu venu sur cette page ?";
		 
		}
}
?>