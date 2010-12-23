<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<h1>Plan Contractual: Listar Actividades de Proyecto</h1>

<table>
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
    <td><?php echo link_to($proyecto->getCodigo(), 'informes/ActividadesProyectos?proyecto='.$proyecto->getId()) ?></td>
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