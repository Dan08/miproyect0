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
  <?php foreach ($clientes as $cliente): ?>
  <th><?php echo $cliente->getCliente() ?></th>
  <?php  endforeach; ?>
</tr>
</thead>
<tbody>
<?php foreach ($proyectos as $proyecto): ?>
  <tr>
    <td><?php echo $proyecto ?></td>
    <?php foreach ($proyecto->getArrayClientes() as $value): ?>
    <td><?php echo $value ?></td>
    <?    endforeach; ?>
  </tr>
<?php        endforeach; ?>
</tbody>
</table>
