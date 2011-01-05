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
  <th>Proyecto</th>
  <th>Componente</th>
  <th>Monto</th>
</tr>
</thead>
<tbody>
<?php foreach ($componente_proyectos as $componente_proyecto): ?>
<tr>
  <td><?php echo $componente_proyecto->getProyecto() ?></td>
  <td><?php echo $componente_proyecto->getComponente() ?></td>
  <td><?php echo $componente_proyecto->getMonto() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
