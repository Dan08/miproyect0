<?php
// auto-generated by sfPropelCrud
// date: 2009/03/10 15:34:56
?>
<h1>proceso</h1>

<table>
<thead>
<tr>
  <th>Macroproceso</th>
  <th>Proceso</th>
  <th>Descripcion</th>
  <th>Responsable</th>
</tr>
</thead>
<tbody>
<?php foreach ($procesos as $proceso): ?>
<tr>
      <td><?php echo $proceso->getMacroproceso() ?></td>
      <td><?php echo link_to($proceso->getNombre(), 'informes/Poaejecucion?proceso='.$proceso->getId()) ?></td>
      <td><?php echo $proceso->getDescripcion() ?></td>
      <td><?php echo $proceso->getCargo() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
