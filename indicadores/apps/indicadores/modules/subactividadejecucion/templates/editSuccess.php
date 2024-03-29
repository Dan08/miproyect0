<?php
// auto-generated by sfPropelCrud
// date: 2010/08/03 04:05:27
?>
<?php use_helper('Object') ?>
<h3>Subactividad: <?php echo $subactividad->getDescripcion(); ?></h3>
<h3>Duracion: <?php echo $subactividad->getDuracion(); ?> meses</h3>
<h3>Porcentaje Avance: <?php echo $subactividad->getEjecucion(); ?>%</h3>
<?php if ($subactividad->getMesMedicion() > 0): ?>

<?php echo form_tag('subactividadejecucion/update') ?>

<?php echo object_input_hidden_tag($subactividad_ejecucion, 'getId') ?>
<?php echo input_hidden_tag('subactividad_proyecto_id', $subactividad->getId()) ?>
<table class="data">
<tbody>
<tr>
  <th>Mes*:</th>
  <td>
    <?php echo $subactividad->getMesMedicion(); ?> de <?php echo $subactividad->getDuracion(); ?>
    <?php echo object_input_tag($subactividad_ejecucion, 'getMes', array (
  'size' => 2,
)) ?></td>
</tr>
<tr>
  <th>Descripcion*:</th>
  <td><?php echo object_textarea_tag($subactividad_ejecucion, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Avance:</th>
  <td><?php echo object_input_tag($subactividad_ejecucion, 'getAvance', array (
  'size' => 2,
)) ?>%</td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($subactividad_ejecucion->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'subactividadejecucion/delete?id='.$subactividad_ejecucion->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'subactividadejecucion/show?id='.$subactividad_ejecucion->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'subactividadejecucion/list') ?>
<?php endif; ?>
</form>
<?php else: ?>
<h1><strong>Se han realizado todas las mediciones</strong></h1>
<?php endif; ?>
