        <div class="page-header">
            <h1>Demande de réservation</h1>
        </div>

		

<h1>
    <?php
		$jour = 0;
		$formatter = new IntlDateFormatter('fr_FR',IntlDateFormatter::FULL, IntlDateFormatter::NONE,'Europe/Paris', IntlDateFormatter::GREGORIAN );
		$date = new DateTime();
		foreach ($tab as $value) {?>
			<form action="../controller/add_reserver.php" method='post'>
				<input type="hidden" name="id" value="<?php echo $value['id_offre'] ;?>"/>
				<?php
				$date->add(new DateInterval('P1D'));
				$jour = $jour + 1;
				if($value['nbplace'] > 0)
				{
				?>
				<button name="reserver" style='margin-right:5px' type="submit" class="btn btn-lg btn-primary"><?php echo $formatter->format($date). "     "; ?><span class="badge"><?php echo $value['nbplace'];?></span></button>
				<?php
				}
				else
				{
				?>
				<button name="reserver" style='margin-right:5px' type="button" class="btn btn-lg btn-primary"><?php echo $formatter->format($date). "     "; ?><span class="badge"><?php echo $value['nbplace'];?></span></button>
				<?php
				}
				?>
				
			</form>
		<?php
		}
		?>
    
</h1>