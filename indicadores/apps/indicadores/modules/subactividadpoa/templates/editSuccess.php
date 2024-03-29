<?php
// auto-generated by sfPropelCrud
// date: 2010/09/20 23:38:20
?>
<?php use_helper('Object') ?>

<?php echo form_tag('subactividadpoa/update') ?>

<?php echo object_input_hidden_tag($subactividad_poa, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Procedimiento:</th>
  <td><?php echo object_select_tag($subactividad_poa, 'getProcedimientoId', array (
  'related_class' => 'Procedimiento',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Descripcion:</th>
  <td><?php echo object_textarea_tag($subactividad_poa, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Responsable:</th>
  <td><?php echo object_input_tag($subactividad_poa, 'getResponsable', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Entregable*:</th>
  <td><?php echo object_textarea_tag($subactividad_poa, 'getEntregable', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Fecha inicio*:</th>
  <td><?php echo object_input_date_tag($subactividad_poa, 'getFechaInicio', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Duracion*:</th>
  <td><?php echo object_input_tag($subactividad_poa, 'getDuracion', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Ponderacion*:</th>
  <td><?php echo object_input_tag($subactividad_poa, 'getPonderacion', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($subactividad_poa->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'subactividadpoa/delete?id='.$subactividad_poa->getId(), array('post'=>'true', 'confirm'=>'�Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'subactividadpoa/show?id='.$subactividad_poa->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'subactividadpoa/list') ?>
<?php endif; ?>
</form>
