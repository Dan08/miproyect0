<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:59
?>
<?php use_helper('Object') ?>

<?php echo form_tag('componentesector/update') ?>

<?php echo object_input_hidden_tag($componente_sector, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Componente sector:</th>
  <td><?php echo object_input_tag($componente_sector, 'getComponenteSector', array (
  'size' => 80,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($componente_sector->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'componentesector/delete?id='.$componente_sector->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'componentesector/show?id='.$componente_sector->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'componentesector/list') ?>
<?php endif; ?>
</form>
