<section class="sm_orari" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/time.jpg)">
	<div class="sm_orari_title">Orari d'apertura</div>

	<div class="time_table">
		<!-- Lunedi  -->
		<div class="row time_row">
			<div class="sm_orari_day col-xs-12 col-md-6 text-center">Luned&igrave;</div>
			<?php if(!get_field('chiuso_lun')):
			$a = get_field_object('orari_apertura_lun');
			$c = get_field_object('orari_chiusura_lun');
			?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center"><?php echo $a['choices'][$a['value']] ?> - <?php echo $c['choices'][$c['value']] ?></div>
		<?php else : ?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center">Chiuso</div>
		<?php endif;?>
	</div>


	<!-- Martedì  -->
		<div class="row time_row">
			<div class="sm_orari_day col-xs-12 col-md-6 text-center">Marted&igrave;</div>
			<?php if(!get_field('chiuso_mar')):
			$a = get_field_object('orari_apertura_mar');
			$c = get_field_object('orari_chiusura_mar');
			?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center"><?php echo $a['choices'][$a['value']] ?> - <?php echo $c['choices'][$c['value']] ?></div>
		<?php else : ?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center">Chiuso</div>
		<?php endif;?>
	</div>


	<!-- Mercoledì  -->
		<div class="row time_row">
			<div class="sm_orari_day col-xs-12 col-md-6 text-center">Mercoled&igrave;</div>
			<?php if(!get_field('chiuso_mer')):
			$a = get_field_object('orari_apertura_mer');
			$c = get_field_object('orari_chiusura_mer');
			?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center"><?php echo $a['choices'][$a['value']] ?> - <?php echo $c['choices'][$c['value']] ?></div>
		<?php else : ?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center">Chiuso</div>
		<?php endif;?>
	</div>


	<!-- Giovedì  -->
		<div class="row time_row">
			<div class="sm_orari_day col-xs-12 col-md-6 text-center">Gioved&igrave;</div>
			<?php if(!get_field('chiuso_gio')):
			$a = get_field_object('orari_apertura_gio');
			$c = get_field_object('orari_chiusura_gio');
			?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center"><?php echo $a['choices'][$a['value']] ?> - <?php echo $c['choices'][$c['value']] ?></div>
		<?php else : ?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center">Chiuso</div>
		<?php endif;?>
	</div>


	<!-- Venerdì  -->
		<div class="row time_row">
			<div class="sm_orari_day col-xs-12 col-md-6 text-center">Venerd&igrave;</div>
			<?php if(!get_field('chiuso_ven')):
			$a = get_field_object('orari_apertura_ven');
			$c = get_field_object('orari_chiusura_ven');
			?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center"><?php echo $a['choices'][$a['value']] ?> - <?php echo $c['choices'][$c['value']] ?></div>
		<?php else : ?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center">Chiuso</div>
		<?php endif;?>
	</div>


	<!-- Sabato  -->
		<div class="row time_row">
			<div class="sm_orari_day col-xs-12 col-md-6 text-center">Sabato</div>
			<?php if(!get_field('chiuso_sab')):
			$a = get_field_object('orari_apertura_sab');
			$c = get_field_object('orari_chiusura_sab');
			?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center"><?php echo $a['choices'][$a['value']] ?> - <?php echo $c['choices'][$c['value']] ?></div>
		<?php else : ?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center">Chiuso</div>
		<?php endif;?>
	</div>


	<!-- Domenica  -->
		<div class="row time_row">
			<div class="sm_orari_day col-xs-12 col-md-6 text-center">Domenica</div>
			<?php if(!get_field('chiuso_dom')):
			$a = get_field_object('orari_apertura_dom');
			$c = get_field_object('orari_chiusura_dom');
			?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center"><?php echo $a['choices'][$a['value']] ?> - <?php echo $c['choices'][$c['value']] ?></div>
		<?php else : ?>
			<div class="sm_orari_h col-xs-12 col-md-6 text-center">Chiuso</div>
		<?php endif;?>
	</div>

</div>
</section><div class="clear"></div>