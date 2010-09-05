<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:25:11
?>
<?php use_helper('Object') ?>

<?php echo form_tag('componenteact/update') ?>

<?php echo object_input_hidden_tag($componente_actividad, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Componente:</th>
  <td><?php echo object_select_tag($componente_actividad, 'getComponenteId', array (
  'related_class' => 'Componente',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Actividad:</th>
  <td><?php echo object_select_tag($componente_actividad, 'getActividadId', array (
  'related_class' => 'Actividad',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Monto:</th>
  <td><?php echo object_input_tag($componente_actividad, 'getMonto', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($componente_actividad->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'componenteact/delete?id='.$componente_actividad->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'componenteact/show?id='.$componente_actividad->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'componenteact/list') ?>
<?php endif; ?>
</form>
