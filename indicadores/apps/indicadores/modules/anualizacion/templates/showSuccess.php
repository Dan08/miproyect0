<?php
// auto-generated by sfPropelCrud
// date: 2010/07/02 09:19:41
?>
<table>
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $anualizacion->getId() ?></td>
</tr>
<tr>
<th>Meta pd: </th>
<td><?php echo $anualizacion->getMetaPdId() ?></td>
</tr>
<tr>
<th>Anyo1: </th>
<td><?php echo $anualizacion->getAnyo1() ?></td>
</tr>
<tr>
<th>Anyo2: </th>
<td><?php echo $anualizacion->getAnyo2() ?></td>
</tr>
<tr>
<th>Anyo3: </th>
<td><?php echo $anualizacion->getAnyo3() ?></td>
</tr>
<tr>
<th>Anyo4: </th>
<td><?php echo $anualizacion->getAnyo4() ?></td>
</tr>
<tr>
<th>Created at: </th>
<td><?php echo $anualizacion->getCreatedAt() ?></td>
</tr>
<tr>
<th>Updated at: </th>
<td><?php echo $anualizacion->getUpdatedAt() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('edit', 'anualizacion/edit?id='.$anualizacion->getId()) ?>
&nbsp;<?php echo link_to('list', 'anualizacion/list') ?>
