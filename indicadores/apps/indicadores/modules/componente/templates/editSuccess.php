<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:14:27
?>
<?php use_helper('Object') ?>

<?php echo form_tag('componente/update') ?>

<?php echo object_input_hidden_tag($componente, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Codigo:</th>
  <td><?php echo object_input_tag($componente, 'getCodigo', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Componente:</th>
  <td><?php echo object_input_tag($componente, 'getComponente', array (
  'size' => 80,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($componente->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'componente/delete?id='.$componente->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'componente/show?id='.$componente->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'componente/list') ?>
<?php endif; ?>
</form>
