<?php
// auto-generated by sfPropelCrud
// date: 2010/12/01 01:23:50
?>
<h1>metas poa</h1>

<table class="data">
<thead>
<tr>
  <th>Meta</th>
  <th>Descripcion</th>
</tr>
</thead>
<tbody>
<?php foreach ($meta_poas as $meta_poa): ?>
<tr>
    <td><?php echo link_to($meta_poa->getMeta(), 'metapoa/show?id='.$meta_poa->getId()) ?></td>
      <td><?php echo $meta_poa->getDescripcion() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
