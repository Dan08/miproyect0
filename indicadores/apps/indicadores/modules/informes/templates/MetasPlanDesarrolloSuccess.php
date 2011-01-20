<table class="data">
<thead>
<tr>
  <th>Codigo</th>
  <th>Meta</th>
  <th>Tipo</th>
  <th>Año 1</th>
  <th>Valor Año 1</th>
  <th>Año 2</th>
  <th>Valor Año 2</th>
  <th>Año 3</th>
  <th>Valor Año 3</th>
  <th>Año 4</th>
  <th>Valor Año 4</th>
</tr>
</thead>
<tbody>
<?php foreach ($metaspd as $meta): ?>
<tr>
  <td><?echo $meta->getMetaPd()->getCodigo() ?></td>
  <td><?echo $meta->getMetaPd() ?></td>
  <td><?echo $meta->getMetaPd()->getTipo() ?></td>
  <td><?echo $meta->getAnualizacion()->getAnyo1() ?></td>
  <td><?echo $meta->getLastValue(1) ?></td>
  <td><?echo $meta->getAnualizacion()->getAnyo2() ?></td>
  <td><?echo $meta->getLastValue(2) ?></td>
  <td><?echo $meta->getAnualizacion()->getAnyo3() ?></td>
  <td><?echo $meta->getLastValue(3) ?></td>
  <td><?echo $meta->getAnualizacion()->getAnyo4() ?></td>
  <td><?echo $meta->getLastValue(4) ?></td>
</tr>
<?php endforeach; ?>
</table>

