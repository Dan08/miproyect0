<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:13:51
?>
<?php use_helper('Object') ?>

<?php echo form_tag('clienteactividad/update') ?>

<?php echo object_input_hidden_tag($cliente_actividad, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Cliente:</th>
  <td><?php echo object_select_tag($cliente_actividad, 'getClienteId', array (
  'related_class' => 'Cliente',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Actividad:</th>
  <td><?php echo object_select_tag($cliente_actividad, 'getActividadId', array (
  'related_class' => 'Actividad',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Monto:</th>
  <td><?php echo object_input_tag($cliente_actividad, 'getMonto', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Cantidad:</th>
  <td><?php echo object_input_tag($cliente_actividad, 'getCantidad', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($cliente_actividad->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'clienteactividad/delete?id='.$cliente_actividad->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'clienteactividad/show?id='.$cliente_actividad->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'clienteactividad/list') ?>
<?php endif; ?>
</form>
