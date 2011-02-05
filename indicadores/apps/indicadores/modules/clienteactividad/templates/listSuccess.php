<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:13:51
?>
<h1>Clientes por Actividad</h1>

<table class="data">
<thead>
<tr>
  <th>Cliente</th>
  <th>Actividad</th>
  <th>Monto</th>
  <th>Cantidad</th>
</tr>
</thead>
<tbody>
<?php foreach ($cliente_actividads as $cliente_actividad): ?>
<tr>
    <td><?php echo link_to($cliente_actividad->getCliente(), 'clienteactividad/edit?id='.$cliente_actividad->getId().'&actividad='.$cliente_actividad->getActividadId()) ?></td>
      <td><?php echo $cliente_actividad->getActividad()->getDescripcion() ?></td>
      <td><?php echo $cliente_actividad->getMonto() ?></td>
      <td><?php echo $cliente_actividad->getCantidad() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
