<?php
// auto-generated by sfPropelCrud
// date: 2009/02/04 17:13:23
?>
<h1>indicadorvariable</h1>

<table class="data">
<thead>
<tr>
  <th>Indicador</th>
  <th>Variable</th>
</tr>
</thead>
<tbody>
<?php foreach ($indicador_variables as $i => $indicador_variable): ?>
<tr class="<?php echo fmod($i, 2) ? 'par' : 'impar' ?>">
    <td><?php echo link_to($indicador_variable->getIndicador(), 'indicadorvariable/show?id='.$indicador_variable->getId()) ?></td>
      <td><?php echo $indicador_variable->getVariable() ?></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>

<?php echo link_to ('Crear Vinculo', 'indicadorvariable/create', 'class="button"') ?>
