<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:15:40
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $proyecto->getId() ?></td>
</tr>
<tr>
<th>Meta proyecto: </th>
<td><?php echo $proyecto->getMetaProyectoId() ?></td>
</tr>
<tr>
<th>Anualizacion: </th>
<td><?php echo $proyecto->getAnualizacionId() ?></td>
</tr>
<tr>
<th>Codigo: </th>
<td><?php echo $proyecto->getCodigo() ?></td>
</tr>
<tr>
<th>Proyecto: </th>
<td><?php echo $proyecto->getProyecto() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $proyecto->getDescripcion() ?></td>
</tr>
<tr>
<th>Magnitud: </th>
<td><?php echo $proyecto->getMagnitud() ?></td>
</tr>
<tr>
<th>Programa interno: </th>
<td><?php echo $proyecto->getProgramaInterno() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $proyecto->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $proyecto->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'proyecto/edit?id='.$proyecto->getId()) ?>
&nbsp;<?php echo link_to('list', 'proyecto/list') ?>
