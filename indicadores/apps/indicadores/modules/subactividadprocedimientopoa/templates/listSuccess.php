<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:25:30
?>
<h1>subactividadprocedimientopoa</h1>

<table class="data">
<thead>
<tr>
  <th>Id</th>
  <th>Actividad procedimiento</th>
  <th>Descripcion</th>
  <th>Responsable</th>
  <th>Entregable</th>
  <th>Fecha inicio</th>
  <th>Duracion</th>
  <th>Ponderacion</th>
  <th>Created at</th>
  <th>Updated at</th>
</tr>
</thead>
<tbody>
<?php foreach ($subactividad_procedimiento_poas as $subactividad_procedimiento_poa): ?>
<tr>
    <td><?php echo link_to($subactividad_procedimiento_poa->getId(), 'subactividadprocedimientopoa/show?id='.$subactividad_procedimiento_poa->getId()) ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getActividadProcedimientoId() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getDescripcion() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getResponsable() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getEntregable() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getFechaInicio() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getDuracion() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getPonderacion() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getCreatedAt() ?></td>
      <td><?php echo $subactividad_procedimiento_poa->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'subactividadprocedimientopoa/create') ?>
