<center>
<div class="page-header">
    <h1 id="logo"> <img class="styleFloatLeft" alt="" src="../assets/LogoMAM.gif" />  <strong> Vallée des enfants</strong> <span>M.A.M.</span> </h1>
</div>
</center>



<?php foreach($tab as $value){ ?>
<div class="jumbotron">
  <h1><?php echo "  " .  $value['titre_actu']; ?></h1>
  <p><?php echo $value['contenu'] . " --- ". $value['date_actu']; ?></p>
</div>
<?php } ?>


