<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:30
?>
<?php use_helper('Object') ?>

<?php echo form_tag('contrato/update') ?>

<?php echo object_input_hidden_tag($contrato, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Numero:</th>
  <td><?php echo object_input_tag($contrato, 'getNumero', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Contratista:</th>
  <td><?php echo object_input_tag($contrato, 'getContratista', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Fecha firma:</th>
  <td><?php echo object_input_date_tag($contrato, 'getFechaFirma', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Fecha acta inicio:</th>
  <td><?php echo object_input_date_tag($contrato, 'getFechaActaInicio', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Fecha terminacion:</th>
  <td><?php echo object_input_date_tag($contrato, 'getFechaTerminacion', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Fecha liquidacion:</th>
  <td><?php echo object_input_date_tag($contrato, 'getFechaLiquidacion', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Modalidad contratacion:</th>
  <td><?php echo object_input_tag($contrato, 'getModalidadContratacion', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Cantidad:</th>
  <td><?php echo object_input_tag($contrato, 'getCantidad', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Unidad medida:</th>
  <td><?php echo object_input_tag($contrato, 'getUnidadMedida', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Clase contrato:</th>
  <td><?php echo object_input_tag($contrato, 'getClaseContrato', array (
  'size' => 80,
)) ?></td>
</tr>
<tr>
  <th>Plazo:</th>
  <td><?php echo object_input_tag($contrato, 'getPlazo', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Estado:</th>
  <td><?php echo object_input_tag($contrato, 'getEstado', array (
  'size' => 80,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<div id="buttons"> <?php echo submit_tag('Guardar', 'class="button"') ?>
<?php if ($contrato->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'contrato/delete?id='.$contrato->getId(), array('post'=>'true', 'confirm'=>'¿Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'contrato/show?id='.$contrato->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'contrato/list') ?>
<?php endif; ?>
</form>
