<div class="page-header">
    <h1> Gestion des offres de places disponibles</h1>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Numéro de l'offre</th>
                    <th>Date AAAA/MM/JJ</th>
                    <th>Nombre de place</th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
				<?php foreach($tab as $value){ ?>
                <tr>
					<form action="../controller/traiter_offre.php" method='post'>
					<input type="hidden" name="id" value="<?php echo $value['id_offre']; ?>"/>
					<td> <?php echo $value['id_offre'];?> </td>
                    <td> <?php echo $value['date_dispo'];?> </td>
                    <td> <?php echo $value['nbplace'];?> </td>
					<th><input name="nbplace" type="number" class="form-control" required></td>
                    <td><button type="submit" name="modifier" class="btn btn-xs btn-danger">Modifier</button></td>
                    </form>
                </tr>

				<?php } ?>
			</tbody>
        </table>
    </div>
	<form action="../controller/traiter_offre.php" method='post'>
	<button type="submit" name="ajouter" class="btn btn-lg btn-primary">Ajouter un jour supplémentaire</button>
	</form>
</div>
</div>