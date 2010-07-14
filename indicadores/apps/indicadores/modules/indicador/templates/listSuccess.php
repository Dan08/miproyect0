<?php
// auto-generated by sfPropelCrud
// date: 2009/02/04 17:11:54
?>
<h1>indicador</h1>

<table>
<thead>
<tr>
  <th>Indicador</th>
  <th>Objetivo estrategico</th>
  <th>Objetivo del indicador</th>
  <th>Categoria</th>
  <th>Formula textual</th>
  <th>Frecuencia</th>
  <th>Responsable</th>
  <th>Umbral rojo</th>
  <th>Umbral amarillo</th>
  <th>Umbral verde</th>
  <th>Meta</th>
  <th>Iniciativa</th>
</tr>
</thead>
<tbody>
<?php foreach ($indicadors as $i => $indicador): ?>
<tr class="<?php echo fmod($i, 2) ? 'par' : 'impar' ?>">
    <td><?php echo link_to($indicador->getIndicador(), 'indicador/show?id='.$indicador->getId()) ?></td>
      <td><?php echo $indicador->getObjetivo() ?></td>
      <td><?php echo $indicador->getObjetivoEstr() ?></td>
      <td><?php echo $indicador->getCategoria() ?></td>
      <td><?php echo $indicador->getFormulaTextual() ?></td>
      <td><?php echo $indicador->getFrecuencia() ?></td>
      <td><?php echo $indicador->getResponsable() ?></td>
      <td><?php echo $indicador->getUmbralRojo() ?></td>
      <td><?php echo $indicador->getUmbralAmarillo() ?></td>
      <td><?php echo $indicador->getUmbralVerde() ?></td>
      <td><?php echo $indicador->getMeta() ?></td>
      <td><?php echo $indicador->getIniciativa() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
