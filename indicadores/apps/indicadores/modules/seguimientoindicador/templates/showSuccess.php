<?php
// auto-generated by sfPropelCrud
// date: 2010/07/02 08:43:10
?>
<table class="data">
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
<?php echo link_to('Editar', 'seguimientoindicador/edit?id='.$seguimiento_indicador_meta->getId()) ?>
&nbsp;<?php echo link_to('Listar', 'seguimientoindicador/list') ?>
