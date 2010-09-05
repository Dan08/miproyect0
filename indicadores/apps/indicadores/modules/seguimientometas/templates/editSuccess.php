<?php
// auto-generated by sfPropelCrud
// date: 2010/08/27 15:42:00
?>
<?php use_helper('Object') ?>

<?php echo form_tag('seguimientometas/update') ?>

<?php echo object_input_hidden_tag($seguimiento_indicador_meta, 'getId') ?>

<table>
<tbody>
<tr>
  <th>Indicador meta:</th>
  <td><?php echo object_select_tag($seguimiento_indicador_meta, 'getIndicadorMetaId', array (
  'related_class' => 'IndicadorMeta',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>A&ntilde;o*:</th>
  <td><?php echo select_tag('anyo', options_for_select($years)) ?></td>
</tr>
<tr>
  <th>Valor*:</th>
  <td><?php echo object_input_tag($seguimiento_indicador_meta, 'getValor', array (
  'size' => 7,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($seguimiento_indicador_meta->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'seguimientometas/delete?id='.$seguimiento_indicador_meta->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'seguimientometas/show?id='.$seguimiento_indicador_meta->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'seguimientometas/list') ?>
<?php endif; ?>
</form>
