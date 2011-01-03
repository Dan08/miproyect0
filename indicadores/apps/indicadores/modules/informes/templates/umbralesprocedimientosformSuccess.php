<?php use_helper('Object') ?>
<h1>Informe por Umbrales</h1>
<?php echo form_tag('informes/umbralesProcedimientoPoa') ?>
<p></p>
<span>Seleccione el umbral a consultar</span>
<br />
<p>
<?php echo select_tag('umbral', options_for_select( array('rojo' => 'rojo', 'amarillo' => 'amarillo', 'verde' => 'verde'), 'multiple=false')) ?>
<?php echo submit_tag('Realizar Informe') ?></p>
</form>
