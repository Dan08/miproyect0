<?php
// auto-generated by sfPropelCrud
// date: 2010/08/20 03:14:27
?>
<h1>componente</h1>

<table class="data">
<thead>
<tr>
  <th>Id</th>
  <th>Codigo</th>
  <th>Componente</th>
</tr>
</thead>
<tbody>
<?php foreach ($componentes as $componente): ?>
<tr>
    <td><?php echo link_to($componente->getId(), 'componente/show?id='.$componente->getId()) ?></td>
      <td><?php echo $componente->getCodigo() ?></td>
      <td><?php echo $componente->getComponente() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'componente/create') ?>
