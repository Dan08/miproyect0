<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:13:50
?>
<h1>metapd</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Codigo</th>
  <th>Meta</th>
  <th>Descripcion</th>
  <th>Tipo</th>
  <th>Created at</th>
  <th>Updated at</th>
</tr>
</thead>
<tbody>
<?php foreach ($meta_pds as $meta_pd): ?>
<tr>
    <td><?php echo link_to($meta_pd->getId(), 'metapd/show?id='.$meta_pd->getId()) ?></td>
      <td><?php echo $meta_pd->getCodigo() ?></td>
      <td><?php echo $meta_pd->getMeta() ?></td>
      <td><?php echo $meta_pd->getDescripcion() ?></td>
      <td><?php echo $meta_pd->getTipo() ?></td>
      <td><?php echo $meta_pd->getCreatedAt() ?></td>
      <td><?php echo $meta_pd->getUpdatedAt() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'metapd/create') ?>
