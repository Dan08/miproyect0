<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:15:44
?>
<h1>tipogasto</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Tipo gasto</th>
</tr>
</thead>
<tbody>
<?php foreach ($tipo_gastos as $tipo_gasto): ?>
<tr>
    <td><?php echo link_to($tipo_gasto->getId(), 'tipogasto/show?id='.$tipo_gasto->getId()) ?></td>
      <td><?php echo $tipo_gasto->getTipoGasto() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'tipogasto/create') ?>