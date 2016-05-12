<div class="page-header">
    <h1> Gestion des articles</h1>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Numéro de l'article</th>
                    <th>Date AAAA/MM/JJ</th>
                    <th>Titre</th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
				<?php foreach($tab as $value){ ?>
                <tr>
					<form action="../controller/traiter_actu.php" method='post'>
					<input type="hidden" name="id" value="<?php echo $value['id_actu']; ?>"/>
					<td> <?php echo $value['id_actu'] ;?> </td>
                    <td> <?php echo $value['date_actu'] ;?> </td>
                    <td> <?php echo $value['titre_actu'];?> </td>
                    <td><button type="submit" name="delete" class="btn btn-xs btn-danger">Supprimer</button></td>
                    </form>
                </tr>

				<?php } ?>
            </tbody>
        </table>
    </div>
</div>
</div>