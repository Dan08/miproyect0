<?php
  $cuenta = array();
  foreach ($actividades as $actividad) {
    $cuenta[$actividad->getActividadProyectoId()]++;
  }
?>
<h1>Informe Ejecucion Proyecto <?php echo $proyecto; ?></h1>

<br />
<h3>Proyecto: <em><?php echo $proyecto; ?></em></h3>
<h3>Porcentaje Ejecucion: <em><?php echo $proyecto->getEjecucion(); ?></em></h3>
<h3>Fecha de elaboracion: <em><?php echo date('d/M/Y H:m:s') ?></em></h3>
<br />

<table>
<thead>
<tr>
  <th>Actividad</th>
  <th>Meta Plan Desarrollo</th>
  <th>Meta Proyecto</th>
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
  <?php $pos = 0 ?>
  <?php foreach ($actividades as $actividad): ?>
  <tr>
    <?php if ($pos == (pos($actividad)-2)): ?>
      <td rowspan="<?php echo current($cuenta) ?>"><?php ($actividad);echo $actividad->getActividadProyecto() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getMetaPd() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getMetaProyecto() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getEjecucion() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getPonderacion() ?></td>
      <td rowspan="<?php echo current($cuenta) ?>"><?php echo $actividad->getActividadProyecto()->getEjecucionPonderada() ?></td>
      <?php $pos +=current($cuenta); next($cuenta); ?>
    <? endif; ?>

    <td><?echo $actividad ?></td>
    <td><?echo $actividad->getEjecucion() ?></td>
    <?php $total += $actividad->getPonderacion() ?>
    <td><?echo $actividad->getPonderacion() ?></td>
    <td><?echo $actividad->getEjecucionPonderada() ?></td>
  </tr>
  <?php    endforeach; ?>
</tbody>
</table>
