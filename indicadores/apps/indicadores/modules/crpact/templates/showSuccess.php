<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:22:58
?>
<table class="data">
<tbody>
<tr>
<th>Id: </th>
<td><?php echo $crp_actividad->getId() ?></td>
</tr>
<tr>
<th>Crp: </th>
<td><?php echo $crp_actividad->getCrpId() ?></td>
</tr>
<tr>
<th>Actividad: </th>
<td><?php echo $crp_actividad->getActividadId() ?></td>
</tr>
</tbody>
</table>
<hr />
<?php echo link_to('Editar', 'crpact/edit?id='.$crp_actividad->getId(), 'class="button"') ?>
&nbsp;<?php echo link_to('Listar', 'crpact/list') ?>
