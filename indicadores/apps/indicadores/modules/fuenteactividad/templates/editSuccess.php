<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:14:11
?>
<?php use_helper('Object') ?>

<?php echo form_tag('fuenteactividad/update') ?>

<?php echo object_input_hidden_tag($fuente_actividad, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Fuente:</th>
  <td><?php echo object_select_tag($fuente_actividad, 'getFuenteId', array (
  'related_class' => 'Fuente',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Actividad:</th>
  <td><?php echo object_select_tag($fuente_actividad, 'getActividadId', array (
  'related_class' => 'Actividad',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Monto:</th>
  <td><?php echo object_input_tag($fuente_actividad, 'getMonto', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($fuente_actividad->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'fuenteactividad/delete?id='.$fuente_actividad->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'fuenteactividad/show?id='.$fuente_actividad->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'fuenteactividad/list') ?>
<?php endif; ?>
</form>