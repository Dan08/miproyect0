<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:24:46
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $fuente_actividad->getId() ?></td>
</tr>
<tr>
<th>Fuente: </th>
<td><?php echo $fuente_actividad->getFuenteId() ?></td>
</tr>
<tr>
<th>Actividad: </th>
<td><?php echo $fuente_actividad->getActividadId() ?></td>
</tr>
<tr>
<th>Monto: </th>
<td><?php echo $fuente_actividad->getMonto() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'fuenteact/edit?id='.$fuente_actividad->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'fuenteact/list') ?>
