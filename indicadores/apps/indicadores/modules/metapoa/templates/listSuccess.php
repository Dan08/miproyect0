<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:23:50
?>
<h1>metapoa</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Meta</th>
  <th>Descripcion</th>
  <th>Created at</th>
  <th>Updated at</th>
</tr>
</thead>
<tbody>
<?php foreach ($meta_poas as $meta_poa): ?>
<tr>
    <td><?php echo link_to($meta_poa->getId(), 'metapoa/show?id='.$meta_poa->getId()) ?></td>
      <td><?php echo $meta_poa->getMeta() ?></td>
      <td><?php echo $meta_poa->getDescripcion() ?></td>
      <td><?php echo $meta_poa->getCreatedAt() ?></td>
      <td><?php echo $meta_poa->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'metapoa/create') ?>
