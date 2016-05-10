<div class="page-header">
    <h1> Liste des adhérents</h1>
</div>
<div class="row">
<p>
<a href="../controller/add_user.php"> <button type="button" class="btn btn-lg btn-success col-lg-6">Ajouter</button> </a>
</p>
</div>
<div class="row">
    <div class="col-md-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Téléphone</th>
					<th></th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
				<?php foreach($tab as $value){ ?>
                <tr>
					<form action="../controller/adherent.php" method='post'>
					<input type="hidden" name="id" value="<?php echo $value['id']; ?>"/>
                    <td> <?php echo $value['nom'] ;?> </td>
                    <td> <?php echo $value['prenom'] ;?> </td>
                    <td> <?php echo $value['mobile'] ;?> </td>
					<th><button type="submit" name="info" class="btn btn-xs btn-info">Info</button></td>
                    <td><button type="submit" name="edit" class="btn btn-xs btn-warning">Modifier</button></td>
                    <td><button type="submit" name="delete" class="btn btn-xs btn-danger">Supprimer</button></td>
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