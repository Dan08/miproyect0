<?php
// auto-generated by sfPropelCrud
// date: 2009/02/05 17:13:26
?>
<?php use_helper('Object') ?>

<?php echo form_tag('seguimiento/update') ?>

<?php echo object_input_hidden_tag($historico_variable, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Variable:</th>
  <td><?php echo object_select_tag($historico_variable, 'getVariableId', array (
  'related_class' => 'Variable',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Valor:</th>
  <td><?php echo object_input_tag($historico_variable, 'getValor', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Historico indicador:</th>
  <td><?php echo object_select_tag($historico_variable, 'getHistoricoIndicadorId', array (
  'related_class' => 'HistoricoIndicador',
  'include_blank' => true,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($historico_variable->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'seguimiento/delete?id='.$historico_variable->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'seguimiento/show?id='.$historico_variable->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'seguimiento/list') ?>
<?php endif; ?>
</form>
