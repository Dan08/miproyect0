<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
  $cuenta = array();
  foreach ($actividades as $actividad)
  {
    $cuenta[$actividad->getActividadProcedimientoId()]++;
  }
?>

<br />
<h3>Informe Avance Procedimiento</h3>
<br />

<table>
<thead>
<tr>
  <th>Actividad</th>
  <th>% Ejecucion</th>
  <th>% Ponderacion</th>
  <th>% Ejecucion Ponderada</th>
  <th>Subactividad</th>
  <th>% Ejecucion</th>
  <th>% Ponderacion</th>
  <th>% Ejecucion Ponderada</th>
</tr>
</thead>
<tbody>
  <?php $pos = $actividades[0]->getId(); $total = 0; $pond = 0; ?>
  <?php foreach ($actividades as $actividad): ?>
  <tr>
    <?php if ($pos == (pos($actividad))): ?>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProcedimientoPoa()->getActividad() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProcedimientoPoa()->getEjecucion() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProcedimientoPoa()->getPonderacion() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProcedimientoPoa()->getEjecucionPonderada() ?></td>
      <?php $pos +=current($cuenta); next($cuenta); ?>
    <? endif; ?>
      <td><?php echo $actividad->getDescripcion() ?></td>
      <td><?php echo $actividad->getEjecucion() ?></td>
      <?php $total += $actividad->getPonderacion() ?>
      <td><?php echo $actividad->getPonderacion() ?></td>
      <?php $pond += $actividad->getEjecucionPonderada() ?>
      <td><?php echo $actividad->getEjecucionPonderada() ?></td>
  </tr>
   <?php if ($pos == (pos($actividad)+1)): ?>
    <tr>
      <td colspan="6" align="center"><strong>Total Actividad</strong></td>
      <td><strong><?php echo $total; $total = 0; ?></strong></td>
      <td><strong><?php echo $pond; $pond = 0; ?></strong></td>
    </tr>
  <?php endif; ?>
  <?php endforeach; ?>
</tbody>
</table>


  