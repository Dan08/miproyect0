<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:27:25
?>
<?php use_helper('Object') ?>

<?php echo form_tag('actividadpoaproyecto/update') ?>

<?php echo object_input_hidden_tag($actividad_poa, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Meta poa:</th>
  <td><?php echo object_select_tag($actividad_poa, 'getMetaPoaId', array (
  'related_class' => 'MetaPoa',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Proceso:</th>
  <td><?php echo object_select_tag($actividad_poa, 'getProcesoId', array (
  'related_class' => 'Proceso',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Proyecto:</th>
  <td><?php echo object_select_tag($actividad_poa, 'getProyectoId', array (
  'related_class' => 'Proyecto',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Actividad:</th>
  <td><?php echo object_select_tag($actividad_poa, 'getActividadId', array (
  'related_class' => 'ActividadProyecto',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Descripcion*:</th>
  <td><?php echo object_textarea_tag($actividad_poa, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Responsable:</th>
  <td><?php echo object_input_tag($actividad_poa, 'getResponsable', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Observaciones:</th>
  <td><?php echo object_textarea_tag($actividad_poa, 'getObservaciones', array (
  'size' => '30x3',
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($actividad_poa->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'actividadpoaproyecto/delete?id='.$actividad_poa->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'actividadpoaproyecto/show?id='.$actividad_poa->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'actividadpoaproyecto/list') ?>
<?php endif; ?>
</form>