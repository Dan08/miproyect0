<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:22:51
?>
<h1>crp</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Numero</th>
  <th>Fecha</th>
  <th>Monto</th>
</tr>
</thead>
<tbody>
<?php foreach ($crps as $crp): ?>
<tr>
    <td><?php echo link_to($crp->getId(), 'crp/show?id='.$crp->getId()) ?></td>
      <td><?php echo $crp->getNumero() ?></td>
      <td><?php echo $crp->getFecha() ?></td>
      <td><?php echo $crp->getMonto() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'crp/create') ?>
