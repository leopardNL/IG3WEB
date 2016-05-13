<div class="page-header">
    <h1> Gestion des réservations</h1>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Numéro de réservation</th>
                    <th>Date AAAA/MM/JJ</th>
                    <th>Prénom et nom de l'enfant</th>
					<th>Etat</th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
				<?php foreach($tab as $value){ ?>
                <tr>
					<form action="../controller/traiter_demande.php" method='post'>
					<input type="hidden" name="id" value="<?php echo $value['id_resa']; ?>"/>
					<input type="hidden" name="id_offre" value="<?php echo $value['id_offre']; ?>"/>
					<td> <?php echo $value['id_resa'] ;?> </td>
                    <td> <?php echo $value['date_dispo'] ;?> </td>
                    <td> <?php echo $value['prenom_enfant'] . " " . $value['nom_enfant'];?> </td>
                    <td> <?php 
							if($value['statut'] == 0) {echo "En attente";}
							elseif($value['statut'] == 1) {echo "Refusé";}
							else {echo "Validé";}		
						?> </td>
					<?php 
					if($value['statut'] == 0)
					{ ?>
					<th><button type="submit" name="valide" class="btn btn-xs btn-info">Valider</button></td>
                    <td><button type="submit" name="refuse" class="btn btn-xs btn-danger">Refuser</button></td>";
					<?php } ?>
                    </form>
                </tr>

				<?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>