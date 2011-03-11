<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:16:28
?>
<h1>seguimiento proyectos: subactividades de proyecto</h1>

<table class="data">
<thead>
<tr>
  <th>Descripcion</th>
  <th>Actividad proyecto</th>
  <th>Fecha inicio</th>
  <th>Duracion</th>
  <th>Ponderacion</th>
</tr>
</thead>
<tbody>
<?php foreach ($subactividad_proyectos as $subactividad_proyecto): ?>
<tr>
    <td><?php echo link_to($subactividad_proyecto->getDescripcion(), 'subactividadejecucion/create?subactividad='.$subactividad_proyecto->getId()) ?></td>
      <td><?php echo $subactividad_proyecto->getActividadProyecto() ?></td>
      <td><?php echo $subactividad_proyecto->getFechaInicio() ?></td>
      <td><?php echo $subactividad_proyecto->getDuracion() ?></td>
      <td><?php echo $subactividad_proyecto->getPonderacion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>