<?php
// auto-generated by sfPropelCrud
// date: 2010/09/20 23:38:52
?>
<h1>procedimientopoa</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Proceso</th>
  <th>Procedimiento</th>
  <th>Ponderacion</th>
</tr>
</thead>
<tbody>
<?php foreach ($procedimiento_poas as $procedimiento_poa): ?>
<tr>
    <td><?php echo link_to($procedimiento_poa->getId(), 'procedimientopoa/show?id='.$procedimiento_poa->getId()) ?></td>
      <td><?php echo $procedimiento_poa->getProcesoId() ?></td>
      <td><?php echo $procedimiento_poa->getProcedimientoId() ?></td>
      <td><?php echo $procedimiento_poa->getPonderacion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'procedimientopoa/create') ?>
