<?php
// auto-generated by sfPropelCrud
// date: 2009/02/04 17:12:26
?>
<table class="data">
<tbody>
<tr>
<th>Nombre: </th>
<td><?php echo $variable->getNombre() ?></td>
</tr>
<tr>
<th>Descripcion: </th>
<td><?php echo $variable->getDescripcion() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'variable/edit?id='.$variable->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Regresar a la lista', 'variable/list', 'class="button"') ?>
