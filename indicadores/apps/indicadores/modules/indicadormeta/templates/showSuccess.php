<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:15:00
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $indicador_meta->getId() ?></td>
</tr>
<tr>
<th>Meta pd: </th>
<td><?php echo $indicador_meta->getMetaPdId() ?></td>
</tr>
<tr>
<th>Codigo: </th>
<td><?php echo $indicador_meta->getCodigo() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $indicador_meta->getDescripcion() ?></td>
</tr>
<tr>
<th>Magnitud: </th>
<td><?php echo $indicador_meta->getMagnitud() ?></td>
</tr>
<tr>
<th>Anualizacion: </th>
<td><?php echo $indicador_meta->getAnualizacionId() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $indicador_meta->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $indicador_meta->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'indicadormeta/edit?id='.$indicador_meta->getId()) ?>
&nbsp;<?php echo link_to('Listar', 'indicadormeta/list') ?>
