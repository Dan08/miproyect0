<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:22:36
?>
<h1>cdpact</h1>

<table class="data">
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
    <td><?php echo link_to($cdp_actividad->getId(), 'cdpact/show?id='.$cdp_actividad->getId()) ?></td>
      <td><?php echo $cdp_actividad->getCdpId() ?></td>
      <td><?php echo $cdp_actividad->getActividadId() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'cdpact/create') ?>
