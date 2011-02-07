<?php
// auto-generated by sfPropelCrud
// date: 2010/09/20 19:42:22
?>
<?php use_helper('Object') ?>

<?php echo form_tag('subactividadpoaejecucion/update') ?>

<?php echo object_input_hidden_tag($subactividad_poa_ejecucion, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Subactividad proyecto:</th>
  <td><?php echo object_select_tag($subactividad_poa_ejecucion, 'getSubactividadProyectoId', array (
  'related_class' => 'SubactividadPoa',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Mes*:</th>
  <td><?php echo object_input_tag($subactividad_poa_ejecucion, 'getMes', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Descripcion*:</th>
  <td><?php echo object_textarea_tag($subactividad_poa_ejecucion, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Avance:</th>
  <td><?php echo object_input_tag($subactividad_poa_ejecucion, 'getAvance', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($subactividad_poa_ejecucion->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'subactividadpoaejecucion/delete?id='.$subactividad_poa_ejecucion->getId(), array('post'=>'true', 'confirm'=>'�Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'subactividadpoaejecucion/show?id='.$subactividad_poa_ejecucion->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'subactividadpoaejecucion/list') ?>
<?php endif; ?>
</form>
