<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:16:14
?>
<?php use_helper('Object') ?>

<?php echo form_tag('conceptogasto/update') ?>

<?php echo object_input_hidden_tag($concepto_gasto, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Concepto gasto:</th>
  <td><?php echo object_input_tag($concepto_gasto, 'getConceptoGasto', array (
  'size' => 80,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($concepto_gasto->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'conceptogasto/delete?id='.$concepto_gasto->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'conceptogasto/show?id='.$concepto_gasto->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'conceptogasto/list') ?>
<?php endif; ?>
</form>
