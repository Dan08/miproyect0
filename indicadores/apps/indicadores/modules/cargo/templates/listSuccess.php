<?php
// auto-generated by sfPropelCrud
// date: 2009/03/10 16:40:12
?>
<h1>cargo</h1>

<table class="data">
<thead>
<tr>
  <th>Id</th>
  <th>Nombre</th>
  <th>Dependencia</th>
</tr>
</thead>
<tbody>
<?php foreach ($cargos as $cargo): ?>
<tr>
    <td><?php echo link_to($cargo->getId(), 'cargo/show?id='.$cargo->getId()) ?></td>
      <td><?php echo $cargo->getNombre() ?></td>
      <td><?php echo $cargo->getDependenciaId() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'cargo/create') ?>
