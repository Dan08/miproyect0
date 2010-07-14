<?php use_helper('Object') ?>

<?php if(empty($ind)) :?>
  <strong>No se guardo la medicion: Se han medido todos los periodos</strong>
<?php else: ?>
  <strong>Medicion almacenada, valor <?php echo $ind ?></strong>
<?php endif; ?>
