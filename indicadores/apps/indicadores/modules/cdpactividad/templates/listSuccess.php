<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:14:53
?>
<h1>cdpactividad</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Cdp</th>
  <th>Actividad</th>
</tr>
</thead>
<tbody>
<?php foreach ($cdp_actividads as $cdp_actividad): ?>
<tr>
    <td><?php echo link_to($cdp_actividad->getId(), 'cdpactividad/show?id='.$cdp_actividad->getId()) ?></td>
      <td><?php echo $cdp_actividad->getCdpId() ?></td>
      <td><?php echo $cdp_actividad->getActividadId() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'cdpactividad/create') ?>