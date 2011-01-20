<?php
// auto-generated by sfPropelCrud
// date: 2010/07/02 09:19:41
?>
<?php use_helper('Object') ?>

<?php echo form_tag('anualizacion/update') ?>

<?php echo object_input_hidden_tag($anualizacion, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Meta pd:</th>
  <td><?php echo object_select_tag($anualizacion, 'getMetaPdId', array (
  'related_class' => 'MetaPd',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Anyo1:</th>
  <td><?php echo object_input_tag($anualizacion, 'getAnyo1', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Anyo2:</th>
  <td><?php echo object_input_tag($anualizacion, 'getAnyo2', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Anyo3:</th>
  <td><?php echo object_input_tag($anualizacion, 'getAnyo3', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Anyo4:</th>
  <td><?php echo object_input_tag($anualizacion, 'getAnyo4', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($anualizacion->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'anualizacion/delete?id='.$anualizacion->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'anualizacion/show?id='.$anualizacion->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'anualizacion/list') ?>
<?php endif; ?>
</form>
