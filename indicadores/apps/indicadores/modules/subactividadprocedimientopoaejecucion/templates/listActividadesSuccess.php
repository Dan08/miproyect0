<h1>Seguimiento Procedimientos POA: Actividades</h1>

<table class="data">
<thead>
<tr>
  <th>Procedimiento</th>
  <th>Actividad</th>
  <th>Descripcion</th>
  <th>Ponderacion</th>
</tr>
</thead>
<tbody>
<?php foreach ($actividad_procedimiento_poas as $actividad_procedimiento_poa): ?>
<tr>
    <td><?php echo link_to($actividad_procedimiento_poa->getProcedimientoPoa()->getProcedimiento(), 'subactividadprocedimientopoaejecucion/list?actividad='.$actividad_procedimiento_poa->getId()) ?></td>
      <td><?php echo $actividad_procedimiento_poa->getActividad() ?></td>
      <td><?php echo $actividad_procedimiento_poa->getDescripcion() ?></td>
      <td><?php echo $actividad_procedimiento_poa->getPonderacion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
