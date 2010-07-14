<?php
// auto-generated by sfPropelCrud
// date: 2009/02/04 17:12:45
?>
<?php use_helper('Object') ?>

<?php echo form_tag('objetivo/update') ?>

<?php echo object_input_hidden_tag($objetivo, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Nombre:</th>
  <td><?php echo object_input_tag($objetivo, 'getNombre', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Descripcion:</th>
  <td><?php echo object_textarea_tag($objetivo, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Nombre corto:</th>
  <td><?php echo object_input_tag($objetivo, 'getNombreCorto', array (
  'size' => 50,
)) ?></td>
</tr>
<tr>
  <th>Perspectiva:</th>
  <td><?php echo object_input_tag($objetivo, 'getTema', array (
  'size' => 80,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($objetivo->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'objetivo/delete?id='.$objetivo->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'objetivo/show?id='.$objetivo->getId(), 'class="button"') ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'objetivo/list', 'class="button"') ?>
<?php endif; ?>
</form>
