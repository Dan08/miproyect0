<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:59
?>
<?php use_helper('Object') ?>

<?php echo form_tag('componentesector/update') ?>

<?php echo object_input_hidden_tag($componente_sector, 'getId') ?>

<table>
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
<?php echo submit_tag('save') ?>
<?php if ($componente_sector->getId()): ?>
  &nbsp;<?php echo link_to('delete', 'componentesector/delete?id='.$componente_sector->getId(), 'post=true&confirm=Are you sure?') ?>
  &nbsp;<?php echo link_to('cancel', 'componentesector/show?id='.$componente_sector->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('cancel', 'componentesector/list') ?>
<?php endif; ?>
</form>