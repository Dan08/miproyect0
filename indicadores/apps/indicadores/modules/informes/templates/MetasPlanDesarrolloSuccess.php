<table class="data">
<thead>
<tr>
  <th>Codigo</th>
  <th>Meta</th>
  <th>Tipo</th>
  <th>A&ntilde;o 1</th>
  <th>Valor Año 1</th>
  <th>A&ntilde;o 2</th>
  <th>Valor A&ntilde;o 2</th>
  <th>A&ntilde;o 3</th>
  <th>Valor A&ntilde;o 3</th>
  <th>A&ntilde;o 4</th>
  <th>Valor A&ntilde;o 4</th>
</tr>
</thead>
<tbody>
<?php foreach ($metaspd as $meta): ?>
<tr>
  <td><?php echo $meta->getMetaPd()->getCodigo() ?></td>
  <td><?php echo $meta->getMetaPd() ?></td>
  <td><?php echo $meta->getMetaPd()->getTipo() ?></td>
  <td><?php echo $meta->getAnualizacion()->getAnyo1() ?></td>
  <td><?php echo $meta->getLastValue(1) ?></td>
  <td><?php echo $meta->getAnualizacion()->getAnyo2() ?></td>
  <td><?php echo $meta->getLastValue(2) ?></td>
  <td><?php echo $meta->getAnualizacion()->getAnyo3() ?></td>
  <td><?php echo $meta->getLastValue(3) ?></td>
  <td><?php echo $meta->getAnualizacion()->getAnyo4() ?></td>
  <td><?php echo $meta->getLastValue(4) ?></td>
</tr>
<?php endforeach; ?>
</table>

