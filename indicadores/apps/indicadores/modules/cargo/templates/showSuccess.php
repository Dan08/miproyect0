<?php
// auto-generated by sfPropelCrud
// date: 2009/03/10 16:40:12
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $cargo->getId() ?></td>
</tr>
<tr>
<th>Nombre: </th>
<td><?php echo $cargo->getNombre() ?></td>
</tr>
<tr>
<th>Dependencia: </th>
<td><?php echo $cargo->getDependenciaId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'cargo/edit?id='.$cargo->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'cargo/list') ?>
