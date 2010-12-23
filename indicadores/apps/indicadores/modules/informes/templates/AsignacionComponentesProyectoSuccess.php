<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Asignacion de Proyectos por Componente</h1>

<table>
<thead>
<tr>
  <th>Componente</th>
  <th>Proyecto</th>
  <th>Monto</th>
</tr>
</thead>
<tbody>
<?php foreach ($componente_proyectos as $componente_proyecto): ?>
<tr>
    <td><?php echo link_to($componente_proyecto->getComponente(), 'componenteproyecto/show?id='.$componente_proyecto->getId()) ?></td>
      <td><?php echo $componente_proyecto->getProyecto() ?></td>
      <td><?php echo $componente_proyecto->getMonto() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
