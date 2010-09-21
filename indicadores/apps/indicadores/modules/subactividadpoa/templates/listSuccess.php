<?php
// auto-generated by sfPropelCrud
// date: 2010/09/20 23:38:20
?>
<h1>subactividadpoa</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Procedimiento</th>
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
<?php foreach ($subactividad_poas as $subactividad_poa): ?>
<tr>
    <td><?php echo link_to($subactividad_poa->getId(), 'subactividadpoa/show?id='.$subactividad_poa->getId()) ?></td>
      <td><?php echo $subactividad_poa->getProcedimientoId() ?></td>
      <td><?php echo $subactividad_poa->getDescripcion() ?></td>
      <td><?php echo $subactividad_poa->getResponsable() ?></td>
      <td><?php echo $subactividad_poa->getEntregable() ?></td>
      <td><?php echo $subactividad_poa->getFechaInicio() ?></td>
      <td><?php echo $subactividad_poa->getDuracion() ?></td>
      <td><?php echo $subactividad_poa->getPonderacion() ?></td>
      <td><?php echo $subactividad_poa->getCreatedAt() ?></td>
      <td><?php echo $subactividad_poa->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'subactividadpoa/create') ?>
