<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:18
?>
<h1>crpactividad</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Crp</th>
  <th>Actividad</th>
</tr>
</thead>
<tbody>
<?php foreach ($crp_actividads as $crp_actividad): ?>
<tr>
    <td><?php echo link_to($crp_actividad->getId(), 'crpactividad/show?id='.$crp_actividad->getId()) ?></td>
      <td><?php echo $crp_actividad->getCrpId() ?></td>
      <td><?php echo $crp_actividad->getActividadId() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'crpactividad/create') ?>
