<?php
// auto-generated by sfPropelCrud
// date: 2010/07/19 22:10:18
?>
<h1>SubActividades de Proyecto: seleccione una actividad</h1>

<table class="data">
<thead>
<tr>
  <th>Actividad</th>
  <th>Meta Plan Desarrollo</th>
  <th>Descripcion</th>
  <th>Ponderacion</th>
</tr>
</thead>
<tbody>
<?php foreach ($actividad_proyectos as $actividad_proyecto): ?>
<tr>
    <td><?php echo link_to($actividad_proyecto->getActividad(), 'subactividadproyecto/list?actividad='.$actividad_proyecto->getId()) ?></td>
      <td><?php echo $actividad_proyecto->getMetaPd() ?></td>
      <td><?php echo $actividad_proyecto->getDescripcion() ?></td>
      <td><?php echo $actividad_proyecto->getPonderacion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
