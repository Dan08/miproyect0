<?php
// auto-generated by sfPropelCrud
// date: 2010/08/03 01:29:27
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $meta_proyecto->getId() ?></td>
</tr>
<tr>
<th>Meta pd: </th>
<td><?php echo $meta_proyecto->getMetaPdId() ?></td>
</tr>
<tr>
<th>Proyecto: </th>
<td><?php echo $meta_proyecto->getProyectoId() ?></td>
</tr>
<tr>
<th>Codigo: </th>
<td><?php echo $meta_proyecto->getCodigo() ?></td>
</tr>
<tr>
<th>Meta: </th>
<td><?php echo $meta_proyecto->getMeta() ?></td>
</tr>
<tr>
<th>Tipo: </th>
<td><?php echo $meta_proyecto->getTipo() ?></td>
</tr>
<tr>
<th>Objetivo: </th>
<td><?php echo $meta_proyecto->getObjetivoId() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $meta_proyecto->getDescripcion() ?></td>
</tr>
<tr>
<th>Anualizacion: </th>
<td><?php echo $meta_proyecto->getAnualizacionId() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $meta_proyecto->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $meta_proyecto->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'metaproyecto/edit?id='.$meta_proyecto->getId()) ?>
&nbsp;<?php echo link_to('Listar', 'metaproyecto/list') ?>
