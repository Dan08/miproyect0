<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:27:25
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $actividad_poa->getId() ?></td>
</tr>
<tr>
<th>Meta poa: </th>
<td><?php echo $actividad_poa->getMetaPoaId() ?></td>
</tr>
<tr>
<th>Proceso: </th>
<td><?php echo $actividad_poa->getProcesoId() ?></td>
</tr>
<tr>
<th>Tipo: </th>
<td><?php echo $actividad_poa->getTipo() ?></td>
</tr>
<tr>
<th>Procedimiento: </th>
<td><?php echo $actividad_poa->getProcedimientoId() ?></td>
</tr>
<tr>
<th>Proyecto: </th>
<td><?php echo $actividad_poa->getProyectoId() ?></td>
</tr>
<tr>
<th>Actividad: </th>
<td><?php echo $actividad_poa->getActividadId() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $actividad_poa->getDescripcion() ?></td>
</tr>
<tr>
<th>Responsable: </th>
<td><?php echo $actividad_poa->getResponsable() ?></td>
</tr>
<tr>
<th>Observaciones: </th>
<td><?php echo $actividad_poa->getObservaciones() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $actividad_poa->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $actividad_poa->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'actividadpoaproyecto/edit?id='.$actividad_poa->getId()) ?>
&nbsp;<?php echo link_to('list', 'actividadpoaproyecto/list') ?>
