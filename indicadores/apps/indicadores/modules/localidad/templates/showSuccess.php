<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:13:10
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $localidad->getId() ?></td>
</tr>
<tr>
<th>Localidad: </th>
<td><?php echo $localidad->getLocalidad() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'localidad/edit?id='.$localidad->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'localidad/list') ?>
