<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:22:36
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $cdp_actividad->getId() ?></td>
</tr>
<tr>
<th>Cdp: </th>
<td><?php echo $cdp_actividad->getCdpId() ?></td>
</tr>
<tr>
<th>Actividad: </th>
<td><?php echo $cdp_actividad->getActividadId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'cdpact/edit?id='.$cdp_actividad->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'cdpact/list') ?>
