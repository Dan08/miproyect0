<?php
// auto-generated by sfPropelCrud
// date: 2009/02/04 17:12:45
?>
<h1>objetivo</h1>

<table class="data">
<thead>
<tr>
  <th>Nombre</th>
  <th>Descripcion</th>
  <th>Nombre corto</th>
  <th>Tema</th>
</tr>
</thead>
<tbody>
<?php foreach ($objetivos as $i => $objetivo): ?>
<tr class="<?php echo fmod($i, 2) ? 'par' : 'impar' ?>">
      <td><?php echo link_to($objetivo->getNombre(), 'seguimiento/list?objetivo='.$objetivo->getId()) ?></td>
      <td><?php echo $objetivo->getDescripcion() ?></td>
      <td><?php echo $objetivo->getNombreCorto() ?></td>
      <td><?php echo $objetivo->getTema() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
