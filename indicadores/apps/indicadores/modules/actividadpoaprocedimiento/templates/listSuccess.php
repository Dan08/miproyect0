<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:27:40
?>
<h1>actividadpoaprocedimiento</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Meta poa</th>
  <th>Proceso</th>
  <th>Tipo</th>
  <th>Procedimiento</th>
  <th>Proyecto</th>
  <th>Actividad</th>
  <th>Descripcion</th>
  <th>Responsable</th>
  <th>Observaciones</th>
  <th>Created at</th>
  <th>Updated at</th>
</tr>
</thead>
<tbody>
<?php foreach ($actividad_poas as $actividad_poa): ?>
<tr>
    <td><?php echo link_to($actividad_poa->getId(), 'actividadpoaprocedimiento/show?id='.$actividad_poa->getId()) ?></td>
      <td><?php echo $actividad_poa->getMetaPoaId() ?></td>
      <td><?php echo $actividad_poa->getProcesoId() ?></td>
      <td><?php echo $actividad_poa->getTipo() ?></td>
      <td><?php echo $actividad_poa->getProcedimientoId() ?></td>
      <td><?php echo $actividad_poa->getProyectoId() ?></td>
      <td><?php echo $actividad_poa->getActividadId() ?></td>
      <td><?php echo $actividad_poa->getDescripcion() ?></td>
      <td><?php echo $actividad_poa->getResponsable() ?></td>
      <td><?php echo $actividad_poa->getObservaciones() ?></td>
      <td><?php echo $actividad_poa->getCreatedAt() ?></td>
      <td><?php echo $actividad_poa->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'actividadpoaprocedimiento/create') ?>
