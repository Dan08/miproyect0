<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:25:29
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $contrato->getId() ?></td>
</tr>
<tr>
<th>Numero: </th>
<td><?php echo $contrato->getNumero() ?></td>
</tr>
<tr>
<th>Id contratista: </th>
<td><?php echo $contrato->getIdContratista() ?></td>
</tr>
<tr>
<th>Contratista: </th>
<td><?php echo $contrato->getContratista() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'contrato/edit?id='.$contrato->getId()) ?>
&nbsp;<?php echo link_to('list', 'contrato/list') ?>
