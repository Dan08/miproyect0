<?php
// auto-generated by sfPropelCrud
// date: 2010/06/29 22:21:03
?>
<h1>localidad</h1>

<table>
<thead>
<tr>
  <th>Id</th>
  <th>Localidad</th>
</tr>
</thead>
<tbody>
<?php foreach ($localidads as $localidad): ?>
<tr>
    <td><?php echo link_to($localidad->getId(), 'localidad/show?id='.$localidad->getId()) ?></td>
      <td><?php echo $localidad->getLocalidad() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('create', 'localidad/create') ?>
