<h1>Cuadro de Mando Integral</h1>
<p>Fecha de elaboracion: <strong><?php echo date('d/M/Y H:m:s') ?></strong></p>

<table class="data">
  <tr>
    <th>Objetivo Estrategico</th>
    <th>Indicador</th>
    <th>Categoria</th>
    <th>Formula de Calculo</th>
    <th class="rojo">Umbral Rojo</th>
    <th class="amarillo">Umbral Amarillo</th>
    <th class="verde">Umbral Verde</th>
    <th>Valor Actual</th>
    <th>Meta</th>
    <th>Iniciativa</th>
  </tr>
<?php $i = 0; ?>
<?php foreach ($objetivos as $objetivo): ?>
  <?php foreach ($objetivo->getInformeCMIAnual($anyo) as $fila): ?>
    <tr class="<?php echo fmod($i++, 2) ? 'par' : 'impar' ?>">
    <?php foreach ($fila as $celda): ?>
      <td><?php echo $celda ?></td>
    <?php endforeach; ?>
    </tr>
  <?php endforeach; ?>
<?php endforeach; ?>
</table>