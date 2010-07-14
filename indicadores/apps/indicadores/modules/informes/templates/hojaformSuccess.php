<?php use_helper('Object') ?>
<h1>Generar Hojas de Vida de indicador</h1>
<?php echo form_tag('informes/hoja') ?>

<span>Seleccione un objetivo</span>
<br />
<?php echo select_tag('objetivo', objects_for_select($objetivos, 'getId', 'getNombre',1)) ?>
<?php echo submit_tag('Generar Hojas de Vida') ?>
</form>
