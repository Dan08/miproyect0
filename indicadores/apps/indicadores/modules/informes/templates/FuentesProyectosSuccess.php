<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<table class="data">
<thead>
<tr>
  <th>Proyecto</th>
  <?php foreach ($fuentes as $fuente): ?>
  <th><?php echo $fuente->getFuente() ?></th>
  <?php  endforeach; ?>
</tr>
</thead>
<tbody>
<?php foreach ($proyectos as $proyecto): ?>
  <tr>
    <td><?php echo $proyecto ?></td>
    <?php foreach ($proyecto->getArrayFuentes() as $value): ?>
    <td><?php echo $value ?></td>
    <?php endforeach; ?>
  </tr>
<?php endforeach; ?>
</tbody>
</table>