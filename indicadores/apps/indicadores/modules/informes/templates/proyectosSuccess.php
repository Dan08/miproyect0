<?php
  $cuenta = array();
  foreach ($actividades as $actividad)
  {
    $cuenta[$actividad->getActividadProyectoId()]++;
  }
?>
<h1>Informe Ejecucion Proyecto <?php echo $proyecto; ?></h1>

<br />
<h3>Proyecto: <em><?php echo $proyecto; ?></em></h3>
<h3>Porcentaje Ejecucion: <em><?php echo $proyecto->getEjecucion(); ?>%</em></h3>
<h3>Fecha de elaboracion: <em><?php echo date('d/M/Y H:m:s') ?></em></h3>
<br />

<table class="data">
<thead>
<tr>
  <th>Meta Plan Desarrollo</th>
  <th>Meta Proyecto</th>
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
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getMetaPd() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getMetaProyecto() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php ($actividad);echo $actividad->getActividadProyecto() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getEjecucion() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getPonderacion() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getEjecucionPonderada() ?></td>
      <?php $pos +=current($cuenta); next($cuenta); ?>
    <?php endif; ?>

    <td><?echo $actividad ?></td>
    <td><?echo $actividad->getEjecucion() ?></td>
    <?php $total += $actividad->getPonderacion() ?>
    <td><?php echo $actividad->getPonderacion() ?></td>
    <td><?php echo $actividad->getEjecucionPonderada() ?></td>
    <?php $pond += $actividad->getEjecucionPonderada() ?>
  </tr>
  <?php if ($pos == (pos($actividad)+1)): ?>
    <tr>
      <td colspan="8" align="center"><strong>Total Actividad</strong></td>
      <td><strong><?php echo $total; $total = 0; ?></strong></td>
      <td><strong><?php echo $pond; $pond = 0; ?></strong></td>
    </tr>
  <?php endif; ?>
  <?php endforeach; ?>
</tbody>
</table>
