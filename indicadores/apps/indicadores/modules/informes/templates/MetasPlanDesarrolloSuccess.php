<table>
<thead>
<tr>
  <th>Codigo</th>
  <th>Meta</th>
  <th>Tipo</th>
  <th>Año 1</th>
  <th>Año 2</th>
  <th>Año 3</th>
  <th>Año 4</th>
</tr>
</thead>
<tbody>
<?php foreach ($metaspd as $meta): ?>
<tr>
  <td><?echo $meta->getMetaPd()->getCodigo() ?></td>
  <td><?echo $meta->getMetaPd() ?></td>
  <td><?echo $meta->getMetaPd()->getTipo() ?></td>
  <td><?echo $meta->getAnyo1() ?></td>
  <td><?echo $meta->getAnyo2() ?></td>
  <td><?echo $meta->getAnyo3() ?></td>
  <td><?echo $meta->getAnyo4() ?></td>
</tr>
<?php endforeach; ?>
</table>
