<?php
// auto-generated by sfPropelCrud
// date: 2010/09/20 19:42:22
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $subactividad_poa_ejecucion->getId() ?></td>
</tr>
<tr>
<th>Subactividad proyecto: </th>
<td><?php echo $subactividad_poa_ejecucion->getSubactividadProyectoId() ?></td>
</tr>
<tr>
<th>Mes: </th>
<td><?php echo $subactividad_poa_ejecucion->getMes() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $subactividad_poa_ejecucion->getDescripcion() ?></td>
</tr>
<tr>
<th>Avance: </th>
<td><?php echo $subactividad_poa_ejecucion->getAvance() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $subactividad_poa_ejecucion->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $subactividad_poa_ejecucion->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'subactividadpoaejecucion/edit?id='.$subactividad_poa_ejecucion->getId()) ?>
&nbsp;<?php echo link_to('list', 'subactividadpoaejecucion/list') ?>
