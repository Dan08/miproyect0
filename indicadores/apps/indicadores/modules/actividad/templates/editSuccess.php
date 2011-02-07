<?php
// auto-generated by sfPropelCrud
// date: 2010/09/24 15:58:02
?>
<?php use_helper('Object') ?>

<?php echo form_tag('actividad/update') ?>

<?php echo object_input_hidden_tag($actividad, 'getId') ?>

<table class="data">
<tbody>
<tr>
  <th>Proyecto:</th>
  <td><?php echo object_select_tag($actividad, 'getProyectoId', array (
  'related_class' => 'Proyecto',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Descripcion:</th>
  <td><?php echo object_textarea_tag($actividad, 'getDescripcion', array (
  'size' => '30x3',
)) ?></td>
</tr>
<tr>
  <th>Tipo gasto:</th>
  <td><?php echo object_select_tag($actividad, 'getTipoGastoId', array (
  'related_class' => 'TipoGasto',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Componente sector:</th>
  <td><?php echo object_select_tag($actividad, 'getComponenteSectorId', array (
  'related_class' => 'ComponenteSector',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Concepto gasto:</th>
  <td><?php echo object_select_tag($actividad, 'getConceptoGastoId', array (
  'related_class' => 'ConceptoGasto',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Cod app fvs:</th>
  <td><?php echo object_input_tag($actividad, 'getCodAppFvs', array (
  'size' => 30,
)) ?></td>
</tr>
<tr>
  <th>Meta proyecto:</th>
  <td><?php echo object_select_tag($actividad, 'getMetaProyectoId', array (
  'related_class' => 'MetaProyecto',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Inversion recurrente:</th>
  <td><?php echo object_checkbox_tag($actividad, 'getInversionRecurrente', array (
)) ?></td>
</tr>
<tr>
  <th>Mes etapa contractual:</th>
  <td><?php echo object_input_tag($actividad, 'getMesEtapaContractual', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Mes inicio ejecucion:</th>
  <td><?php echo object_input_tag($actividad, 'getMesInicioEjecucion', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Reservas:</th>
  <td><?php echo object_input_tag($actividad, 'getReservas', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Area responsable:</th>
  <td><?php echo object_select_tag($actividad, 'getAreaResponsable', array (
  'related_class' => 'Dependencia',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Componente inversion:</th>
  <td><?php echo object_select_tag($actividad, 'getComponenteInversionId', array (
  'related_class' => 'Componente',
  'include_blank' => true,
)) ?></td>
</tr>
<tr>
  <th>Plurianual programado:</th>
  <td><?php echo object_input_tag($actividad, 'getPlurianualProgramado', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Numero solicitud:</th>
  <td><?php echo object_input_tag($actividad, 'getNumeroSolicitud', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Cdp:</th>
  <td><?php echo object_input_tag($actividad, 'getCdp', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Crp:</th>
  <td><?php echo object_input_tag($actividad, 'getCrp', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Fecha solicitud:</th>
  <td><?php echo object_input_date_tag($actividad, 'getFechaSolicitud', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Fecha contrato:</th>
  <td><?php echo object_input_date_tag($actividad, 'getFechaContrato', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Fecha acta inicio:</th>
  <td><?php echo object_input_date_tag($actividad, 'getFechaActaInicio', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Fecha terminacion:</th>
  <td><?php echo object_input_date_tag($actividad, 'getFechaTerminacion', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Fecha liquidacion:</th>
  <td><?php echo object_input_date_tag($actividad, 'getFechaLiquidacion', array (
  'rich' => true,
)) ?></td>
</tr>
<tr>
  <th>Plazo meses:</th>
  <td><?php echo object_input_tag($actividad, 'getPlazoMeses', array (
  'size' => 7,
)) ?></td>
</tr>
<tr>
  <th>Contrato:</th>
  <td><?php echo object_input_tag($actividad, 'getContratoId', array (
  'size' => 20,
)) ?></td>
</tr>
<tr>
  <th>Existencia contrato numero:</th>
  <td><?php echo object_input_tag($actividad, 'getExistenciaContratoNumero', array (
  'size' => 20,
)) ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo submit_tag('save') ?>
<?php if ($actividad->getId()): ?>
  &nbsp;<?php echo link_to('Eliminar', 'actividad/delete?id='.$actividad->getId(), array('post'=>'true', 'confirm'=>'�Esta seguro?', 'class'=>'button')) ?>
  &nbsp;<?php echo link_to('Cancelar', 'actividad/show?id='.$actividad->getId()) ?>
<?php else: ?>
  &nbsp;<?php echo link_to('Cancelar', 'actividad/list') ?>
<?php endif; ?>
</form>
