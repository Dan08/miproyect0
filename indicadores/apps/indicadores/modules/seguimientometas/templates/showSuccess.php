<?php
// auto-generated by sfPropelCrud
// date: 2010/08/27 15:42:00
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $seguimiento_indicador_meta->getId() ?></td>
</tr>
<tr>
<th>Indicador meta: </th>
<td><?php echo $seguimiento_indicador_meta->getIndicadorMetaId() ?></td>
</tr>
<tr>
<th>Anyo: </th>
<td><?php echo $seguimiento_indicador_meta->getAnyo() ?></td>
</tr>
<tr>
<th>Valor: </th>
<td><?php echo $seguimiento_indicador_meta->getValor() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'seguimientometas/edit?id='.$seguimiento_indicador_meta->getId()) ?>
&nbsp;<?php echo link_to('list', 'seguimientometas/list') ?>