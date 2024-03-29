<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:24:46
?>
<?php use_helper('Object') ?>

<?php echo form_tag('fuenteact/update') ?>

<?php echo object_input_hidden_tag($fuente_actividad, 'getId') ?>

<table class="data">
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
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($fuente_actividad->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'fuenteact/delete?id='.$fuente_actividad->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'fuenteact/show?id='.$fuente_actividad->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'fuenteact/list') ?>
<?php endif; ?>
</form>
