<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:25:44
?>
<h1>subactividadprocedimientopoaejecucion</h1>

<table class="data">
<thead>
<tr>
  <th>Id</th>
  <th>Subactividad poa</th>
  <th>Mes</th>
  <th>Descripcion</th>
  <th>Avance</th>
</tr>
</thead>
<tbody>
<?php foreach ($subactividad_procedimiento_poa_ejecucions as $subactividad_procedimiento_poa_ejecucion): ?>
<tr>
    <td><?php echo link_to($subactividad_procedimiento_poa_ejecucion->getId(), 'subactividadprocedimientopoaejecucion/edit?id='.$subactividad_procedimiento_poa_ejecucion->getId()) ?></td>
      <td><?php echo $subactividad_procedimiento_poa_ejecucion->getSubactividadPoaId()->getDescripcion() ?></td>
      <td><?php echo $subactividad_procedimiento_poa_ejecucion->getMes() ?></td>
      <td><?php echo $subactividad_procedimiento_poa_ejecucion->getDescripcion() ?></td>
      <td><?php echo $subactividad_procedimiento_poa_ejecucion->getAvance() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
