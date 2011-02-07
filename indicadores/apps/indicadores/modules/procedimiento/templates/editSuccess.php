<?php
// auto-generated by sfPropelCrud
// date: 2010/09/16 23:20:05
?>
<?php use_helper('Object') ?>

<?php echo form_tag('procedimiento/update') ?>

<?php echo object_input_hidden_tag($procedimiento, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Proceso:</th>
  <td><?php echo object_select_tag($procedimiento, 'getProcesoId', array (
  'related_class' => 'Proceso',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Nombre:</th>
  <td><?php echo object_input_tag($procedimiento, 'getNombre', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Descripcion:</th>
  <td><?php echo object_textarea_tag($procedimiento, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($procedimiento->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'procedimiento/delete?id='.$procedimiento->getId(), array('post'=>'true', 'confirm'=>'�Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'procedimiento/show?id='.$procedimiento->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'procedimiento/list') ?>
<?php endif; ?>
</form>
