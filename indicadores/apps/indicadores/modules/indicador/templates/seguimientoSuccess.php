<?php use_helper('Object') ?>

<h2>Seguimiento Indicador: <?php echo $indicador->getIndicador() ?></h2>
<?php echo form_tag('indicador/updateSeguimiento') ?>

<?php echo object_input_hidden_tag($indicador, 'getId') ?>

<p><strong>Periodo de Medicion: </strong><?php echo $indicador->getLastPeriod(date('Y')) ?></p>
<p><strong>Frecuencia de Medicion: </strong><?php echo $indicador->getFrecuencia() ?>


<?php foreach ($indicador->getArrayVariables() as $key => $value): ?>
  <p><?php echo $value ?>
  <?php echo input_tag('var'.$key) ?></p>
<?php endforeach; ?>
<?php echo textarea_tag('observacion', 'Observaciones', 'size=40x5') ?>
<br />
<?php echo submit_tag('Guardar', 'class="button"') ?>
</form>