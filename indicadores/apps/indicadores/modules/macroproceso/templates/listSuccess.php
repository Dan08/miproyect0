<?php
// auto-generated by sfPropelCrud
// date: 2009/03/10 15:35:10
?>
<h1>macroproceso</h1>

<table>
<thead>
<tr>
  <th>Nombre</th>
  <th>Descripcion</th>
</tr>
</thead>
<tbody>
<?php foreach ($macroprocesos as $macroproceso): ?>
<tr>
    <td><?php echo link_to($macroproceso->getNombre(), 'macroproceso/show?id='.$macroproceso->getId()) ?></td>
      <td><?php echo $macroproceso->getDescripcion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>