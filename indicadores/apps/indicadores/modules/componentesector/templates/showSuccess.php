<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:59
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $componente_sector->getId() ?></td>
</tr>
<tr>
<th>Componente sector: </th>
<td><?php echo $componente_sector->getComponenteSector() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'componentesector/edit?id='.$componente_sector->getId()) ?>
&nbsp;<?php echo link_to('Listar', 'componentesector/list') ?>
