<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:18
?>
<?php use_helper('Object') ?>

<?php echo form_tag('crpactividad/update') ?>

<?php echo object_input_hidden_tag($crp_actividad, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Crp:</th>
  <td><?php echo object_select_tag($crp_actividad, 'getCrpId', array (
  'related_class' => 'Crp',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Actividad:</th>
  <td><?php echo object_select_tag($crp_actividad, 'getActividadId', array (
  'related_class' => 'Actividad',
  'include_blank' => true,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($crp_actividad->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'crpactividad/delete?id='.$crp_actividad->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'crpactividad/show?id='.$crp_actividad->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'crpactividad/list') ?>
<?php endif; ?>
</form>
