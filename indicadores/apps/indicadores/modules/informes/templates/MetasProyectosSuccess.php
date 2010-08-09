<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Informe Metas Plan de Desarrollo - Proyectos</h1>
<table>
<thead>
<tr>
  <th>Meta Plan Desarrollo</th>
  <th>Meta Proyecto</th>
  <th>Proyecto</th>
  <th>% Ejecucion</th>
</tr>
</thead>
<tbody>
  <?php foreach ($metaspd as $meta): ?>
  <tr>
    <td><?php echo $meta->getMetaPd(); ?></td>
    <td><?php echo $meta; ?></td>
    <td><?php echo $meta->getProyecto(); ?></td>
    <td><?php echo link_to($meta->getProyecto()->getEjecucion(), 'informes/proyectos?proyecto='.$meta->getProyecto()->getId()) ?></td>
  </tr>
  <?php endforeach; ?>
</tbody>
</table>