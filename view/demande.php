<div class="page-header">
    <h1> Mes demandes</h1>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead>
                <tr>
					<th>Numéro de réservation</th>
                    <th>Date AAAA/MM/JJ</th>
                    <th>Prénom de l'enfant</th>
                    <th>Etat</th>
					<th></th>                
                </tr>
            </thead>
            <tbody>
				<?php foreach($tab as $value){ ?>
                <tr>
					<form action="../controller/supp_demande.php" method='post'>
					<input type="hidden" name="id_resa" value="<?php echo $value['id_resa'] ;?>"/>
					<td> <?php echo $value['id_offre'] ;?> </td>
                    <td> <?php echo $value['date_dispo'] ;?> </td>
                    <td> <?php echo $value['prenom_enfant'] ;?> </td>
                    <td> <?php 
							if($value['statut'] == 0) {echo "En attente";}
							elseif($value['statut'] == 1) {echo "Refusé";}
							else {echo "Validé";}		
					?> </td>
                    <td><button type="submit" class="btn btn-xs btn-danger">Supprimer</button></td>
                    </form>
                </tr>

				<?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>


    
    </body>
</html>