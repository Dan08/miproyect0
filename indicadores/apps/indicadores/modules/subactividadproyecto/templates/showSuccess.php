<?php
// auto-generated by sfPropelCrud
// date: 2010/08/03 01:36:47
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $subactividad_proyecto->getId() ?></td>
</tr>
<tr>
<th>Actividad proyecto: </th>
<td><?php echo $subactividad_proyecto->getActividadProyectoId() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $subactividad_proyecto->getDescripcion() ?></td>
</tr>
<tr>
<th>Entregable: </th>
<td><?php echo $subactividad_proyecto->getEntregable() ?></td>
</tr>
<tr>
<th>Fecha inicio: </th>
<td><?php echo $subactividad_proyecto->getFechaInicio() ?></td>
</tr>
<tr>
<th>Duracion: </th>
<td><?php echo $subactividad_proyecto->getDuracion() ?></td>
</tr>
<tr>
<th>Ponderacion: </th>
<td><?php echo $subactividad_proyecto->getPonderacion() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $subactividad_proyecto->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $subactividad_proyecto->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'subactividadproyecto/edit?id='.$subactividad_proyecto->getId()) ?>
&nbsp;<?php echo link_to('Listar', 'subactividadproyecto/list') ?>
