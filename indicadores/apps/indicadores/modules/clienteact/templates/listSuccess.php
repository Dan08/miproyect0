<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:24:27
?>
<h1>clienteact</h1>

<table class="data">
<thead>
<tr>
  <th>Id</th>
  <th>Cliente</th>
  <th>Actividad</th>
  <th>Monto</th>
  <th>Cantidad</th>
</tr>
</thead>
<tbody>
<?php foreach ($cliente_actividads as $cliente_actividad): ?>
<tr>
    <td><?php echo link_to($cliente_actividad->getId(), 'clienteact/show?id='.$cliente_actividad->getId()) ?></td>
      <td><?php echo $cliente_actividad->getClienteId() ?></td>
      <td><?php echo $cliente_actividad->getActividadId() ?></td>
      <td><?php echo $cliente_actividad->getMonto() ?></td>
      <td><?php echo $cliente_actividad->getCantidad() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'clienteact/create') ?>
