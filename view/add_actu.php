<div class="page-header">
    <h1> Ajouter un article</h1>
</div>
<center>
		<form class="form-horizontal" role="form" action="../controller/traiter_actu.php" method="post">
                              
            <div class='row'>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nom" class="col-sm-2 control-label">Titre :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="titre" id="titre" required>
                            </div>
                        </div>
                        <div class="form-group">
							<label for="nom" class="col-sm-2 control-label">Contenu :</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="contenu" id="contenu" maxlength="230" required>
							</div>
						</div>
						
						<div>
						<button type="submit" name="add" class="btn btn-lg btn-success col-lg-6">Ajouter</button>
						</div>
						
					</div>			
			</div>
                	
        </form>
</center>
    
    </body>
</html>