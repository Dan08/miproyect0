<h1>Seguimiento Procedimientos POA: Subactividades</h1>

<table class="data">
<thead>
<tr>
  <th>Actividad procedimiento</th>
  <th>Responsable</th>
  <th>Entregable</th>
  <th>Fecha inicio</th>
  <th>Duracion</th>
  <th>Ponderacion</th>
</tr>
</thead>
<tbody>
<?php foreach ($subactividad_procedimiento_poas as $subactividad_procedimiento_poa): ?>
<tr>
    <td><?php echo link_to($subactividad_procedimiento_poa->getDescripcion(), 'subactividadprocedimientopoaejecucion/create?subactividad='.$subactividad_procedimiento_poa->getId()) ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getResponsable() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getEntregable() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getFechaInicio() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getDuracion() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getPonderacion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>