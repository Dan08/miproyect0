<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:25:30
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $subactividad_procedimiento_poa->getId() ?></td>
</tr>
<tr>
<th>Actividad procedimiento: </th>
<td><?php echo $subactividad_procedimiento_poa->getActividadProcedimientoId() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $subactividad_procedimiento_poa->getDescripcion() ?></td>
</tr>
<tr>
<th>Responsable: </th>
<td><?php echo $subactividad_procedimiento_poa->getResponsable() ?></td>
</tr>
<tr>
<th>Entregable: </th>
<td><?php echo $subactividad_procedimiento_poa->getEntregable() ?></td>
</tr>
<tr>
<th>Fecha inicio: </th>
<td><?php echo $subactividad_procedimiento_poa->getFechaInicio() ?></td>
</tr>
<tr>
<th>Duracion: </th>
<td><?php echo $subactividad_procedimiento_poa->getDuracion() ?></td>
</tr>
<tr>
<th>Ponderacion: </th>
<td><?php echo $subactividad_procedimiento_poa->getPonderacion() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $subactividad_procedimiento_poa->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $subactividad_procedimiento_poa->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'subactividadprocedimientopoa/edit?id='.$subactividad_procedimiento_poa->getId()) ?>
&nbsp;<?php echo link_to('list', 'subactividadprocedimientopoa/list') ?>
