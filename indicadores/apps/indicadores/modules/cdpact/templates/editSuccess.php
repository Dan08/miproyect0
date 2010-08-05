<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:22:36
?>
<?php use_helper('Object') ?>

<?php echo form_tag('cdpact/update') ?>

<?php echo object_input_hidden_tag($cdp_actividad, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Cdp:</th>
  <td><?php echo object_select_tag($cdp_actividad, 'getCdpId', array (
  'related_class' => 'Cdp',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Actividad:</th>
  <td><?php echo object_select_tag($cdp_actividad, 'getActividadId', array (
  'related_class' => 'Actividad',
  'include_blank' => true,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($cdp_actividad->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'cdpact/delete?id='.$cdp_actividad->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'cdpact/show?id='.$cdp_actividad->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'cdpact/list') ?>
<?php endif; ?>
</form>
