<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:24:22
?>
<h1>procedimientopoa</h1>

<table class="data">
<thead>
<tr>
  <th>Id</th>
  <th>Procedimiento</th>
  <th>Ponderacion</th>
  <th>Created at</th>
  <th>Updated at</th>
</tr>
</thead>
<tbody>
<?php foreach ($procedimiento_poas as $procedimiento_poa): ?>
<tr>
    <td><?php echo link_to($procedimiento_poa->getId(), 'procedimientopoa/show?id='.$procedimiento_poa->getId()) ?></td>
      <td><?php echo $procedimiento_poa->getProcedimientoId() ?></td>
      <td><?php echo $procedimiento_poa->getPonderacion() ?></td>
      <td><?php echo $procedimiento_poa->getCreatedAt() ?></td>
      <td><?php echo $procedimiento_poa->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'procedimientopoa/create') ?>
