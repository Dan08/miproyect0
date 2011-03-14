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
  <?php foreach ($clientes as $cliente): ?>
  <th colspan="2"><?php echo $cliente->getCliente() ?></th>
  <?php  endforeach; ?>
</tr>
<tr>
  <?php foreach ($clientes as $cliente): ?>
    <th>Programado</th>
    <th>Ejecutado</th>
  <?php endforeach;?>
</tr>
</thead>
<tbody>
<?php foreach ($proyectos as $proyecto): ?>
  <tr>
    <td><?php echo $proyecto ?></td>
    <?php foreach ($proyecto->getArrayClientes() as $value): ?>
    <td><?php echo $value['pro'] ?></td>
    <td><?php echo $value['eje'] ?></td>
    <?    endforeach; ?>
  </tr>
<?php        endforeach; ?>
</tbody>
</table>
