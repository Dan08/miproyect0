<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:24:46
?>
<?php use_helper('Object') ?>

<?php echo form_tag('actividadprocedimientopoa/update') ?>

<?php echo object_input_hidden_tag($actividad_procedimiento_poa, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Procedimiento poa:</th>
  <td><?php echo object_select_tag($actividad_procedimiento_poa, 'getProcedimientoPoaId', array (
  'related_class' => 'ProcedimientoPoa',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Actividad*:</th>
  <td><?php echo object_input_tag($actividad_procedimiento_poa, 'getActividad', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Descripcion:</th>
  <td><?php echo object_textarea_tag($actividad_procedimiento_poa, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Ponderacion*:</th>
  <td><?php echo object_input_tag($actividad_procedimiento_poa, 'getPonderacion', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($actividad_procedimiento_poa->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'actividadprocedimientopoa/delete?id='.$actividad_procedimiento_poa->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'actividadprocedimientopoa/show?id='.$actividad_procedimiento_poa->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'actividadprocedimientopoa/list') ?>
<?php endif; ?>
</form>