<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:14:34
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $componente_proyecto->getId() ?></td>
</tr>
<tr>
<th>Componente: </th>
<td><?php echo $componente_proyecto->getComponente() ?></td>
</tr>
<tr>
<th>Proyecto: </th>
<td><?php echo $componente_proyecto->getProyecto() ?></td>
</tr>
<tr>
<th>Monto: </th>
<td><?php echo $componente_proyecto->getMonto() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'componenteproyecto/edit?id='.$componente_proyecto->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'componenteproyecto/list') ?>
