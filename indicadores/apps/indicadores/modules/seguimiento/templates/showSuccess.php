<?php
// auto-generated by sfPropelCrud
// date: 2009/02/05 17:13:26
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $historico_variable->getId() ?></td>
</tr>
<tr>
<th>Variable: </th>
<td><?php echo $historico_variable->getVariableId() ?></td>
</tr>
<tr>
<th>Valor: </th>
<td><?php echo $historico_variable->getValor() ?></td>
</tr>
<tr>
<th>Historico indicador: </th>
<td><?php echo $historico_variable->getHistoricoIndicadorId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'seguimiento/edit?id='.$historico_variable->getId()) ?>
&nbsp;<?php echo link_to('list', 'seguimiento/list') ?>
