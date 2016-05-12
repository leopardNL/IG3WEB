<div class="page-header">
    <h1> Ajouter un adhérent</h1>
</div>

		<form class="form-horizontal" role="form" action="../controller/inscription.php" method="post">
                              
            <div class='row'>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="civilite" class="col-sm-2 control-label">Civilit&eacute; :</label>
                            <div class="col-sm-8">
								<input type="radio" name="civilite" checked="checked" value="HOMME"> Monsieur<br>
								<input type="radio" name="civilite" value="FEMME"> Madame<br>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="col-sm-2 control-label">Nom :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nom" id="nom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="col-sm-2 control-label">Prenom :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="prenom" id="prenom" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mail" class="col-sm-2 control-label">Email :</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tel" class="col-sm-2 control-label">T&eacute;l&eacute;phone :</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="tel" id="tel">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="col-sm-2 control-label">Mobile :</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="mobile" id="mobile">
                            </div>
                        </div>					
                        <div class="form-group">

                            <label for="adresse" class="col-sm-2 control-label">Adresse :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="adresse" id="adresse">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cp" class="col-sm-2 control-label">Code Postal :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="cp" id="cp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ville" class="col-sm-2 control-label">Ville :</label>
                            <div class="col-sm-8">
                                <input type="text" name="ville" class="form-control" id="ville">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pays" class="col-sm-2 control-label">Pays :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="pays" id="pays">
                            </div>
                        </div>
						<button type="submit" class="btn btn-lg btn-success col-lg-6">Ajouter</button>
                    </div>			
			</div>
                	
        </form>

    
    </body>
</html>