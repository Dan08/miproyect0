<?php use_helper('Object') ?>
<script language="javascript">
  function pasteVars()
  {
    formula = document.form1.formula.value;
    variable = "$var"+document.form1.variables.value;
    document.form1.formula.value = formula + variable;
  }
</script>

<p><strong>Indicador: </strong><?php echo $indicador->getIndicador(); ?></p>
<p><strong>Frecuencia: </strong><?php echo $indicador->getFrecuencia(); ?></p>
<p><strong>Formula Textual</strong><?php echo $indicador->getDefincion();?></p>
<br />
<p>&nbsp;</p>
<?php echo form_tag('indicador/updateFormula', 'id=form1 name=form1') ?>
<?php echo object_input_hidden_tag($indicador, 'getId') ?>
<table class="data">
  <tr>
    <th><strong>Variables</strong></th>
    <th><strong>Formula</strong></th>
  </tr>
  <tr>
    <td><?php echo select_tag('variables', options_for_select(
  $indicador->getArrayVariables()
), array('multiple' => true, 'size' => 5, 'onchange' => 'pasteVars();')) ?></td>
    <td valign="top"><?php echo object_input_tag($indicador, 'getFormula') ?></td>
  </tr>
</table>
<?php echo submit_tag('Guardar', 'class="button"') ?>
</form>
