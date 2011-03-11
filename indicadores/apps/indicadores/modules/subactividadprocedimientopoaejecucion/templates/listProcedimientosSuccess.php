<h1>Seguimiento Procedimientos POA: Procedimientos</h1>

<table class="data">
<thead>
<tr>
  <th>Procedimiento</th>
  <th>Proceso</th>
  <th>Ponderacion</th>
</tr>
</thead>
<tbody>
<?php foreach ($procedimiento_poas as $procedimiento_poa): ?>
<tr>
    <td><?php echo link_to($procedimiento_poa->getProcedimiento(), 'subactividadprocedimientopoaejecucion/list?procedimiento='.$procedimiento_poa->getId()) ?></td>
    <td><?php echo $procedimiento_poa->getProcedimiento()->getProceso() ?>
    <td><?php echo $procedimiento_poa->getPonderacion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
