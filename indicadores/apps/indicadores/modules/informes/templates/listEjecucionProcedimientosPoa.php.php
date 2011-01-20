<?php
var_dump($procesos);
?>
<h1>Informe POA - Procesos</h1>
<table class="data">
<thead>
<tr>
  <th>Proceso</th>
  <th>Procedimiento</th>
  <th>Ponderacion</th>
  <th>% Ejecucion</th>
</tr>
</thead>
<tbody>
  <?php foreach($procesos as $proceso): ?>
  <tr>
    <td><?php echo $proceso->getProcedimiento()->getProceso(); ?></td>
    <td><?php echo $proceso->getProcedimiento();?></td>
    <td><?php echo $proceso->getPonderacion();?></td>
    <td><?php echo 'ejecucion' ?></td>
  </tr>
  <?php  endforeach; ?>
</tbody>
</table>
