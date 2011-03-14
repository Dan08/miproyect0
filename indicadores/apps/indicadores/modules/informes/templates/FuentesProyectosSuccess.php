<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table class="data">
<thead>
<tr>
  <th rowspan="2">Proyecto</th>
  <?php foreach ($fuentes as $fuente): ?>
  	<th colspan="2"><?php echo $fuente->getFuente() ?></th>
  <?php  endforeach; ?>
</tr>
<tr>
  <?php foreach ($fuentes as $fuente):?>
    <th>Programado</th>
    <th>Ejecutado</th>
  <?php endforeach;?>
</tr>
</thead>
<tbody>
<?php foreach ($proyectos as $proyecto): ?>
  <tr>
    <td><?php echo $proyecto ?></td>
    <?php foreach ($proyecto->getArrayFuentes() as $value): ?>
    <td><?php echo $value['pro'] ?></td>
    <td><?php echo $value['eje'] ?></td>
    <?php endforeach; ?>
  </tr>
<?php endforeach; ?>
</tbody>
</table>