<?php
// auto-generated by sfPropelCrud
// date: 2010/08/03 04:03:47
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $actividad_proyecto->getId() ?></td>
</tr>
<tr>
<th>Proyecto: </th>
<td><?php echo $actividad_proyecto->getProyectoId() ?></td>
</tr>
<tr>
<th>Meta pd: </th>
<td><?php echo $actividad_proyecto->getMetaPdId() ?></td>
</tr>
<tr>
<th>Meta proyecto: </th>
<td><?php echo $actividad_proyecto->getMetaProyectoId() ?></td>
</tr>
<tr>
<th>Actividad: </th>
<td><?php echo $actividad_proyecto->getActividad() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $actividad_proyecto->getDescripcion() ?></td>
</tr>
<tr>
<th>Ponderacion: </th>
<td><?php echo $actividad_proyecto->getPonderacion() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $actividad_proyecto->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $actividad_proyecto->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'actividadproyecto/edit?id='.$actividad_proyecto->getId()) ?>
&nbsp;<?php echo link_to('Listar', 'actividadproyecto/list') ?>
