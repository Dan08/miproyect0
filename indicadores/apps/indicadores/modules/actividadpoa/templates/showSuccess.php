<?php
// auto-generated by sfPropelCrud
// date: 2010/09/15 21:09:32
?>
<table class="data">
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
<?php echo link_to('edit', 'actividadpoa/edit?id='.$actividad_poa->getId()) ?>
&nbsp;<?php echo link_to('list', 'actividadpoa/list') ?>
