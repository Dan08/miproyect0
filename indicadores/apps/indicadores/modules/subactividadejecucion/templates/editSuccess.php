<?php
// auto-generated by sfPropelCrud
// date: 2010/08/03 04:05:27
?>
<?php use_helper('Object') ?>

<?php echo form_tag('subactividadejecucion/update') ?>

<?php echo object_input_hidden_tag($subactividad_ejecucion, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Subactividad proyecto:</th>
  <td><?php echo object_select_tag($subactividad_ejecucion, 'getSubactividadProyectoId', array (
  'related_class' => 'SubactividadProyecto',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Mes*:</th>
  <td><?php echo object_input_tag($subactividad_ejecucion, 'getMes', array (
  'size' => 7,
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
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($subactividad_ejecucion->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'subactividadejecucion/delete?id='.$subactividad_ejecucion->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'subactividadejecucion/show?id='.$subactividad_ejecucion->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'subactividadejecucion/list') ?>
<?php endif; ?>
</form>
