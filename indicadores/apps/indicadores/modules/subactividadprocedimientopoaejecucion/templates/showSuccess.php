<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:25:44
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $subactividad_procedimiento_poa_ejecucion->getId() ?></td>
</tr>
<tr>
<th>Subactividad poa: </th>
<td><?php echo $subactividad_procedimiento_poa_ejecucion->getSubactividadPoaId() ?></td>
</tr>
<tr>
<th>Mes: </th>
<td><?php echo $subactividad_procedimiento_poa_ejecucion->getMes() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $subactividad_procedimiento_poa_ejecucion->getDescripcion() ?></td>
</tr>
<tr>
<th>Avance: </th>
<td><?php echo $subactividad_procedimiento_poa_ejecucion->getAvance() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $subactividad_procedimiento_poa_ejecucion->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $subactividad_procedimiento_poa_ejecucion->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'subactividadprocedimientopoaejecucion/edit?id='.$subactividad_procedimiento_poa_ejecucion->getId()) ?>
&nbsp;<?php echo link_to('list', 'subactividadprocedimientopoaejecucion/list') ?>