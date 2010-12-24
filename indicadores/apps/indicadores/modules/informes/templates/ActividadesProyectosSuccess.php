<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>actividad</h1>

<table>
<thead>
<tr>
  <th>Descripcion</th>
  <th>Proyecto</th>
  <th>Tipo gasto</th>
  <th>Componente sector</th>
  <th>Concepto gasto</th>
  <th>Cod app fvs</th>
  <th>Meta proyecto</th>
  <th>Inversion recurrente</th>
  <th>Mes etapa contractual</th>
  <th>Mes inicio ejecucion</th>
  <th>Reservas</th>
  <th>Area responsable</th>
  <th>Componente inversion</th>
  <th>Plurianual programado</th>
  <th>Numero solicitud</th>
  <th>Cdp</th>
  <th>Crp</th>
  <th>Fecha solicitud</th>
  <th>Fecha contrato</th>
  <th>Fecha acta inicio</th>
  <th>Fecha terminacion</th>
  <th>Fecha liquidacion</th>
  <th>Plazo meses</th>
  <th>Contrato</th>
  <th>Existencia contrato numero</th>
  <th>Created at</th>
  <th>Updated at</th>
</tr>
</thead>
<tbody>
<?php foreach ($actividads as $actividad): ?>
<tr>
    <td><?php echo link_to($actividad->getDescripcion(), 'actividad/show?id='.$actividad->getId()) ?></td>
      <td><?php echo $actividad->getProyecto() ?></td>
      <td><?php echo $actividad->getTipoGasto() ?></td>
      <td><?php echo $actividad->getComponenteSector() ?></td>
      <td><?php echo $actividad->getConceptoGasto() ?></td>
      <td><?php echo $actividad->getCodAppFvs() ?></td>
      <td><?php echo $actividad->getMetaProyectoId() ?></td>
      <td><?php echo $actividad->getInversionRecurrente() ?></td>
      <td><?php echo $actividad->getMesEtapaContractual() ?></td>
      <td><?php echo $actividad->getMesInicioEjecucion() ?></td>
      <td><?php echo $actividad->getReservas() ?></td>
      <td><?php echo $actividad->getAreaResponsable() ?></td>
      <td><?php echo $actividad->getComponenteInversionId() ?></td>
      <td><?php echo $actividad->getPlurianualProgramado() ?></td>
      <td><?php echo $actividad->getNumeroSolicitud() ?></td>
      <td><?php echo $actividad->getCdp() ?></td>
      <td><?php echo $actividad->getCrp() ?></td>
      <td><?php echo $actividad->getFechaSolicitud() ?></td>
      <td><?php echo $actividad->getFechaContrato() ?></td>
      <td><?php echo $actividad->getFechaActaInicio() ?></td>
      <td><?php echo $actividad->getFechaTerminacion() ?></td>
      <td><?php echo $actividad->getFechaLiquidacion() ?></td>
      <td><?php echo $actividad->getPlazoMeses() ?></td>
      <td><?php echo $actividad->getContratoId() ?></td>
      <td><?php echo $actividad->getExistenciaContratoNumero() ?></td>
      <td><?php echo $actividad->getCreatedAt() ?></td>
      <td><?php echo $actividad->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>