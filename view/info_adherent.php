<?php foreach($tab as $value){
$i = $value['id']; ?>

<div class="page-header">
    <h1> <?php echo $value['prenom']. " " . $value['nom'];?></h1>
</div>
<div>
	<h2><?php echo "Sexe : " . $value['sexe']; ?><h2>
</div>
<div>
	<h2><?php echo "Adresse mail : " . $value['mail']; ?><h2>
</div>
<div>
	<h2><?php echo "Téléphone fix : " . $value['fix']; ?><h2>
</div>
<div>
	<h2><?php echo "Téléphone mobile : " . $value['mobile']; ?><h2>
</div>
<div>
	<h2><?php echo "Adresse : " . $value['adresse'] . " " . $value['codepost'] . " " . $value['ville']; ?><h2>
</div>
<?php } ?>

<div class="panel panel-primary">
            <div class="panel-heading">
              <h1 class="panel-title">Liste des enfants</h1>
            
			<form class="navbar-form navbar-middle" action="../controller/adherent.php" method="post">
					<div class="form-group">
						<input type="hidden" name="id" value="<?php echo $i; ?>"/>
						<input name="prenom" type="text" class="form-control">
					</div>
					<div class="form-group">
						<input name="nom" type="text" class="form-control">
					</div>
					<button type="submit" name="ajouter" class="btn btn-success">Ajouter</button>
			</form>
			
			</div>
            <div class="panel-body">
				<?php foreach($enfant as $value){ ?>
					<div>
					<h3><?php echo $value['prenom_enfant'] . "  " . $value['nom_enfant']; ?></h3>
					</div>
				<?php } ?>
			</div>
</div>




