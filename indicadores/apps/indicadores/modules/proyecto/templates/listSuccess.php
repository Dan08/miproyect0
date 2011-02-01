<?php
// auto-generated by sfPropelCrud
// date: 2010/07/15 21:17:09
?>
<h1>proyecto</h1>

<table class="data">
<thead>
<tr>
  <th>Codigo</th>
  <th>Proyecto</th>
  <th>Descripcion</th>
  <th>Magnitud</th>
  <th>Programa interno</th>
</tr>
</thead>
<tbody>
<?php foreach ($proyectos as $proyecto): ?>
<tr>
    <td><?php echo link_to($proyecto->getCodigo(), 'proyecto/show?id='.$proyecto->getId()) ?></td>
      <td><?php echo $proyecto->getProyecto() ?></td>
      <td><?php echo $proyecto->getDescripcion() ?></td>
      <td><?php echo $proyecto->getMagnitud() ?></td>
      <td><?php echo $proyecto->getProgramaInterno() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
