<?php
// auto-generated by sfPropelCrud
// date: 2009/03/10 16:39:51
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $dependencia->getId() ?></td>
</tr>
<tr>
<th>Nombre: </th>
<td><?php echo $dependencia->getNombre() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'dependencia/edit?id='.$dependencia->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'dependencia/list') ?>
