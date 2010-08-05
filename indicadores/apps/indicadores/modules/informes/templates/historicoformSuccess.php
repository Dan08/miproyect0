<?php use_helper('Object') ?>
<h1>Informe Historico</h1>
<?php echo form_tag('informes/historico') ?>

<span>Seleccione el Indicador a consultar</span>
<br />
<?php echo select_tag('id', objects_for_select($indicador, 'getId', 'getIndicador',1)) ?>
<?php echo submit_tag('Realizar Informe') ?>
</form>
