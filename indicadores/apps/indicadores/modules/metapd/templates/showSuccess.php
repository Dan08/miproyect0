<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:13:50
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $meta_pd->getId() ?></td>
</tr>
<tr>
<th>Codigo: </th>
<td><?php echo $meta_pd->getCodigo() ?></td>
</tr>
<tr>
<th>Meta: </th>
<td><?php echo $meta_pd->getMeta() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $meta_pd->getDescripcion() ?></td>
</tr>
<tr>
<th>Tipo: </th>
<td><?php echo $meta_pd->getTipo() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $meta_pd->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $meta_pd->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'metapd/edit?id='.$meta_pd->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'metapd/list') ?>
