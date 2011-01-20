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
  <th>Created at</th>
  <th>Updated at</th>
</tr>
</thead>
<tbody>
<?php foreach ($proyectos as $proyecto): ?>
<tr>
    <td><?php echo link_to($proyecto->getCodigo(), 'actividadproyecto/list?proyecto='.$proyecto->getId()) ?></td>
      <td><?php echo $proyecto->getProyecto() ?></td>
      <td><?php echo $proyecto->getDescripcion() ?></td>
      <td><?php echo $proyecto->getMagnitud() ?></td>
      <td><?php echo $proyecto->getProgramaInterno() ?></td>
      <td><?php echo $proyecto->getCreatedAt() ?></td>
      <td><?php echo $proyecto->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'proyecto/create') ?>
