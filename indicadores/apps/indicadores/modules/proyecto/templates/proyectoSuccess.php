<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Informe Metas Plan de Desarrollo - Proyectos</h1>
<table class="data">
<thead>
<tr>
  <th>Meta Plan Desarrollo</th>
  <th>Proyecto</th>
  <th>% Ejecucion</th>
</tr>
</thead>
<tbody>
  <?php foreach ($metaspd as $meta): ?>
  <tr>
    <td><?php echo $meta->getMetaPd(); ?></td>
    <td><?php echo $meta->getProyecto(); ?></td>
    <td><?php echo $meta->getProyecto()->getEjecucion(); ?></td>
  </tr>
  <?php endforeach; ?>
</tbody>
</table>